<?php

interface IDatabase {

    function connect();

    public function search(string $table, array $seleccion_campo = null, string $order = null);

    public function searchId(string $table, array $search, array $datos, string $order = null);

    function close();
}
