<?php
session_start();
 include('connect.php');
 $cyser= $_SESSION['cuser'];

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

$hs = mysqli_real_escape_string($link, $_REQUEST['dname']);
$spec = mysqli_real_escape_string($link, $_REQUEST['spec']);
$zzz = mysqli_real_escape_string($link, $_REQUEST['date']);
$xxx = mysqli_real_escape_string($link, $_REQUEST['time']);



$sql="SELECT * FROM hospital  where name='$hs'";

 

     $retval = mysql_query( $sql, $conn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  {
	  $place=$row['place'];
	  $contacts=$row['contacts'];
  }



 

$sql="SELECT * FROM person_info where email like '$cyser'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name.".".$l_name;
  }

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
$tk = mysqli_real_escape_string($link, $_REQUEST['token']);
$pname = mysqli_real_escape_string($link, $_REQUEST['pname']);
$pplace = mysqli_real_escape_string($link, $_REQUEST['pplace']);
$page = mysqli_real_escape_string($link, $_REQUEST['page']);;
$sex = mysqli_real_escape_string($link, $_REQUEST['sex']);
$ac = mysqli_real_escape_string($link, $_REQUEST['ac']);
$hs = mysqli_real_escape_string($link, $_REQUEST['date']);
$spec = mysqli_real_escape_string($link, $_REQUEST['time']);
$hsp = mysqli_real_escape_string($link, $_REQUEST['name']);
$specp = mysqli_real_escape_string($link, $_REQUEST['spec']);
$result = mysqli_real_escape_string($link, $_REQUEST['result']);
?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "manju4");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');



$sqll="SELECT * FROM doctors  where name like '%$hsp%' and spec like '%$specp%' ";
     $retval = mysql_query( $sqll, $conn );
	
  while($row = mysql_fetch_assoc($retval)) 
  { 

$yy=$row['hospital'];
}


$sq = "insert into tocken (pname,pplace,age,sex,dname,spec,hs,ac,tocken,date,time,status,cancel,expected_time)values('$pname','$pplace','$page','$sex','$hsp','$specp','$yy','$ac','$tk','$zzz','$xxx','available','no','$result')";

if(mysqli_query($link, $sq)){
header('location:mytokens.php');
}
?>

