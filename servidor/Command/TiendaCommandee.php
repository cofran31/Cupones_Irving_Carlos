<?php

include 'TiendaCommand.php';
include 'Commands.php';
include 'StrategyDB\StrategyDatabase.php';

class TiendaCommandee {

    private $response = [];
    private $jsondata = [];

    function setResponse($query) {
        $this->response = $query;
    }

    function getResponse() {
        if (count($this->response) > 0) {
            $this->jsondata["success"] = true;
            $this->jsondata['response'] = $this->response;
        } else
            $this->jsondata["success"] = false;
        return json_encode($this->jsondata);
    }

}
