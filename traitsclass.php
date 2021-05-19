<?php 

trait showval{   

//trait used for multiple inheritance in php
public function msg1()
{
    echo "harman";
}
public function msg2()
{
    echo "mohali";
}
}
trait secondtrait{
    public function traitshow()
    {
        echo "phase 11";
    }
} //multiple inheritance


class Car {
    use showval,secondtrait;    //instead of keyword extend we'll use "use" in traits
}

$obj1=new Car();
$obj1->msg1();
$obj1->msg2();
$obj1->traitshow();

?>