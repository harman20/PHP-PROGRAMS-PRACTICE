<?php

class Car{
    public $name;
    function Car1()
    {
        echo "maruti";
    }
function __construct($name)
{
    echo $this->name=$name;
}
function __destruct()
{
    echo "Audi";
}
}

$obj = new Car("renualt");


?>