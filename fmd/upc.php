<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "manju4");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');

// Escape user inputs for security

$dn = mysqli_real_escape_string($link, $_REQUEST['dn']);
$hn = mysqli_real_escape_string($link, $_REQUEST['hn']);
$sp = mysqli_real_escape_string($link, $_REQUEST['sp']);
$date = mysqli_real_escape_string($link, $_REQUEST['date1']);
$month = mysqli_real_escape_string($link, $_REQUEST['month1']);
$year = mysqli_real_escape_string($link, $_REQUEST['year1']);
$am = mysqli_real_escape_string($link, $_REQUEST['am']);
$pm = mysqli_real_escape_string($link, $_REQUEST['pm']);
$tk = mysqli_real_escape_string($link, $_REQUEST['tk']);
$dates=$date.$month.$year;
$tim=$am.'am to'.$pm.'pm';


$sql= "INSERT INTO times (name,spec,DATE,TIME,tocken,hs) VALUES('$dn','$sp','$dates','$tim','$tk','$hn')";

if(mysqli_query($link,$sql)){
header("Location: nnm.php"); /* Redirect browser */


}
 else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

	



	

	

	}



 

// close connection

mysqli_close($link);
?>
