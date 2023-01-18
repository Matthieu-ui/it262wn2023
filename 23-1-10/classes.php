<?php
//classes.php

// a class is a blueprint for an object
// an object is an instance of a class


// a variable is a container for a value
// to store many variables in one place you need an array
// to store many arrays in one place you need an object
// to store many objects in one place you need a class
// to store many classes in one place you need a database

// a class is a container for an object
// an object is a container for an array
// an array is a container for a variable
// a variable is a container for a value


// cars class will include: make, model, color, mileage, etc.


$myCar = new Car('Ford', 'F150', 'red', 100000);
echo '<pre>';
var_dump($myCar);
echo '</pre>';


class Car {

    // properties are variables inside of a class
    // public variables can be accessed from anywhere

    public $make = "";
    public $model = "";
    public $color = "";
    public $mileage = 0;


    // highlight constructor before turn in
    public function __construct($make, $model, $color, $mileage){
        // *function __construct* is a function that is called when an object is created

        // $this is a reference to the current object
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->mileage = $mileage;
    }
};
