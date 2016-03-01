<?php

include_once('src/Circle.php');
include_once('src/Square.php');
include_once('src/Cube.php');
include_once('src/Sphere.php');

class ExampleTest extends\PHPUnit_Framework_TestCase {

	public function testPushAndPop()
	{
		$stack = array();
		$this->assertEquals(0, count($stack));

		array_push($stack, 'foo');
		$this->assertEquals('foo', $stack[count($stack)-1]);
		$this->assertEquals(1, count($stack));

		$this->assertEquals('foo', array_pop($stack));
		$this->assertEquals(0, count($stack));
	}

    public function testCircleArea() {
        $this->expectOutputString(78.54);
        $circle = new Shapes\Circle(5);
        print $circle->area();
    }

    public function testSquareArea() {
        $this->expectOutputString(8100);
        $square = new Shapes\Square(90);
        print $square->area();
    }

    public function testCubeArea() {
        $this->expectOutputString(7350);
        $cube = new Shapes\Cube(35);
        print $cube->area();
    }

    public function testSphereArea() {
        $this->expectOutputString(314.16);
        $sphere = new \Shapes\Sphere(5);
        print $sphere->area();
    }

}
