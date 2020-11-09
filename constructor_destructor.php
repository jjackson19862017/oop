<?php
// Making a Class
class Cars {
	public $wheel_count = 4;
	static $door_count = 4;
// A function in a class is called a method
	function __construct()
	{
		echo $this->wheel_count . "<br>";
		echo self::$door_count++ . "<br>";
	}
	function __destruct()
	{
		echo self::$door_count-- . "<br>";
	}
}
$bmw = new Cars(); // Gets called automatically
$robin = new Cars(); // Gets called automatically
?>