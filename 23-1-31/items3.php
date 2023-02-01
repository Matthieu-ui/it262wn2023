<?php
// <!-- Items3.php -->

$myItem = new Item(1, 'taco', 'chorizo taco', '4.95');
$myItem->addExtra('salsa');
$myItem->addExtra('guacamole');
$myItem->addExtra('queso');
$items[] = $myItem;

$myItem = new Item(2, 'sundae', 'chocolate sundae', '8.95');
$myItem->addExtra('whipped cream');
$myItem->addExtra('chocolate sauce');
$myItem->addExtra('cherry');
$items[] = $myItem;

$myItem = new Item(3, 'salad', 'dinner salad', '9.95');
$myItem->addExtra('croutons');
$myItem->addExtra('cheese');
$myItem->addExtra('ranch dressing');
$items[] = $myItem;

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
public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price){
        // create This-> to reference the current object
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
        // $this->Extras = $Extras;

    } //end of constructor

    //create a function to add extras
    public function addExtra($Extra){
        $this->Extras[] = $Extra;

    }

} //end of Item class