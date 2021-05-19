<?php 

class ParentClass{
    function __construct()
    {
        echo "parent class";
    }
    function Class22()
    {
        echo "shg";
    }
}
class ChildClass extends ParentClass{

    function __construct()
    {
        parent::__construct();
        parent::Class22();
        echo "child class ";
    }
}
$class1=new ParentClass();

$class2=new ChildClass();

?>