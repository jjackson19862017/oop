<?php

// Making a Class
class Cars {
	
	//Creating a Variable
	var $wheel_count = 4;
	var $door_count = 4;

// A function in a class is called a method
function car_detail(){
	return "This car has " . $this->wheel_count . " Wheels";
	}

}


$bmw = new Cars();
$robin = new Cars();

echo $bmw->wheel_count;
echo "<br>";
echo $robin->wheel_count = 3;
echo "<br>";
echo $robin->car_detail();
?>