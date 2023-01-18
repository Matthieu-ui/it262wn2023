<?php
//classes2.php

// cars class will include: make, model, color, mileage, etc.

//create cars array to store multiple cars
$cars[] = new Car('Chevy', 'Impala', 'black', 20000);
$cars[] = new Car('Dodge', 'Ram', 'red', 100000);
$cars[] = new Car('Toyota', 'Camry', 'blue', 50000);

// foreach loop through cars array
// output average mileage of all cars

$total = 0;

foreach($cars as $myCar){
    echo '<p>My car is a '.$myCar->make.' '.$myCar->model.' that is '.$myCar->color.' and has '.$myCar->mileage.' miles on it.</p>';

    $total += $myCar->mileage;
}

$average = $total / count($cars);
// round average to 2 decimal places with number_format()

echo '<hr><b>The average mileage of all cars is '.number_format($average, 2).' miles.</b>';

// |*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*|*| \\

class Car {

    // **properties are variables inside of a class**
    // **public variables globally accessible**

    public $make = "";
    public $model = "";
    public $color = "";
    public $mileage = 0;


    // **highlight constructor before turn in**
    public function __construct($make, $model, $color, $mileage){
        // **function __construct** is a function that is called when an object is created

        // $this is a reference to the current object
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->mileage = $mileage;
    }
};
