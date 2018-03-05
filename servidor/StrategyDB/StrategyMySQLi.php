<?php

class StrategyMySQLi implements IDatabase {

    protected $conn;

    public function connect() {
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
    }

    public function search(string $table, array $seleccion_campo = null, string $order = null){}

    public function searchId(string $table, array $search, array $datos, string $order = null){}

    public function close() {
        mysqli_close($this->conn);
    }

}
