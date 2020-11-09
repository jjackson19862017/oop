<?php

// Making a Class
class Cars 
{
	private $door_count = 4; 
	
	// A function in a class is called a method
	function get_values()
		{
		echo $this->door_count . "<br>";
		}
	
	function set_values()
		{
		$this->door_count = 10;
		}
}

$bmw = new Cars();
$bmw->set_values();
$bmw->get_values();


?>