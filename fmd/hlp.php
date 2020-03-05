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

top:0;
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


.btn{
color:white;
background:white;
text-decoration:none;
font-size:18px;
border-radius:1px;
padding:2px 2px;
-webkit-animation:tt 5s infinite;
animation:tt 5s infinite;
}
.btn:hover{
color:white;
background:green;
text-decoration:none;
font-size:18px;
padding:2px;

}
@keyframes tt{
0%{background-color:black;}
25%{background-color:yellow;}
50%{background-color:skyblue;}
100%{background-color:black;}
}



.t3{width:90%; height:150; background:grey; align:center;}

.t2{width:25%; height:150; border-right:1px solid grey;}


.t8{width:25%; height:240; border-right:1px solid grey;}

.t5{width:95%; height:250; background:grey; border-radius:100%; align:center;}

.btn1{color:black; background:white; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}
.btn1:hover{color:white; background:green; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}

.btn{color:black;text-decoration:none; }
.btn:hover{color:white;text-decoration:underline; }
.img3{height:100%; width:20%;-moz-transition:3s;}
.img3:hover{height:100%; width:50%;-moz-transition:2s;}
.img4{width:100%; height:100%; opacity:1;-moz-transition:3s;filter:blur(1px);}
.img4:hover{width:100%; height:100%; box-shadow:2px 2px 2px 2px black;opacity:1.2; filter:blur(0px);-moz-transition:3s;}
.sb{width:350;margin:0;border-radius:15px;-moz-transition:2s;}
.sb:hover{width:450;margin:0;border-radius:15px;-moz-transition:2s;}
.sb:focus{border:1px solid skyblue; color:red;}
.d{color:white; -webkit-animation:mu 10s infinite;}
.d:hover{ background:green;color:white;}
@keyframes mu{
	0%{opacity:0;}
20%{opacity:0.5;}
100%{opacity:0.7;}
}
.x{height:260; width:28; left:100;  font-weight:bold;border-radius:8px; font-size:20px;align:right;background:green; color:white; font-family:kalinga; border:2px solid white;}
.x:hover{height:260; width:228; left:100; align:right;background:green;font-size:16px; color:white; border:2px solid white;}
.b{left:1320;-moz-transition:2s;}
.b:hover{left:1125;-moz-transition:5s; opacity:0.9;}
.sub{padding:12px 12px; background:#r18; font-family:kalinga; font-weight:bold; font-size:15;color:gold;text-decoration:none; width:230; border:1px solid white;}
.sub:hover{ background:gold; color:#218;text-decoration:none;}
.sub1{padding:10px 11px; background:#748; font-family:kalinga; font-weight:bold; font-size:15;color:white;text-decoration:none; width:200; border:1px solid white;}
.sub1:hover{padding:10px 11px; background:#048; color:#fff;text-decoration:none;}
</style>

 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/3.jpg">

</div>
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=fmd.php class=nl>HOME</a>
<a href=fmd.php#abt class=nl>ABOUT US</a>
<a href=fmd.php#p class=nl>CONTACT US</a>
<a href="ht.php " class=nl >HEALTH TIPS</a>
<a href=hlp.php style="color:gold;" class=nl>HELP LINE </a>
<a href=ml.php class=nl>MEDICAL LABS </a>
<a href=fa.php class=nl>FIRST AID(CPR) </a>
<a href="index.php" class=nl style="color:gold;">LOGIN>></a>
</div>
</nav>
<br>

<embed src="img/1.mp3" style="width:0;">
<TABLE ALIGN="left" height=200 style="position:fixed; top:50;">
<tr>
<td>
<font color="white" size="6" face="kalinga" style="text-shadow:2px 2px 2px black;">
<big><big><big>
<b><strong><p>
Need Ambulance Service?
</big>
</big></strong>
<br><div id="loginScreen" background="img/2.jpg" style="opacity:0.9;">
<?php $link = mysqli_connect("localhost", "root", "", "manju4");

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
else
echo "<style>
 #loginScreen {opacity:0.4; background:white; height:71%; width:80%; top:182;left:2; margin:0 auto; position:fixed; z-index:10; display:none;  box-shadow:12px 12px 15px 15px black; border:1px solid green; border-radius:3px; } #loginScreen:target, #loginScreen:target + #cover{ display:block; opacity:2; } 
 .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold; } 
</style>";

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
echo "<font color=black face=kalinga size=4>AMBULANCE SERVICES IN"." ".$name."<hr/ width=380 align='left'>";

 $dbhost = 'localhost';

   $dbuser = 'root';

   $dbpass = '';

   

   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

  

  mysql_select_db('manju4');




$sql="SELECT * FROM ambulance  where place like '$name'";



 



     $retval = mysql_query( $sql, $conn );

	 $count = mysql_num_rows($retval);



if ($count==0)

{

	echo "<br><br><br><center>

	<br>";

	echo "<font color='red' face='kalinga' size=7 ><b><big>Sorry ... No Results to fetch! :(";

}

else


  while($row = mysql_fetch_assoc($retval)) 

  { 

 echo "

<p>
<center>
<table width=350 border='1' height=100 align='left' style='top:0;'>

<tr>

<td><center>

<center><big>
vehicle number:{$row['veh_num']}<br>
place:{$row['place']}<br>
<font color=red><b>contact:{$row['mob_no']}


</table>";

}
?>

 <a href="#" class="cancel">&times;</a> </div> <div id="cover" > </div> 

<FONT COLOR="black" face="kalinga" size="5" style="text-shadow:2px 2px 2px white;"><b><big>
SELECT YOUR  LOCATION</center>

<form action="#loginScreen" method="post">
<select  name="name" style="width:400; height:40;  border-radius:5px; box-shadow:2px 2px 2px 2px black;color;white; font-family:kalinga; background:black; color:white; font-weight:bold;">
<option >KASARGOD </option><hr/>
<option >KANHANGAD </option>
<option >CHERUVATHUR </option>
<option >NILESWAR </option>
<option >CHEEMENI </option>
<option >TRIKKARIPPUR </option>
</select>

<input type="submit" value="Go" class="btn" style="width:60; color:white; font-family:kalinga;font-weight:bold; text-shadow:2px px 2px black;font-size:20;">
</form>
<br></font>
<table width=885 bgcolor="black" style="opacity:0.7;border-radius:14px;left:40; position:fixed;" >
<tr><td><font color="white" size=5>
AMBULANCE SERVICE</b><small><hr/>
Our Team is gedit is a small and lightweight text editor for the GNOME Desktop.

gedit is a small and lightweight text editor for the GNOME DesktopOur Team is gedit is a small and lightweight text editor for the GNOME Desktop.

gedit is a small and lightweight text editor for the GNOME DesktopOur Team is gedit is a small and lightweight text editor for the GNOME Desktop.

gedit is a small and lightweight text editor for the GNOME DesktopOur Team is gedit is a small and lightweight text editor for the GNOME Desktop.

</table>

</div></div>
</table>
<table  align="center" style="width:100%; height:80%">
<tr>
<td>
<marquee direction="up" scrolldelay="150" height="350" > <table bgcolor="white" align="left" style="width:40%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">


<table bgcolor="white" align="right" style="width:18.3%; ; right:17; border:1px solid black;border-radius:20px;position:fixed; top:70;">
<tr>
<td>
<table align="center">
<tr>
<td><font size="3"><big>.&nbsp;</big></big></big>_____</font>
</table>

<table bgcolor="white" align="center" style="width:100%; height:35%">
<tr>
<td>
<table bgcolor="green" align="center" style="width:98%;opacity:1.2; height:10%">
<tr>
<td>
<font color="white" face="kalinga"><b>	←
<table align="center" style="width:30;right:216;  top:107;position:fixed;">
<tr>
<td>
<input type="submit" value="" style="white;height:25; width:100%;order:1px solid black; border-radius:100%;">
</table></big></b>&nbsp;&nbsp;&nbsp;&nbsp;
<font size="2">EMERGENCY SERVICES  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>  :
</table>
<table bgcolor="grey" align="center" style="width:98%; border:1px solid black;opacity:0.5; height:90%">
<tr>
<td>

<marquee direction="up" scrolldelay="150" height="350" >
<table bgcolor="white" align="left" style="width:40%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>POLICE</b><font size="1"> <small>&nbsp; 7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>100</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>




<table bgcolor="white" align="left" style="width:40%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>AMBULANCE</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>102</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>

<table bgcolor="white" align="left" style="width:40%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>FIRE</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>101</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br>


<table bgcolor="white" align="left" style="width:70%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>DISASTER MANAGEMENT</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>108</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>


<table bgcolor="white" align="left" style="width:60%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>WOMEN HELPLINE</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>181</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>


<table bgcolor="white" align="left" style="width:50%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>AIR AMBULANCE</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>+919540161344</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>


<table bgcolor="white" align="left" style="width:50%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td></font>
<font color="black" style="kalinga"  size="2"><b>ALERT CONTROL</b><font size="1"> <small>&nbsp;7:20am<font color="blue">✓✓

</table><br><br>
<table bgcolor="#haneesh" align="right" style="width:35%; border-radius:6px; left:0;border:1px solid black;opacity:1.2; height:10%">
<tr>
<td>
<font color="black" style="kalinga"  size="2"><b>1090</b><font size="1"> <small>&nbsp;7:21am<font color="blue">✓✓
</table>
<br><br>



</table>
</table>
<table align="center" style="width:15.5%;">
<tr>
<td><form>
<input type="submit" value="" style="white; width:100%;border:1px solid black; border-radius:100%;">
</table>
<TABLE ALIGN="right" style="position:fixed; top:557;">
<tr>
<td><font color="white" face="kalinga" size="2"><b>JOIN WITH OUR whatsapp GROUP...
<br>
<img src="img/wh.png" width=20 height=20>
+91-9292 929 000<br>
<img src="img/wh.png" width=20 height=20>
+91-9191 919 000<br>
</table>
</table></marquee>
