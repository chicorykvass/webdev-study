<?php

abstract class Shape {
  protected $name;

  // Abstract method
  abstract public function calculateArea();

  public function __construct($name) {
    $this->name = $name;
  }

  // Concrete method
  public function getName() {
    return $this->name;
  }
}

class Circle extends Shape {
  private $radius;

  public function __construct($name, $radius) {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea() {
    return pi() * pow($this->radius, 2);
  }
}

class Rectangle extends Shape {
  private $width, $height;

  public function __construct($name, $width, $height) {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea() {
    return $this->width * $this->height;
  }
}

$circle1 = new Circle('Circle 1', 5);
echo $circle1->getName() . ' - Area: ' . $circle1->calculateArea() . '<br />';

$rectangle1 = new Rectangle('Rectangle 1', 5, 3);
echo $rectangle1->getName() . ' - Area: ' . $rectangle1->calculateArea() . '<br />';
