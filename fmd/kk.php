<?php $link = mysqli_connect("localhost", "root", "", "manju4");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
echo $name;
?>