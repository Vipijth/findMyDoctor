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

<b>APPOINMENTS in <?php echo strtoupper($names) ;?>






<table  align="center"  height="" style="width:100%;top:0; border-radius:10px;">
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
  
$sqt="SELECT * FROM times where hs like  '$names'";

$sqtss="SELECT distinct(spec) FROM doctors where hospital like  '$names'";

          $retval2 = mysql_query( $sqtss, $conn ); 
$sqtT="SELECT distinct(name) FROM doctors where hospital like  '$names'";
     $retval = mysql_query( $sqt, $conn );
          $retval1 = mysql_query( $sqtT, $conn );
          echo "<form action='' method='post'><input type='submit' name='rr' id='submit' value='all details' style=width:100px;></form>";
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


	 echo "select a date:&nbsp;<select name='s'>";
  while($row = mysql_fetch_assoc($retval)) 
  {
	  $date=$row['DATE'];
	
	echo "<option value=$date>$date</option>";
  }

echo "</select>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='submit' id='submit' value='submit' style=width:100px;padding:3px;></form>";
 echo "";
if(isset($_POST['rr']))
{


$sqll1="SELECT * FROM tocken where hs like '$name' and status like 'available' and cancel like 'no' ";
$retval = mysql_query( $sqll1, $connn );
echo " <table   align=center' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Place'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='SPECIALISED  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:67;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:185;text-align:center;' value='Time'>
</tr>
</td>
</table>
 <table align=center' style='width:96%; '>
<tr>
<td>";
  while($row = mysql_fetch_assoc($retval)) 
  { 
 echo "
<b><center>

<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pplace']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['spec']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='{$row['time']}'>


";
  }

}
if(isset($_POST['submit']))
{

$treat = $_POST['treat'];
$spece = $_POST['spece'];

$sdates = $_POST['s'];

$sqll="SELECT * FROM tocken where hs like '$name' and DATE like '$sdates' and dname like '$spece' and spec like '$treat' and status like 'available' and cancel like 'no' ";



     $retval = mysql_query( $sqll, $connn );
      $count = mysql_num_rows($retval);
  		 if($count==0)
  		 {

echo "<font face=kalinga color=white><b> sorry..there is no appointments on this date";
  		 }
  		 else
  		 	{
  		 		echo "
<font face=kalinga color=white><b>
    Dr.$spece's APPOINMENTS in $sdates <table   align=center' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Place'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='SPECIALISED  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:67;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:185;text-align:center;' value='Time'>
</tr>
</td>
</table>
 <table align=center' style='width:100%; '>
<tr>
<td>";
	 
  while($row = mysql_fetch_assoc($retval)) 
  { 

  		

 echo "
<b><center>


<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pplace']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['spec']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='{$row['time']}'>


";
  }}}
?>
