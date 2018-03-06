<?php

abstract class TiendaCommand {

    protected $con;
    protected $tiendaCommandee;
    protected $table = null;
    protected $atributos = null;
    protected $valores = null;
    protected $orderby = null;

    function __construct($tiendaCommandee_in, string $table, array $atributos = null, array $valores = null, string $orderby = null) {
        $this->con = new StrategyDatabase('PDO');
        $this->tiendaCommandee = $tiendaCommandee_in;
        $this->table = $table;
        $this->atributos = $atributos;
        $this->valores = $valores;
        $this->orderby = $orderby;
    }

    abstract function execute();
}
