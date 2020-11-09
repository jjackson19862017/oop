<?php

// Making a Class
class Cars {
	
	static $wheel_count = 4;
	static $door_count = 4; 

	

// A function in a class is called a method
static function car_detail(){
	
	echo Cars::wheel_count . "<br>";
	echo Cars::door_count . "<br>";



	}

}





echo Cars::$door_count;  // Calling a Static Method

//Cars::car_detail();
?>