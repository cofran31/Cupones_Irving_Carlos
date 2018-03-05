<?php

//defino path del archivo de .conf con los valores de la base de datos
define("PROJECTPATH", dirname(__DIR__));
define("APPPATH", PROJECTPATH . '\StrategyDB');

class StrategyPDO implements IDatabase {

    protected $_dbHost;
    protected $_dbUser;
    protected $_dbPassword;
    protected $_dbName;
    protected $query;
    public $_connection;
    private static $_instance;

    public function connect() {
        $config = $this->getConfig();
        $this->_dbHost = $config["host"];
        $this->_dbUser = $config["user"];
        $this->_dbPassword = $config["password"];
        $this->_dbName = $config["database"];
        $this->_connection = new \PDO('mysql:host=' . $this->_dbHost . '; dbname=' . $this->_dbName, $this->_dbUser, $this->_dbPassword);
        $this->_connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->_connection->exec("SET CHARACTER SET utf8");
    }

    public static function getConfig() {
        return parse_ini_file(APPPATH . '/config/config.ini');
    }

    public function search(string $table, array $seleccion_campo = null, string $order = null) {
        $seleccion_campos = '';
        if ($seleccion_campo == null) {
            $seleccion_campos = '*';
        } else {
            for ($i = 0; $i < count($seleccion_campo); $i++) {
                if ($i == 0)
                    $separator = '';
                else
                    $separator = ' , ';
                $seleccion_campos = $seleccion_campos . $separator . $seleccion_campo[$i];
            }
        }
        if ($order != null)
            $order_by = 'ORDER BY ' . $order;
        else
            $order_by = "";
        $sql = "SELECT $seleccion_campos from $table $order_by";
        $this->query = $this->_connection->prepare($sql) or die(implode(':', $this->query->errorInfo()));
        $this->query->execute() or die(implode(':', $this->query->errorInfo()));
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchId(string $table, array $search, array $datos, string $order = null) {
        $iCampos = '';
        for ($i = 0; $i < count($datos); $i++) {
            $tipo_dato = $this->tipo_dato($table, $search[$i]);
            if ($tipo_dato != 'LONG') {
                if ($i == 0)
                    $separator = " ";
                else
                    $separator = " AND ";
                $iCampos = $iCampos . $separator . '`' . $search[$i] . '`' . '=' . "'" . $datos[$i] . "'";
            }
            else {
                if ($i == 0)
                    $separator = " ";
                else
                    $separator = " AND ";
                $iCampos = $iCampos . $separator . '`' . $search[$i] . '`' . '=' . $datos[$i];
            }
        }
        if ($order != null)
            $order_by = 'ORDER BY' . " " . $order;
        else
            $order_by = '';
        $sql = "SELECT * FROM $table WHERE $iCampos";
        $this->query = $this->_connection->prepare($sql) or die(implode(':', $this->query->errorInfo()));
        $this->query->execute() or die(implode(':', $this->query->errorInfo()));
        return $this->query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tipo_dato(string $table, string $campo_tbl) {   //metodo que saca los nombres de los campos de una tabla y el tipo de dato LONG = numeric 
        $sql = "SELECT * FROM $table";
        $this->query = $this->_connection->prepare($sql) or die(implode(':', $this->query->errorInfo()));
        $this->query->execute() or die(implode(':', $this->query->errorInfo()));
        $cols = $this->query->columnCount();
        for ($i = 0; $i < $cols; $i++) {
            $campo = $this->query->getColumnMeta($i);
            $valor = $campo['name'];
            if ($valor == $campo_tbl)
                $mostrar = $campo['native_type'];
        }
        return $mostrar;
    }

    public function close() {
        unset($this->_connection);
    }

    // implementamos el patron singleton para no permitir mas de una instancia en la conexion
    public static function instance() {
        if (!isset(self::$_instance)) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }
        return self::$_instance;
    }

}
