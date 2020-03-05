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
<div class=wrap>

<div class="margin">
  <font color="white" face="kalinga">
<?php echo "you can updates token informations...";?>


<br>
<br>
<table align="center">
  <tr>
    <td>  



      <font color="white" face="kalinga">
<?php

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
  

$sqtss="SELECT distinct(spec) FROM doctors where hospital like  '$names'";

          $retval2 = mysql_query( $sqtss, $conn );
 
$sqts="SELECT distinct(name) FROM doctors where hospital like  '$names'";

          $retval1 = mysql_query( $sqts, $conn );
echo "<form action='' method='post'>select your doctor to update token informations:&nbsp;<select name='doctor'>";

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


  echo "</select>&nbsp;&nbsp;&nbsp;<input type='submit' value='Go' name='sub' style='width:60px; border-radius:4px; padding:3px;color:white; background:#296';>
  </form>";

  if(isset($_POST['sub']))
{

  $_SESSION["doctor"]=$_POST['doctor'];
   $_SESSION["treat"]=$_POST['treat'];
$doctor = $_POST['doctor'];

$sqll1="SELECT * FROM tocken where hs like '$name' ";
$retval = mysql_query( $sqll1, $connn );

echo "<table   align=center' bgcolor='white' style='width:960;height:380; box-shadow:3px 2px 3px 3px black; '>
<tr>
<td>

<font color='#100' face='kalinga'><big><b>Dr.$doctor
<hr/>

<form action='' method='post'>
";
?>
<input type='submit' onclick="return confirm('Do you want to delete all tokens?'); " value='clear all tokens'  name='clear' style='background:#728; width:100%; color:white;'>
<?php echo "
</form>";  $treat= $_SESSION["treat"];
 $doctor= $_SESSION["doctor"];
$sqtc="SELECT distinct(date) FROM times  where hs like '$name' and name like '$doctor' and spec like '$treat'";

          $retva = mysql_query( $sqtc, $conn );
echo "<form action='' method='post'><center></b></big>select  a date:
<select name='date' style='padding:4px 5px;font-family:kalinga;box-shadow:2px 1px 2px 1px black; width:200px;text-align:center;'>";

 while($row = mysql_fetch_assoc($retva)) 
  {
    $date=$row['date'];
  echo $date;
  echo "<option value=$date>$date</option>";
  }
  echo "</select> 
";
?>&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' onclick="return confirm('Do you want to delete all tokens in this date?'); " value='clear  tokens in this date'  name='clear2' style='background:#128;border-radius: 5px; padding:7px; width:20%; color:white;'>
<?php echo "</form>";
?><table align="center" style="width:100%; height:200;">
  <tr>
    <td colspan="4">
      <ul align="center"><b><big>
        <li>Update Dates<hr/></li></ul>

      </big></b>
    </tr>
  </td>
  <form action="" method="post">
  <tr>
    <td>
      Date1:<input  type="date" required class="op"  name="t1" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time"  required class="op" class="op"   name="am1" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op"  required name="pm1" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op"  required name="tk1" placeholder="enter available tokens" style="width:190;">
    </td></tr>
  <tr>
    <td>
      Date2:<input  type="date" class="op"  required name="t2" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" class="op" required  name="am2" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op" required  name="pm2" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op" required  name="tk2" placeholder="enter available tokens" style="width:190;">
    </td></tr>
  <tr>
    <td>
      Date3:<input  type="date" class="op" required name="t3" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" class="op" requiredrequired  name="am3" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op" required  name="pm3" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op" required  name="tk3" placeholder="enter available tokens" style="width:190;"></tr>
  <tr>
    <td>
      Date4:<input  type="date" class="op" required  name="t4" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" class="op" required  name="am4" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op"   name="pm4" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op"  required name="tk4" placeholder="enter available tokens" style="width:190;">
    </td>    </td></tr>
  <tr>
    <td>
      Date5:<input  type="date" class="op" required name="t5" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" class="op"  required  name="am5" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op"   name="pm5" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op"  required name="tk5" placeholder="enter available tokens" style="width:190;">
    </td></tr>
  <tr>
    <td>
      Date6:<input  type="date" class="op" requiredrequired name="t6" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" required class="op"   name="am6" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op"  required name="pm6" placeholder="enter the date" style="width:190;">
    </td><td> <input type="number" min="1" class="op" required   name="tk6" placeholder="enter available tokens" style="width:190;">
    </td></tr>
  <tr>
    <td>
      Date7:<input  type="date" class="op" required name="t7" placeholder="enter the date" style="width:190;">
    </td><td>
      from:<input type="time" class="op" class="op" required   name="am7" placeholder="enter the date" style="width:190;">
    </td><td>to:
       <input type="time" class="op"   required name="pm7" placeholder="enter the date" style="width:190;">
    </td>
<td> <input type="number" min="1" class="op"  required name="tk7" placeholder="enter available tokens" style="width:190;">
    </td>

  </tr>
<tr>
  <td colspan="4">
    <input type="submit" value='update all tokens' onclick="return confirm('Do you want to UPLOAD  all tokens in these dates?'); " name='upd' style='background:#728; width:100%; color:white;text-align: center;'>
</form></table><?php
}
  if(isset($_POST['clear']))
{
   $doctor= $_SESSION["doctor"];
   $treat= $_SESSION["treat"];
echo " <br> <table   align=center' bgcolor='white' style='width:960;height:380; box-shadow:3px 2px 3px 3px black; '>
<tr>
<td>



";
$sqt="delete from times where  hs like '$names' and name like '$doctor' and spec like '$treat'";
if(mysqli_query($link, $sqt)){
echo "<center> deleted informations successfully..</table>";

}

}


 if(isset($_POST['clear2']))
{
    $_SESSION["date"]=$_POST['date'];
   $doctor= $_SESSION["doctor"];
   $treat= $_SESSION["treat"];
     $dt= $_SESSION["date"];
echo " <br> <table   align=center' bgcolor='white' style='width:960;height:380; box-shadow:3px 2px 3px 3px black; '>
<tr>
<td>



";
$sqa="delete from times where  hs like '$names' and name like '$doctor' and spec like '$treat' and DATE like '$dt'";
if(mysqli_query($link, $sqa)){
echo "<center> deleted informations successfully..";

}
}

 if(isset($_POST['upd']))
{
    $doctor= $_SESSION["doctor"];
    $t=" to ";
   $treat= $_SESSION["treat"];
    $date1=$_POST['t1'];
    $date2=$_POST['t2'];
    $date3=$_POST['t3'];
    $date4=$_POST['t4'];
    $date5=$_POST['t5'];
    $date6=$_POST['t6'];
    $date7=$_POST['t7'];
    $am1=$_POST['am1'];
    $am2=$_POST['am2'];
$am3=$_POST['am3'];
$am4=$_POST['am4'];
$am5=$_POST['am5'];
$am6=$_POST['am6'];
$am7=$_POST['am7'];
    $pm1=$_POST['pm1'];
    $pm2=$_POST['pm2'];
$pm3=$_POST['pm3'];
$pm4=$_POST['pm4'];
$pm5=$_POST['pm5'];
$pm6=$_POST['pm6'];
$pm7=$_POST['pm7'];
$time1=date('h:i A', strtotime($am1)).$t.date('h:i A', strtotime($pm1));
$time2=date('h:i A', strtotime($am2)).$t.date('h:i A', strtotime($pm2));
$time3=date('h:i A', strtotime($am3)).$t.date('h:i A', strtotime($pm3));
$time4=date('h:i A', strtotime($am4)).$t.date('h:i A', strtotime($pm4));
$time5=date('h:i A', strtotime($am5)).$t.date('h:i A', strtotime($pm5));
$time6=date('h:i A', strtotime($am6)).$t.date('h:i A', strtotime($pm6));
$time7=date('h:i A', strtotime($am7)).$t.date('h:i A', strtotime($pm7));
$suc=$pm1-$am1;
$tk1=$_POST['tk1'];
$tk2=$_POST['tk2'];
$tk3=$_POST['tk3'];
$tk4=$_POST['tk4'];
$tk5=$_POST['tk5'];
$tk6=$_POST['tk6'];
$tk7=$_POST['tk7'];

echo "<br> <table   align=center' bgcolor='white' style='width:960;height:380; box-shadow:3px 2px 3px 3px black; '>
<tr>
<td>

";

$sq = "insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date1','$time1','$tk1','$names','$am1','$pm1')";
$sq1="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date2','$time2','$tk2','$names','$am2','$pm2')";
$sq3="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date3','$time3','$tk3','$names','$am3','$pm3')";
$sq4="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date4','$time4','$tk4','$names','$am4','$pm4')";
$sq5="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date5','$time5','$tk5','$names','$am5','$pm5')";
$sq6="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date6','$time6','$tk6','$names','$am6','$pm6')";
$sq7="insert into times(name,spec,DATE,TIME,tocken,hs,starttime,endtime)values('$doctor','$treat','$date7','$time7','$tk7','$names','$am7','$pm7')";
if(mysqli_query($link, $sq)){

}
if(mysqli_query($link, $sq1)){

}

if(mysqli_query($link, $sq3)){

}

if(mysqli_query($link, $sq7)){

}

if(mysqli_query($link, $sq4)){

}

if(mysqli_query($link, $sq5)){

}

if(mysqli_query($link, $sq6)){


echo " <center> successfully  ..last update on<i> ".date("Y/m/d");
}






}?>


<br><br><br>