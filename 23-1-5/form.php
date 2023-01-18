<?php
//form.php

//if else statement

if(isset($_POST['first_name']) && isset($_POST['fav_color']) && isset($_POST['toppings'])){

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$fav = implode(", ", $_POST['toppings']);

echo "
<p>Your first name is: ".$_POST['first_name']."</p>
<p>Your favorite color is: ".$_POST['fav_color']."</p>
<p>Your favorite pizza toppings are: </p>
$fav
<br/><br/>



";


echo "back to <a href='form.php'>form</a>";


}else{

    echo "
    <fieldset>
    <legend>Form.php</legend>
    <form action='' method='POST'>
    <label for='first_name'>First Name:</label>
    <input type='text' name='first_name'/>
    <br/><br/>
    <fieldset>
    <legend>Favorite Color</legend>
    <label for='fav_color'>Favorite Color:</label>
    <input type='radio' name='fav_color' value='red'>Red</input>
    <input type='radio' name='fav_color' value='blue'>Blue</input>
    <input type='radio' name='fav_color' value='green'>Green</input>
    </fieldset>
    <br/><br/>
    <fieldset>
    <legend>Favorite Pizza Toppings</legend>
    <label for='toppings'>Favorite Color:</label>
    <input type='checkbox' name='toppings[]' value='sausage'>Sausage</input>
    <input type='checkbox' name='toppings[]' value='cheese'>Cheese</input>
    <input type='checkbox' name='toppings[]' value='sauce'>Sauce</input>
    </fieldset>
    <br/><br/>
    <input type='submit' value='Submit' />
    <input type='reset' value='Reset' />
    </form>
    </fieldset>

    ";
}