<?php

class Model{

    public $table_name;
    public $primaryKey;


    function set_table_name($name) 
    {
        $this->$table_name = $name;
    }
    function get_table_name() 
    {
        return $this->$table_name;
    }

    function field()
    {
       
    }
}

?>