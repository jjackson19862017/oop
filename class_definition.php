<?php

// Making a Class
class Cars {

// A function in a class is called a method

function greeting(){

}




}

// See All Classes that a available
$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class;
}

$my_methods = get_class_methods('Cars');

foreach ($my_methods as $method) {
    echo $method . "br";
}

?>