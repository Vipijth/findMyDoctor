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
<nav style=opacity:0.6;>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor<i class="fa fa-user-md" aria-hidden="true"></i>
</a></big></big>
<a href=# class=nl>HOME</a>
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




<br><br>


<table  align="center"  height="560" style="width:100%;top:15; ">
<tr>
<td>
<font face="kalinga" size="5" color="#fff"style="text-shadow:2px 2px 2px #0f5989;"><b><small>
 <?php echo "WELCOME,". $names." <FONT color=white style='text-shadow:2px 2px 2px #000;'></small> ";?>
<table align="center"  style="width:80%;">

<tr>

<td>

<table class="gal" align="left">
<tr>
<td>
<a href="so.php" style="target:_blank;color:white;width:120; font-family:kalinga;
font-weight:bold;font-size:17;text-decoration:none; background:black;text-align:center; padding:3px 78px;"><i class="fa fa-hospital-o" aria-hidden="true"></i>
HOSPITALS
<img src="img/e.jpg" class="imk"></a>

</table>

<table class="gal" align="right">
<tr>
<td>
<a href="d.php" style="color:white; font-family:kalinga;
font-weight:bold;font-size:17; text-decoration:none; background:black;text-align:center; padding:3px 78px;"><i class="fa fa-stethoscope" aria-hidden="true"></i>
DOCTORS

<img src="img/c.jpg" class="imk"></a>
</table>


<table class="gal" align="center">
<tr>
<td>
<a href="treat.php" style="color:white;  font-family:kalinga;
font-weight:bold;font-size:17;text-decoration:none; background:black;text-align:center; padding:3px 78px;">TREATEMENTS

<img src="img/b.jpg" class="imk"></a>
</table>

<br>

</table>

<table align="center"  style="width:80%;">

<tr>

<td>


<table class="gal" align="left">
<tr>
<td>
<a href="chat.php#s" style="color:white;  font-family:kalinga;
font-weight:bold;font-size:17;text-decoration:none; background:black;text-align:center; padding:3px 78px;">CHATROOM

<img src="img/f.jpg" class="imk"></a>
</table>


<table class="gal" align="RIGHT">
<tr>
<td>
<a href="mytokens.php" style="color:white;  font-family:kalinga;
font-weight:bold;font-size:17;text-decoration:none; background:black;text-align:center; padding:3px 78px;">MyToken

<img src="img/g.jpg" class="imk"></a>
</table>
<table class="gal" align="CENTER">
<tr>
<td>
<a href="blood.php" style="color:white;  font-family:kalinga;
font-weight:bold;font-size:17;text-decoration:none; background:black;text-align:center; padding:3px 78px;">BLOODBANK

<img src="img/g.jpg" class="imk"></a>
</table>

<br>
