<?php

class Car{
    function cartype()
    {
        echo "car1";
    }
    function cartype1()
    {
        echo "car2";
    }
}

//multilevel/hierarichal inheritance 

//super class / parent clas / base class
//child class/ sub class/ derived class
class Car1 extends Car{
    function carMake()
    {
        echo "maruti";
    }
    function carMake2()
    {
        echo "bmw";
    }
}
class car2 extends Car1{
    function carName()
    {
    echo "swift";
    }
}

$carvar=new Car();
$carvar->cartype();

$carvar1=new Car1();
$carvar1->cartype();

$carvar2=new car2();
$carvar2->cartype();
$carvar2->carMake();

?>