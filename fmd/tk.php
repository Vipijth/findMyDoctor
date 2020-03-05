<?php
session_start();
header('Cache-Control: max-age=900');
if(!isset($_SESSION['cuser']))
{
	die('not loged in...<a href=index.php>.click here to log in ');
}
else
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

$hs = mysqli_real_escape_string($link, $_REQUEST['dname']);
$spec = mysqli_real_escape_string($link, $_REQUEST['spec']);


$sql="SELECT * FROM hospital  where name='$hs'";

 

     $retval = mysql_query( $sql, $conn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  {
	  $place=$row['place'];
	  $contacts=$row['contacts'];
  }
?>
<style>


body{
	margin:0;
	font-family:urw gothic l,Century Gothic,Arial;
}
.bg{
	width:100%;
	height:100%;
	position:fixed;
}
.bg img{
	width:100%;
	height:100%;
	-moz-animation:fade 8s ease infinite;
	position:absolute;
	filter:blur(0px);
}
.bg img:nth-of-type(1){-moz-animation-delay:6s;}
.bg img:nth-of-type(2){-moz-animation-delay:4s;}
.bg img:nth-of-type(3){-moz-animation-delay:2s;}
.bg img:nth-of-type(4){-moz-animation-delay:0s;}
@-moz-keyframes fade{
0%{opacity:1;}
17%{opacity:1;}
25%{opacity:0;}
92%{opacity:0;}
100%{opacity:1;}
}
.all{
	position:relative;
}
nav{
	position:fixed;
   top:0;
	background:white;
	height:50;
	box-shadow:0 0 5px #ccc;
	width:100%;
	right:0;
    background: black;

  opacity:1.0;


}

.margin{
	width:100%;

top:10;
}
.nl{
	color:white;
	padding:15 23;
	float:left;	
	font-weight:bold;
border-right:1px solid grey;
}
.nl:hover{
	color:gray;
}

.txt{-webkit-animation:se 5s infinite;
animation:se 5s infinite;
color:black;
padding:10 23;
	float:left;	
	font-weight:bold;
border-right:1px solid grey;
}
@keyframes se{
0%{color:red;}
25%{color:yellow;}
50%{color:skyblue;}
100%{color:green;}
}

a,img,button{	
0	-moz-transition:all .4s;
	text-decoration:none;
}
.search{
	position:absolute;
	top:10;
	right:1%;
}
input,textarea{
	width:100%;
	padding:5;
	border:1px solid #ccc;
	box-shadow:0 0 2px #ccc;
	font:normal 15px urw gothic l,Century Gothic;
	
}
button{
	color:white;
	background:green;
	padding:5;
	border:none;

font:15px urw gothic l;
}
button:hover{
	background:gray;
	cursor:po;
}


.wrap{

	width:100%;
	height:50%;
	padding:120 0;
}






.t3{width:95%; height:250; background:grey; align:center;}

.t2{width:25%; height:270; border-right:1px solid grey;}


.t8{width:25%; height:240; border-right:1px solid grey;}

.t5{width:95%; height:250; background:grey; border-radius:100%; align:center;}

.btn1{color:black; background:white; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}
.btn1:hover{color:white; background:green; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}

.btn{color:black;text-decoration:none; }
.btn:hover{color:white;text-decoration:underline; }
.img3{height:100%; width:20%;-moz-transition:3s;}
.img3:hover{height:100%; width:50%;-moz-transition:2s;}
.img4{width:100%; height:100%; opacity:0.6;-moz-transition:3s;filter:blur(1px);}
.img4:hover{width:100%; height:100%; box-shadow:2px 2px 2px 2px black;opacity:1.2; filter:blur(0px);-moz-transition:3s;}
.sb{width:350;margin:0;border-radius:15px;-moz-transition:2s;}
.sb:hover{width:450;margin:0;border-radius:15px;-moz-transition:2s;}
.sb:focus{border:1px solid skyblue; color:red;}
.zz{width:200; -moz-transition:3s;color:white; background:#000; border-radius:15px;}
.zz:hover{width:240; -moz-transition:3s;color:white; background:#173;}
</style>
<?php 




session_start();
 include('connect.php');
 $cyser= $_SESSION['cuser'];
 

$sql="SELECT * FROM person_info where email like '$cyser'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name.".".$l_name;
  }


  $sqll="SELECT * FROM tocken where ac like '$cyser' and status like 'available' and cancel like 'no' ";
$retvals = mysql_query( $sqll, $connection );

	 
	 $count = mysql_num_rows($retvals);

	 if($count>11)
	 {
	 	header('location:error.php');
	 }

  ?>

 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a.jpg"><img src="img/b.jpg"><img src="img/c.jpg"><img src="img/d.jpg"><img src="img/c.jpg">

</div>
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

$hs = mysqli_real_escape_string($link, $_REQUEST['dname']);
$spec = mysqli_real_escape_string($link, $_REQUEST['spec']);
$hsp = mysqli_real_escape_string($link, $_REQUEST['dn']);
$specp = mysqli_real_escape_string($link, $_REQUEST['sp']);
$exptime = mysqli_real_escape_string($link, $_REQUEST['exptime']);
?>
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor<i class="fa fa-user-md" aria-hidden="true"></i>
</a></big></big>
<a href=home.php class=nl>HOME</a>
<a href=chat.php#s class=nl>CHAT ROOM</a>
<a href=so.php class=nl>HOSPITALS<i class="fa fa-hospital-o" aria-hidden="true"></i>
</a>
<a href="d.php " class=nl>DOCTORS<i class="fa fa-stethoscope" aria-hidden="true"></i>
</a>
<a href="mytokens.php " class=nl>MY TOKENS<i class="fa fa-bell-o" aria-hidden="true"></i>
</a>
<a href=3.php class="nl" onclick="return confirm('Do you want to logout?');">LOG OUT<i class="fa fa-lock" aria-hidden="true"></i>
</a></div>
</nav>





<div class=wrap>

<div class="margin">

<table  align="center" bgcolor="white" width="960" height="360" style="width100%;top:15;border-radius:10px; ">
<tr>
<td><center><font color="black" size="5" face="kalinga"><b><big>Dr.<?php echo $hsp; ?></font></big></b>
<br>
<font color="black" size="4" face="kalinga">SPECIALISED In &nbsp;&nbsp;<b><?php echo $specp; ?></font></big></b>
<br><center><b>
CONSULTING DATE:<font color="red"><?php echo $hs?><font color="black" size="4" face="kalinga">&nbsp;&nbsp;&nbsp;CONSULTING TIME:<font color="red"><?php echo $spec?><br>



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



$sqll="SELECT * FROM times  where  DATE like '$hs' and TIME like '$spec' and name like '$hsp' and spec like '$specp'";
     $retval = mysql_query( $sqll, $conn );
	
  while($row = mysql_fetch_assoc($retval)) 
  { 

$tk=$row['tocken'];
}

if($tk<1)
{
	echo "sorry ...there is no tokens available";
	$tk=0;

}
if($tk<10)
{
	echo "few tokens are available";

}


if($tk>1)
{

echo "
<form action='doctors2.php' method=post>
<input type='hidden'  name='date' readonly style='border-radius:0px;width:40;text-align:center;' value='$hs'>
<input type='hidden'  name='time' readonly style='border-radius:0px;width:40;text-align:center;' value='$spec'>
<input type='hidden'  name='exptime' readonly style='border-radius:0px;width:40;text-align:center;' value='$exptime'>
<input type='hidden'  name='name' readonly style='border-radius:0px;width:40;text-align:center;' value='$hsp'>
<input type='hidden'  name='spec' readonly style='border-radius:0px;width:40;text-align:center;' value='$specp'>
<input type='hidden'  name='token' readonly style='border-radius:0px;width:40;text-align:center;' value='$tk'>
";
}
?>

<table bgcolor="gold" align="center" width="150" height="150"  style="border-radius:100%; box-shadow:2px 2px 2px 2px black; ">
<tr>
<td>
<center>
<br>
<font color="red" face="kalinga" size="4">
<b>TOKEN NUMBER<br>
<font color="white" face="kalinga" size="6" style="text-shadow:2px 2px 2px black;"><big><?php echo "".$tk ;?>


</table><br>
<input type="submit" value="GET APPOINMENT" class="zz">
</form><center><br>
<?php


 ?>