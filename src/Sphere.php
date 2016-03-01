<?php
/**
 * Created by PhpStorm.
 * User: danero
 * Date: 3/1/16
 * Time: 6:45 PM
 */

namespace Shapes;

include_once('ShapeInterface.php');

class Sphere implements  ShapeInterface {

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return 4 * pi() * ($this->radius * $this->radius);
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }

    public function volume() {
        return (4/3) * (pi() * (($this->radius * $this->radius) * $this->radius));
    }

} 