<?php

// Making a Class
class Cars {
	
	public $wheel_count = 4; // Available everywhere
	private $door_count = 4; // Available to this Class Only
	protected $seat_count = 2; // Available to this class and sub classes, using extend
	

// A function in a class is called a method
function car_detail(){
	
	echo $this->wheel_count . "<br>";
	echo $this->door_count . "<br>";
	echo $this->seat_count . "<br>";


	}

}


$bmw = new Cars();

/*
echo $bmw->wheel_count; // Available
echo $bmw->door_count; // Not Available
echo $bmw->seat_count; // Not Available
*/

$bmw->car_detail();
?>