<?php

class StrategyMySQLi implements IDatabase {

    protected $conn;

    public function connect() {
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
    }

    public function producto_all_precio(string $table, array $search = null, array $datos = null){
        
    }
    
    public function producto_precio(string $table, array $search = null, array $datos) {
        
    }

    public function search(string $table, array $seleccion_campo = null, string $order = null) {
        
    }

    public function searchId(string $table, array $search, array $datos, string $order = null) {
        
    }

    public function close() {
        mysqli_close($this->conn);
    }

}
