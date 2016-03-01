<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Cube implements ShapeInterface {

    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return ($this->side * $this->side) * 6;
    }

    public function perimeter() {
        return $this->side * 12;
    }

    public function volume() {
        return ($this->side * $this->side) * $this->side;
    }

} 