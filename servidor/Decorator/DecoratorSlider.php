<?php
class sql implements InterfaceApp{


    

    public function select($table) {
        return "select * from $table";
    }

}
