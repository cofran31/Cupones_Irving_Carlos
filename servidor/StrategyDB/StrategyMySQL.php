<?php

class StrategyMySQL implements IDatabase {

    protected $conn;

    public function connect() {
        $this->conn = new mysqli($host, $user, $passwd, $dbname);
        return $this->conn;
    }

    public function search(string $table, array $seleccion_campo = null, string $order = null){}

    public function searchId(string $table, array $search, array $datos, string $order = null){}

    public function close() {
        mysql_close($this->conn);
    }

}
