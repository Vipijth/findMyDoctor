<?php
session_start();
header('Cache-Control: max-age=900');
if(!isset($_SESSION['hospital']))
{
  die('not loged in...<a href=index.php>.click here to log in ');
}

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
?>
<link rel="stylesheet" href="body_css/body.css">
<?php 




 include('connect.php');
 $cyser= $_SESSION['hospital'];
 

$sql="SELECT * FROM person_info where email like '$cyser'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name.".".$l_name;
  }

  ?><?php 



 include('connect.php');
 $cyser= $_SESSION['hospital'];
 

$sql="SELECT * FROM person_info where email like '$cyser'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name."".$l_name;
  }

  ?>


 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body bgcolor=" #011 ">
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

<div class="margin">

<table  align="center"  height="260" style="width:100%;top:0; ">
<tr>
<td><center><font color="white"  style="text-shadow:6px 6px 6px black;" size="7" face="kalinga"><b>

<b>CANCEL APPOINMENTS 



<table  align="center"  height="400" style="width:100%;top:0; border-radius:10px;">
<tr>
<td>

<center>

<?php
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
   
   $connn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');
  
$sqt="SELECT distinct(DATE) FROM times where hs like  '$names'";

$sqtss="SELECT distinct(spec) FROM times where hs like  '$names'";

          $retval2 = mysql_query( $sqtss, $conn ); 
$sqtT="SELECT distinct(name) FROM times where hs like  '$names'";
     $retval = mysql_query( $sqt, $conn );
          $retval1 = mysql_query( $sqtT, $conn );


          $sqj="SELECT distinct(time) FROM tocken where hs like  '$names'";
       $ret = mysql_query( $sqj, $conn );
   echo "<font face=kalinga color=white><b> <form action='' method='post' >";


echo "select your doctor:&nbsp;<select name='spece'>";

 while($row = mysql_fetch_assoc($retval1)) 
  {
    $dname=$row['name'];
  
  echo "<option value=$dname>Dr.$dname</option>";
  }
  echo "</select> <select name='treat'>";

    while($row = mysql_fetch_assoc($retval2)) 
  {
    $spec=$row['spec'];
  
  echo "<option value=$spec>$spec</option>";
  }
echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;";


   echo "select a date and time:&nbsp;<select name='s'>";
  while($row = mysql_fetch_assoc($retval)) 
  {
    $date=$row['DATE'];
  
  echo "<option value=$date>$date</option>";
  }

echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;

<select name='time'>";

 while($row = mysql_fetch_assoc($ret)) 
  {
    $TIME=$row['time'];
  
  echo "<option value=$TIME style='width:200'>$TIME</option>";
  }
  echo "</select>

  <br><br>
  <textarea cols=40 required maxlength='100' name='reason' placeholder='enter the reason of cancelation 'style='width:400'>
  </textarea><br><br>
  <input type='submit' name='submit' id='submit' value='submit cancelation' style='color:white; font-family:kalinga; width:60%;background:#536;padding:3px; '>

</form>";



if(isset($_POST['submit']))
{

$reason = $_POST['reason'];
echo $reason;
$time = $_POST['time'];
$treat = $_POST['treat'];
$dr = $_POST['spece'];
$sate = $_POST['s'];
  $sqa="update tocken set status='canceled' where dname like '$dr' and hs like '$names' and spec like '$treat' and date like '$sate' ";
if(mysqli_query($link, $sqa)){
echo "<center><font color='white'> canceled successfully..";

}
else
{ 
  echo "dasads";
}
  $sqt="update tocken set reason='$reason' where dname like '$dr' and hs like '$names' and spec like '$treat' and date like '$sate'  ";
if(mysqli_query($link, $sqt)){
echo "<center> deleted informations successfully..
$dr $names $treat $sate $time";

}
}


