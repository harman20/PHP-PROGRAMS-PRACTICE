<?php 

class ParentClass{
    function __construct()
    {
        echo "parent class";
    }
}
class ChildClass extends ParentClass{

    function __construct()
    {
        parent::__construct();
        echo "child class ";
    }
}
$class1=new ParentClass();

$class2=new ChildClass();

?>