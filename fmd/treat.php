<?php 
session_start();
header('Cache-Control: max-age=900');
if(!isset($_SESSION['cuser']))
{
	die('not loged in...<a href=index.php>.click here to log in ');
}

include('connect.php');
$cyser= $_SESSION['cuser'];
$sql="SELECT * FROM person_info where email like '$cyser'";
$retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=strtoupper($name." ".$l_name);

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
	-moz-animation:fade 1s ease infinite;
	position:absolute;
	filter:blur(1px);
}
.bg img:nth-of-type(1){-moz-animation-delay:6s;}


@-moz-keyframes fade{
0%{opacity:1;}


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
.sq{background: black;}
.sq:hover{background: black;}
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




.gal{

	

	background:black;

	height:200;

	box-shadow:5px 6px 6px 5px black;

	width:300;

	border:3px solid white;

  BORDER-radius:3px;

-moz-transition:8s;

overflow:hidden; z-index:600; 

    animation: gal 3s infinite ;



}

.gal:hover{

	

	background:black;

	height:230;

	box-shadow:0 0 5px #ccc;

	width:320;

	border:4px solid white;

  

-moz-transition:8s;

overflow:hidden; z-index:600; 

    animation: gal 3s infinite ;



}

@keyframes gal {

    0%   {-moz-transform:rotate(-1deg); -moz-transition:8s; }

	   50%   {-moz-transform:rotate(1deg);-moz-transition:6s;  }

    100%   {-moz-transform:rotate(-1deg);-moz-transition:8s;}	 

}





.imk{width:100%; height:100%;-moz-transition:10s;-moz-transform:scale(1.4);  opacity:0.5;}

.imk:hover{height:110%; width:110%; -moz-transition:3s; opacity:1.1; -moz-transform:scale(1);}

.t3{width:95%; height:200; background:grey; align:center;}

.t2{width:25%; height:200; border-right:1px solid grey;}


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
.sb{width:400;margin:0;border-radius:5px;-moz-transition:2s; font-family:kalinga;font-weight:bold;}
.sb:hover{width:450;margin:0;border-radius:8px;-moz-transition:2s;}
.sb:focus{border:1px solid skyblue; color:red;}

</style>

<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">

 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
	
<div class=bg>
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">

</div>
<div class=all>
<nav style=opacity:1;>

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
</a>
</div>
</nav>
<?php

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


$hs = mysqli_real_escape_string($link, $_REQUEST['des']);

?>
<table  align="center"  height="560" style="width:100%;top:15; ">
<tr>
<td><br>
	<font face="kalinga" size="5" color="#fff"style="text-shadow:2px 2px 2px #0f5989;"><b><small>
 <?php echo "WELCOME,". $names." <FONT color=white style='text-shadow:2px 2px 2px #000;'></small> ";?>
<center><br><br>
			<?php  
$sqtc="SELECT distinct(spec) FROM doctors ";

          $retva = mysql_query( $sqtc, $conn );
echo "<form action='' method='post'><center></b></big>
<select style='width:40%;  color:white;font-size: 18px; font-family: kalinga;font-weight: bold; padding:10px;box-shadow: 5px 5px 4px 2px black; background:  #57beb8
; border-radius: 5px;'  name='des'>";

 while($row = mysql_fetch_assoc($retva)) 
  {
    $date=$row['spec'];

  echo "<option value=$date>$date</option>";
  }

  
  echo "&nbsp;&nbsp;&nbsp;<input type='submit' value='Find Your Doctor' class='sq' name='sub' style='border:2px solid white;border-radius:6px;color:white;font-size: 15px; font-family: kalinga;font-weight: bold;background: #fecd08 ;padding: 13px 6px; width:150px;'></select> </form>
";
?>


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


 if(isset($_POST['sub']))
{


 echo "<br><br>
<table  align='center'  bgcolor='#fff' height='' style='width:90%;top:15; border-radius:10px;' >
<tr>
<td>

<center>
<font color=black size='4' face='kalinga' ><b><big> DOCTORS FOR $hs </b>
<hr/ width='420' color='grey'>

  <table bgcolor='white' align=center' style='width:94.8%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:280;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:280;text-align:center;' value='SPECIALISED  IN'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:280;text-align:center;' value='HOSPITAL'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:280;text-align:center;' value='VIEW'>
</tr>
</td>
</table>
 <table align=center' style='width:96%; border:1px solid white;'>
<tr>
<td>";
$sqll="SELECT * FROM doctors where spec='$hs' ";
     $retval = mysql_query( $sqll, $connn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  { 
 echo "
<b><center>
<form action='doctors.php' method=post>

<input type='text' name='dname' readonly style='border-radius:0px; width:280;text-align:center;' value='
{$row['name']}'>
<input type='text' name='spec' readonly style='border-radius:0px; width:280;text-align:center;' value='
{$row['spec']}'>
<input type='text' name='hos' readonly style='border-radius:0px; width:280;text-align:center;' value='
{$row['hospital']}'>
<input type='submit' value='VIEW DETIALS' class='zz' style='width:280px' >
</form>


";
}  }
?>
