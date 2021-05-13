<?php

use Car as GlobalCar;
use Car1 as GlobalCar1;

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
//superclass/parentclass/baseclass
//childclass/subclass/derivedclass

class Car1 extends Car  
{
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
    function carName(){
        echo "swiift";
    
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