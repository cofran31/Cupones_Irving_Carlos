<?php

class BuscarTiendaCommand extends TiendaCommand {

    function execute() {
        $query = $this->con->all($this->table, $this->atributos, $this->orderby);
        $this->tiendaCommandee->setResponse($query);
    }

}

class BuscarTiendaIdCommand extends TiendaCommand {

    function execute() {
        $query = $this->con->allId($this->table, $this->atributos, $this->valores, $this->orderby);
        $this->tiendaCommandee->setResponse($query);
    }

}

class BuscarProductPriceCommand extends TiendaCommand {

    function execute() {
        $query = $this->con->product_price($this->table, $this->atributos, $this->valores);
        $this->tiendaCommandee->setResponse($query);
    }

}

class BuscarAllProductPriceCommand extends TiendaCommand {

    function execute() {
        $query = $this->con->product_all_price($this->table, $this->atributos, $this->valores);
        $this->tiendaCommandee->setResponse($query);
    }

}
