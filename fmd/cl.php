<?php
session_start();
header('Cache-Control: max-age=900');
if(!isset($_SESSION['cuser']))
{
	die('not loged in...<a href=index.php>.click here to log in ');
}

include('connect.php');
$cyser= $_SESSION['cuser'];
$link = mysqli_connect("localhost", "root", "", "manju4");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$pname = $_POST['a'];
	$hs = $_POST['z'];
	$age = $_POST['b'];
	$sex = $_POST['c'];
	$dname = $_POST['d'];
	$spec = $_POST['f'];
	$tk = $_POST['g'];
	$date = $_POST['h'];
	$time = $_POST['i'];
	$pplace = $_POST['q'];
	
 $sqt="update tocken set cancel='yes' where pname like '$pname' and age like '$age' and pplace like '$pplace' and ac like '$cyser' and sex like '$sex'  and  tocken like '$tk' and date like '$date' and time like '$time' ";
if(mysqli_query($link, $sqt)){
header('location:mytokens.php#c');
}
else
echo "sad";
?>