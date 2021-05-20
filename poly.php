<?php

interface Shape{
    public function calArea();
}

class Circle implements Shape{

    private $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }
    public function calArea()
    {
        return $this->radius* $this->radius* pi();
    }

}
class Rectangle implements Shape{
    private $width;
    private $height;

    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function calArea()
    {
        return $this->width*$this->height;
    }
}

$circle1=new Circle(4);

$rect=new Rectangle(4,5);

echo $circle1->calArea();
echo "<br>";

echo $rect->calArea();
?>