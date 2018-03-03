<?php



class StrategyMySQL implements IDatabase {

    protected $conn;

    public function connect() {
        $this->conn = new mysqli($host, $user, $passwd, $dbname);
        return $this->conn;
    }

    public function query($sql) {
        return mysql_query($sql, $this->conn);
    }

    public function close() {
        mysql_close($this->conn);
    }

    function test(){
        return "";
    }
}
