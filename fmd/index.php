<?php 
session_start();
if(isset($_SESSION['cuser']))
{
	header('location:home.php');
}

include('connect.php');
if (isset($_POST['user']) and isset($_POST['cuser'])and isset($_POST['cpsd'])){
$user = $_POST['user'];
$cuser = $_POST['cuser'];
$password = $_POST['cpsd'];

$query = "SELECT * FROM person_info WHERE email='$cuser' and psd='$password' and user='$user'";
$result = mysql_query($query);

$count = mysql_num_rows($result);
if ($count)

{
$_SESSION['cuser'] = $cuser;
if($user=="patient")
{
echo "<script>window.location='home.php'</script>";
}
if($user=="hospital")
{
echo "<script>window.location='hss.php'</script>";
}
if($user=="admin")
{
echo "<script>window.location='adm.php'</script>";
}
}
else{
echo "<script>window.location='index.html'</script>";
}
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


<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">

</div>
<div class=all>
<nav style="opacity:0.7;">

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=fmd.php class=nl>HOME</a><div class="tooltip">
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
<br><br><br>
<table  align="center" bgcolor="#fff" height="360" style="width:23%;top:20;opacity:0.8; box-shadow:2px 2px 2px 2px black;border-radius:10px; ">
<tr>
<td><center><font color="#000" size="5" face="kalinga"><b><big> LOG IN</font></big></b>
<hr/ width="250" ><br><form method="post" action="">
<input type="text" readonly  style="border-radius:3px;text-align:center;font-family:kalinga;font-weight:bold; color:white;width:200;background:black; padding:3px 2px; box-shadow:2px 1px 2px 2px black;" name="user" value="patient">
<br><br>
<input type="email" required name="cuser" style="box-shadow:2px 1px 2px 1px black;font-family:kalinga;font-weight:bold;width:280; border-radius:10px ;border:2px solid grey;" placeholder="enter a user email" ><br><br>
<input type="password" required name="cpsd" style="width:280;box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga; border-radius:10px; border:2px solid grey;" placeholder="enter password"><br>
<br>
<input type="submit" value="LOG IN" style="background:#000; color:white; border:2px solid grey;width:100; border-radius:10px;">
<input type="reset"  style="background:#000; color:white; border:2px solid grey;width:100; border-radius:10px;">

</form>
<br>
<a href="2.php" class="btn" ><b>Create a new account? </a>
