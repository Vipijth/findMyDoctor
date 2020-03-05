

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
  mysql_select_db('manju4');
  $hs = mysqli_real_escape_string($link, $_REQUEST['date']);
$spec = mysqli_real_escape_string($link, $_REQUEST['time']);
$hsp = mysqli_real_escape_string($link, $_REQUEST['name']);
$specp = mysqli_real_escape_string($link, $_REQUEST['spec']);
$tk = mysqli_real_escape_string($link, $_REQUEST['token']);


$tkk=$tk+1;
$sqll="SELECT * FROM times  where name like '%$hsp%' and spec like '%$specp%' and DATE like '%$hs%' and TIME like '%$spec%'";
     $retval = mysql_query( $sqll, $conn );
	
  while($row = mysql_fetch_assoc($retval)) 
  { 

$id=$row['id'];
}


$sq = "update times set tocken='$tkk' where name like '%$hsp%' and spec like '%$specp%' and DATE like '%$hs%' and TIME like '%$spec%'";

if(mysqli_query($link, $sq)){
	echo "<script>window.location='home.php'</script>";

}

?>