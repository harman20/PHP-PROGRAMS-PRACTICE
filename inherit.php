<?php

class Carr2{
   
    function cartype()
    {
        echo "maruti";
    }
    function carType1()
    {
        echo "sedan";
    }
}
class Car1 extends Carr2{
    function car1()
    {
        echo "dfjdf";
    }
}
$car1=new Carr2();
$car2=new Car1();
$car1->cartype();
$car1->carType1();
$car2->cartype();


?>