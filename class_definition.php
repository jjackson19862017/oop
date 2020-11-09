<?php

// Creating a Class
class Cars {





}

// See All Classes that a available
$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class;
}

?>