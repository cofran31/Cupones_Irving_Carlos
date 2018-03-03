<?php
include 'StrategyDatabase.php';
$dbPDO = new StrategyDatabase('PDO');
$consulta = "SELECT * FROM usuario";
print_r($dbPDO->querys($consulta));


