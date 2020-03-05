<?php
session_start();
header('Cache-Control: max-age=900');
if(isset($_SESSION['xuser']))
{
 include('connect.php');
 $hsp= $_SESSION['xuser'];
 
$usr=$_POST['usr'];

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
if(!isset($_SESSION['xuser']))
{
  die('not loged in...<a href=index.php>.click here to log in ');
}
?><script>
function check()
{
  
  var x=document.getElementById("mob").value;
  var l=x.length;
  if(l!=10)
  {
    alert('enter a valid mobile number');
    
  }
  
}
</script>
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
<a href=adm.php class=nl>Admin Panel</a>

<a href=3.php class=nl onclick="return confirm('Do you want to logout?'); " style="right:0;position: fixed;border-left:1px solid grey;">LOG OUT</a>

</div>
</nav>






   <font color="white"  style="text-shadow:1px 1px 1px  #e5ec12;" size="3" face="kalinga"><big>




<table  align="center"   style="width:100%;top:0; ">
<tr>
<td>

  <table bgcolor="white" style="width:17%; height:100%;left:0;top:50;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
  <tr bgcolor="#137d7b" style="top:0; height: 1px;">
    <td >
      
      <font color="white" face="kalinga"><b><big><big><big><i class="fa fa-user" aria-hidden="true"></i></big></big>&nbsp;<?php echo $names; ?>
    </td>
    <tr bgcolor="#fff" style="top:0; height: 570px;">
      <td>
      <form action='hsptl.php' method="post">
        <input type="submit" class="lk" name="hs" value="HOSPITALS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:100;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
               <form action='dctr.php' method="post">
  <input type="submit" class="lk" name="dr" value="DOCTORS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:150;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
<form action='user.php' method='post'>
    <input type="submit" class="lk" name="usr" value="USERS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:200;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
  </form>
  <form action='blood.php' method='post'>
      <input type="submit" class="lk" name="bb" value="BLOOD BANK SERVICE" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:250;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
    </form>
    <form action='ambulance.php' method='post'>
     <input type="submit" class="lk" name="amb" value=" AMBULANCE SERVICE" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:300;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
   </form>
   <form action='medlab.php' method='post' >
    <input type="submit" class="lk" name="med" value="MEDICAL LABS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:350;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
   <form action='chat.php' method='post' >
  <input type="submit" class="lk" name="uq" value="USER QUESTIONS " style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:400;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
</form>
        



























<?php



  ?><script>
 
 function autoRefresh()
{
	window.location = window.location.href#s;
}
 
 setInterval('autoRefresh()', 100); // this will reload page after every 5 secounds;
</script>
 <meta http-equiv=”refresh” content=”5" />

<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

 


</td></table>
<table  align="right"  height="560" style="width:100%;top:15;overflow-y: scroll; ">
<tr>
<td>

<table align="right" height=590 style="width:80%;  overflow:scroll;box-shadow: 4px 4px 4px 4px black;" scoll="scoll" bgcolor="white" overflow="scroll">

<tr>

<td>
<?php

$link = mysqli_connect("localhost", "root", "", "manju4");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');

if(isset($_POST['vms']))
{
	$usr=$_POST['usr'];
$sql="SELECT * FROM chat where user like '$usr' ";

 

     $retval = mysql_query( $sql, $conn );
	 $count = mysql_num_rows($retval);
if($count==0)
{
	$xx="make a new chat...";
	echo "<center>" .$xx."</center>";
}

  while($row = mysql_fetch_assoc($retval)) 
  { $_SESSION['usr']=$row['user'];

	  $u_type=$row['u_type'];
	    $message=$row['message'];
	    $time=$row['times'];
	    echo "<p>";
	 	    	  if($u_type=='admin')
	  {
echo " 
<table width=60% align='right'>
<tr  align=right bgcolor='  #58d68d   '  width=520 >
<td><big><b><font color='white'>
DOCTOR: </b>$message.<br></big>Time:$time.<br></table><br>";
	  }
echo "<br>";
	
	  if($u_type=='user')
	  {
echo "
<table width=60% >
<tr  align=left bgcolor='skyblue' ' width=520 >
<td><big><b><font color='white'>
Me: $message.<br></big>time:$time.</table>";
	  }
	
	
  }
}




 $usr=$_SESSION['usr'];
$sql="SELECT * FROM chat where user like '$usr' ";

 

     $retval = mysql_query( $sql, $conn );
	 $count = mysql_num_rows($retval);
if($count==0)
{
	$xx="make a new chat...";
	echo "<center>" .$xx."</center>";
}

  while($row = mysql_fetch_assoc($retval)) 
  { $_SESSION['usr']=$row['user'];

	  $u_type=$row['u_type'];
	    $message=$row['message'];
	    $time=$row['times'];
	    echo "<p>";
	 	    	  if($u_type=='admin')
	  {
echo " 
<table width=60% align='right'>
<tr  align=right bgcolor='  #58d68d   '  width=520 >
<td><big><b><font color='white'>
DOCTOR: </b>$message.<br></big>Time:$time.<br></table><br>";
	  }
echo "<br>";
	
	  if($u_type=='user')
	  {
echo "
<table width=60% >
<tr  align=left bgcolor='skyblue' ' width=520 >
<td><big><b><font color='white'>
Patient: $message.<br></big>time:$time.</table>";
	  }
	
	
  



}


  echo "<section id='s'>";
?>
<p>
<br>


<form action="" method="post">
<?php 
	$user=$_SESSION['usr'];
	echo  "  
<input type='hidden' name='user' value='$user'>
	<input type='text'  required name='msgs' style='border-radius: 2px;border-top: 1px solid grey; width:1050px;position: fixed; top:620;'  placeholder='Enter Your Answer Here...' >
	<input type='submit' name='sk' class='lk' value='send now' style='width:120px;font-family: kalinga; padding:3;color:white;position: fixed; top:620;right:10; '>

</form>
";?>

<?php 

	if(isset($_POST['sk']))
	{


 $usr=$_SESSION['usr'];
  $msgs=$_POST['msgs'];
 $user=$_POST['user'];
$sql="INSERT INTO chat (u_type,message,user) VALUES('admin', '$msgs','$user')";

if(mysqli_query($link, $sql)){

	echo "<script>window.location='chat2.php'</script>";
}
else
{
	echo "error";
}


}


?>