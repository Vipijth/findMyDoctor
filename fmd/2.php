<?php 
$error="";
$su="";

 $dbhost = 'localhost';

   $dbuser = 'root';

   $dbpass = '';


   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
     mysql_select_db('manju4');
$link = mysqli_connect("localhost", "root", "", "manju4");


// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
if($_POST)
{

  $semail = mysqli_real_escape_string($link, $_REQUEST['email']);
 $name = mysqli_real_escape_string($link, $_REQUEST['name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']); 
$psd = mysqli_real_escape_string($link, $_REQUEST['psd']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$user = mysqli_real_escape_string($link, $_REQUEST['user']);
$pc= strlen($psd);
if($pc<4)
{
	$su="the password must have 4 letters";
}if($pc>=4)
{
$sql="SELECT * FROM person_info  where email like '$semail'";

     $retval = mysql_query( $sql, $conn );

$count = mysql_num_rows($retval);

if ($count>0)

{
	$error="email already exist..try with another email";
}
if($count==0)
{
$sql = "INSERT INTO person_info ( name,l_name, psd, email,user) VALUES ('$name', '$l_name','$psd', '$email','$user')";
if(mysqli_query($link, $sql)){

header('index.php');echo "<script>window.location='index.php'</script>";

exit();

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


}
}
}
}
?>





<script>
	function validateForm()
	{
alert(document.getElementById('psd').value);
		var pass=document.getElementById('psd').value;
		var cpass=document.getElementById('cpsd').value;
		
		
			if(pass!=cpass)
			{
				alert('Password not same');
				return false;
			}
			else
			{
				return true;
			}
		
	
</script>





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
	filter:blur(2px);
}
.bg img:nth-of-type(1){-moz-animation-delay:1s;}

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
	opacity:0.8;
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
	padding:4;
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

.t2{width:25%; height:470; border-right:1px solid grey;}


.t8{width:25%; height:240; border-right:1px solid grey;}

.t5{width:95%; height:250; background:grey; border-radius:100%; align:center;}

.btn1{color:black; background:white; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}
.btn1:hover{color:white; background:green; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}

.btn{color:black;text-decoration:none; }
.btn:hover{color:black;text-decoration:underline; }
.img3{height:100%; width:20%;-moz-transition:3s;}
.img3:hover{height:100%; width:50%;-moz-transition:2s;}
.img4{width:100%; height:100%; opacity:0.6;-moz-transition:3s;filter:blur(3px);}
.img4:hover{width:100%; height:100%; box-shadow:2px 2px 2px 2px black;opacity:1.2; filter:blur(0px);-moz-transition:3s;}
.sb{width:400;margin:0;border-radius:5px;-moz-transition:2s; font-family:kalinga;font-weight:bold;}
.sb:hover{width:450;margin:0;border-radius:8px;-moz-transition:2s;}
.sb:focus{border:1px solid skyblue; color:red;}




.tooltip {
    position: relative;
    display: inline-block;
    
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 150px;
    background-color: black;
    color: #fff;
    text-align: left;
    border-radius: 6px;
    padding: 5px 0;
    opacity:0.8;
   border-radius:4px;
    position: absolute;
    z-index: 1;
    top: 110%;
    left: 10%;
    margin-left: -80px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
</style>
<section id="3">

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">

</div>
<div class=all>
<nav style="opacity:.8;">

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=index.php class=nl>HOME</a><div class="tooltip">
<a href=#abt class=nl>ABOUT US</a><span class="tooltiptext">you must login</span></div><div class="tooltip">
<a href=# class=nl >HOSPITALS</a><span class="tooltiptext">you must login</span>
</div><div class="tooltip">
<a href="# " class=nl>DOCTORS</a><span class="tooltiptext">you must login</span>
</div>
<div class="tooltip">
<a href=#abt class=nl>CONTACT US</a><span class="tooltiptext">you must login</span></div>
<div class=search>
<input type=text placeholder=search field size="40" class="sb" ><div class="tooltip"></font>
<button style="margin:0 0 0 10;border-radius:2px; font-family:kalinga;">Search</button>  <span class="tooltiptext">you must login</span>
</div>

</div>
</div>
</nav>




<div class=wrap>

<div class="margin">

<table  align="center" bgcolor="#fff" height="360" style="width:50%;top:10;opacity:0.7; box-shadow:2px 2px 2px 2px black;border-radius:10px; ">
<tr>
<td><center><font color=" #112134 " size="5" face="kalinga"><b>FREE SIGN UP WITH FIND MY DOCTOR</font></big></b>
<hr/ width="250">
<form method="post" action="#" onsubmit="return validateForm();">
<input type="text" name="user"  value="patient" style="visibility:hidden;">
<input type="text" required name="name" style="box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga;width:480; border-radius:5px;" placeholder="enter your  name"><br><br>
<input type="text" required name="l_name" style="width:480;box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga; border-radius:5px;" placeholder="enter your last name"><br><br>
<input type="email" required name="email" style="width:480;box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga; border-radius:5px;" placeholder="enter your  email"><br><br>
<input type="password" id="psd" required name="psd" style="width:480;box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga; border-radius:5px;" placeholder="enter password"><br>
<br>

<input type="submit" name="submit" id="submit" value="submit" style="background:black;color:white; width:100; border-radius:10px;">
<input type="reset" style="background:black;color:white; width:100; border-radius:10px;">
</form>
<p><font face="kalinga"><b><?php echo $su; ?><?php echo $error; ?><p>
<a href="index.php" class="btn" ><b>already have an account? </a>
