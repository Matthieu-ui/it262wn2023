<?php
// postback.php week 1
// form to enter name
// if name is entered, show it

//if else statement 

//create if 
if(isset($_POST['first_name']) && isset($_POST['last_name'])){
    // echo the data
    echo "Hello, ".$_POST['first_name']." ".$_POST['last_name']."!";
    echo "<br/> <a href='postback.php'>Back</a>";

} else{

    //show the form
    echo "

    <fieldset>
    <legend>Enter your name</legend>
    <form action='' method='POST'>
    <label for='first_name'>First Name</label>
    <input type='text' name='first_name' />
    <label for='last_name'>Last Name</label>
    <input type='text' name='last_name' />
    <input type='submit' value='Submit' />
    <input type='reset' value='Reset' />
    </form>
    </fieldset>

    ";


}




