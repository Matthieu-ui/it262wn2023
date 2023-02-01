<?php
// <!-- Items.php -->

// Create Item object
$myItem = new Item(1, 'taco', 'chorizo taco', '4.95');
echo '<pre>';
var_dump($myItem);
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