<?php
class DecoratorJoin implements InterfaceApp{
    public $sql;
    function __construct(InterfaceApp $sql) {
        $this->sql = $sql;
    }

    
    
    public function select($table) {
        return  $this->sql->select($table)." join categorie on id_categorie=id_$table"; 
    }

}
