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


.btn{
color:white;
background:white;
text-decoration:none;
font-size:18px;
border-radius:10px;
padding:8px 10px;
-webkit-animation:tt 5s infinite;
animation:tt 5s infinite;
}
.btn:hover{
color:white;
background:green;
text-decoration:none;
font-size:18px;
padding:10px;

}
@keyframes tt{
0%{background-color:red;}
25%{background-color:yellow;}
50%{background-color:skyblue;}
100%{background-color:green;}
}



.t3{width:95%; height:200; background:grey; align:center;}

.t2{width:25%; height:200; border-right:1px solid grey;}


.t8{width:25%; height:240; border-right:1px solid grey;}

.t5{width:95%; height:250; background:grey; border-radius:100%; align:center;}

.btn1{color:black; background:white; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}
.btn1:hover{color:white; background:green; border-radius:6%;text-decoration:none; font-size:18px; padding:5px; text-shadow:5px 5px 5px black;}

.btn{color:white;text-shadow:3px 3px 3px red;text-decoration:none; font-family:kalinga;font-size:20;}
.btn:hover{color:white;text-decoration:underline; }
.img3{height:100%; width:20%;-moz-transition:3s;}
.img3:hover{height:100%; width:50%;-moz-transition:2s;}
.img4{width:100%; height:100%; opacity:0.6;-moz-transition:3s;filter:blur(1px);}
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

</style>

 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a.jpg"><img src="img/d.jpg"><img src="img/a.jpg"><img src="img/d.jpg">

</div>
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=fmd.php class=nl >HOME</a>
<a href=fmd.php#abt class=nl>ABOUT US</a>
<a href=fmd.php#p class=nl>CONTACT US</a>
<a href="ht.php " class=nl >HEALTH TIPS</a>
<a href=hlp.php class=nl>HELP LINE </a>
<a href=ml.php class=nl style="color:gold;">MEDICAL LABS </a>
<a href=fa.php class=nl>FIRST AID(CPR) </a>
<a href="index.php" class=nl style="color:gold;">LOGIN>></a>
</div>
</nav>





<div class=wrap>

<div class="margin">



<font color="white" face="kalinga" size="4">
<br><br><br><br><br><center><br>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="white" face="kalinga" size="6" style="text-shadow:5px 5px 5px black;"><b><big>Find Medical Labs in your locality
<br><form action="ser.php" method="post">
<input type="text" name="srch" style="width:550;height:50; border-radius:15px; font-family:kalinga;color:red;font-size:20; font-weight:bold;" placeholder="Enter your locality..."  required>
<input type="submit" value="Go" style="width:130;" class="btn" style="font-family:kalinga;color:red;font-size:20;">
 
</a>
</table>

</table>
<br>
</div>
