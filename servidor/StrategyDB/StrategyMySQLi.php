<?php


class StrategyMySQLi implements IDatabase {

    protected $conn;

    public function connect() {
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
    }

    public function query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    public function close() {
        mysqli_close($this->conn);
    }

    function test(){
        return "";
    }
}
