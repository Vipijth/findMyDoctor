<?php
session_start();
header('Cache-Control: max-age=900');
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

$hs = mysqli_real_escape_string($link, $_REQUEST['name']);
$hid = mysqli_real_escape_string($link, $_REQUEST['hid']);

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
.bg img:nth-of-type(1){-moz-animation-delay:8s;}

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
.zz{width:22%; color:white; background:#776198;}
.zz:hover{width:22%; color:white; background:#173;}
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

  ?>

 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">

</div>
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
</a>
</div>
</nav>





<div class=wrap>

<div class="margin">

<table  align="center"  height="260" style="width:100%;top:15; ">
<tr>
<td><center><font color="black" size="7" face="kalinga"><b><big><?php
echo "<font face='kalinga' color='#4aa0fb'>";
 echo $hs; ?></font></big></b>
<br>
<font color="00ec68" size="5" face="chilanka" ><details><?php echo $place. '<p><font color=#ff0202 size=4 >Contact No:'.$contacts; ?></font></big></b>
<br><br></details>
</table>
<br>
</div>
</table>


<table  align="center"  bgcolor="#fff" height="" style="width:90%;top:15; border-radius:10px;">
<tr>
<td>

<center>
<font color="black" size="5" face="kalinga" ><b><big><?php echo 'DOCTORS IN '.$hs;?></b>
<hr/ width="420" color="grey">

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





 echo " <table bgcolor='white' align=center' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:22%;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:22%;text-align:center;' value='SPECIALISED  IN'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:22%;text-align:center;' value='HOSPITAL'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:22%;text-align:center;' value='VIEW'>
</tr>
</td>
</table>
 <table align=center' style='width:99%; border:1px solid white;'>
<tr>
<td>";
$sqll="SELECT * FROM doctors  where hid like '$hid'";
     $retval = mysql_query( $sqll, $connn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  { 
 echo "
<b><center>
<form action='doctors.php' method=post>
<input type='hidden' name='hid' readonly style='border-radius:0px; width:22%;text-align:center;' value='
{$row['hid']}'>
<input type='text' name='dname' readonly style='border-radius:0px; width:22%;text-align:center;' value='
{$row['name']}'>
<input type='text' name='spec' readonly style='border-radius:0px; width:22%;text-align:center;' value='
{$row['spec']}'>
<input type='text' name='hos' readonly style='border-radius:0px; width:22%;text-align:center;' value='
{$row['hospital']}'>
<input type='submit' value='VIEW DETIALS' class='zz' >
</form>


";
  }
?>
