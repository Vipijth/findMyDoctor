<?php
session_start();
header('Cache-Control: max-age=900');
if(isset($_SESSION['hospital']))
{
 include('connect.php');
 $hsp= $_SESSION['hospital'];
 

$sql="SELECT * FROM person_info where email like '$hsp'";



     $retval = mysql_query( $sql, $connection );

   

  while($row = mysql_fetch_assoc($retval)) 

  {

    $name=$row['name'];

    $l_name=$row['l_name'];
$names=$name.".".$l_name;
  }

  ?><?php 

$link = mysqli_connect("localhost", "root", "", "manju4");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');

// Escape user inputs for security



$sql="SELECT * FROM hospital  ";

 

     $retval = mysql_query( $sql, $conn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  {
	  $place=$row['place'];
	  $contacts=$row['contacts'];
  }
}
if(!isset($_SESSION['hospital']))
{
  die('not loged in...<a href=index.php>.click here to log in ');
}
?>
<link rel="stylesheet" href="body_css/body.css">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<?php 





 include('connect.php'); 

$sql="SELECT * FROM person_info where email like '$hsp'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name."".$l_name;
  }
  $sql="SELECT * FROM hospital where name like '$names'";



     $retval = mysql_query( $sql, $connection );

   

  while($row = mysql_fetch_assoc($retval)) 

  {

    $place=$row['place'];
    $con=$row['contacts'];

  }

  ?>


 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body bgcolor=" #022 ">
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=home.php class=nl>HOME</a>

<a href=hss.php class=nl>APPOINMENTS</a>
<a href="update.php " class=nl>UPDATE</a>
<a href="reset.php " class=nl>CANCEL TOKENS</a>
<a href=3.php class=nl onclick="return confirm('Do you want to logout?'); " >LOG OUT</a>

</div>
</nav>





<div class=wrap>
   <font color="white"  style="text-shadow:1px 1px 1px  #e5ec12;" size="3" face="kalinga"><big>
  <?php echo strtoupper($names)."  HOSPITAL<br></big>".strtoupper($place)."<br>".$con ;?>

<div class="margin">

<table  align="center"  height="260" style="width:100%;top:0; ">
<tr>
<td>
  <center>
    <font color="white"  style="text-shadow:6px 6px 6px black;" size="7" face="kalinga"><b>

<b>WELCOME TO FIND MY DOCTOR






<table  align="center"  height="" style="width:100%;top:0; border-radius:10px;">
<tr>
<td>

<center>
  <font color=" #e9eab5">

&copy Team fmd