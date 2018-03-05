<?php

include 'IDatabase.php';
include 'StrategyPDO.php';
include 'StrategyMySQL.php';
include 'StrategyMySQLi.php';

class StrategyDatabase {

    protected $strategy = NULL;

    public function __construct($strategy_id) {
        switch ($strategy_id) {
            case "MySQLi":
                $this->strategy = new StrategyMySQLi();
                $this->strategy->connect();
                break;
            case "PDO":
                $this->strategy = new StrategyPDO();
                $this->strategy->connect();
                break;
            case "MySQL":
                $this->strategy = new StrategyMySQL();
                $this->strategy->connect();
                break;
        }
    }

    function all(string $table, array $seleccion_campo = null, string $order = null) {
        return $this->strategy->search($table, $seleccion_campo, $order);
    }

    function allId(string $table, array $search, array $datos, string $order = null) {
        return $this->strategy->searchId($table, $search, $datos, $order);
    }

    //Mas metodos de la clase Database
}
