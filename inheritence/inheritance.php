<?php

class Shape{
    protected $width;
    protected $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
}

class Circle extends Shape{
    protected $radius;

    public function __construct($radius)
    {
        parent::__construct($radius, $radius);
    }

    public function getCircleArea(){
        return pi() * $this->getArea();
    }
}


class Rectangle extends Shape{

}

$rectangle = new Rectangle(5, 10); // 50
echo $rectangle->getArea();

echo "</br>";

$circle = new Circle(5); // 78.4
echo $circle->getCircleArea();