<?php

trait abc{
    public function ABC(){
        echo "Traits are an interesting topic";
    }
}

trait abcd{
    public function ABCD(){
        echo " Traits are important concept";
    }
}

class A{
    use abc,abcd;
}

$obj=new A();
$obj->ABC();
$obj->ABCD();
?>