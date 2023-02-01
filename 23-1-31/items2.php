<?php
// <!-- Items2.php -->

$items[] = new Item(1, 'taco', 'chorizo taco', '4.95');
$items[] = new Item(2, 'taco', 'pollo taco', '4.95');
$items[] = new Item(3, 'taco', 'carne asada taco', '5.95');



echo '<pre>';
var_dump($items);
echo '</pre>';

// Create Items class
class Item {

// Create public properties for Item 
public $ID = '0';
public $Name = '';
public $Description = '';
public $Price = '0.00';
// public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){
        // create This-> to reference the current object
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        // $this->Extras = $Extras;

    } //end of constructor
} //end of Item class