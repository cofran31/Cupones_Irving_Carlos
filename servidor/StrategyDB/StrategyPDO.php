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

    public function query($sql) {
        $this->query = $this->_connection->prepare($sql) or die(implode(':', $this->query->errorInfo()));
        $this->query->execute() or die(implode(':', $this->query->errorInfo()));
        return $this->query->fetchAll();
    }

    public function close() {
        unset($this->_connection);
    }

    public function test() {
        return "ok";
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
