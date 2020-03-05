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

	$sqlc="SELECT * FROM blood where email like '$cyser'";
$retvals = mysql_query( $sqlc, $connection ); 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=strtoupper($name." ".$l_name);

  }
  $count = mysql_num_rows($retvals);

if ($count==0)

{
	$bg="<a href='blood.php'>please upload your blood group";
}

    while($row = mysql_fetch_assoc($retvals)) 

  {

	  $bg=$row['bg'];

	

  }
  ?>
  <script type="text/javascript">
  	function al()
  	{
  		alert('once you cancel a token.. you never get back..');
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



 .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold; } 


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
.lk{
	color: white;
	background:#e22; 
}

.lk:hover{
	background:#00c87c; 
}
.lk:focus{
	background: #958bb5;
}
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

<table bgcolor="white" style="width:17%; height:100%;left:0;top:50;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
	<tr bgcolor="#137d7b" style="top:0; height: 1px;">
		<td >
			
			<font color="white" face="kalinga"><b><big><big><big><i class="fa fa-user" aria-hidden="true"></i></big></big>&nbsp;<?php echo "Mr.".$names; ?>
		</td>
		<tr bgcolor="#fff" style="top:0; height: 570px;">
			<td>
				<form action='' method="post">
				<input type="submit" class="lk" name="myac" value="My ACCOUNT" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:150;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
	<input type="submit" class="lk" name="mytc" value="My Tokens" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:250;border-right: 2px solid black; position:fixed; opacity: 0.9; ">

		<input type="submit" class="lk" name="ct" value="Canceled Tokens" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:350;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
			<input type="submit" class="lk" name="rt" value="Rejected Tokens" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:450;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
				
				
				</tr></td></table>


<?php 
echo "<table bgcolor='white' style='width:83%; height:100%;left:230;top:50;border-left: 2px solid grey; position:fixed; opacity: 0.8; ''>
	<tr  style='top:0; height: 1px;''>
		<td ><b>My Tokens<hr/><p><font face=kalinga color=white><b>
";
	 $sqlcc="SELECT * FROM tocken where ac like '$cyser' and status like 'available' and cancel like 'no'";
$retvalss = mysql_query( $sqlcc, $connection ); 
     $count = mysql_num_rows($retvalss);
 if($count<1)
 {
 	$r="there is no appointments ...<a href='treat.php'> click here to take a new appoinment</a>" ;
}
else
{
	$r="";
} 
echo $r;
echo "<table   align=left' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:105;text-align:center;' value='SPEC  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:67;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='Expected Time'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Cancel'>
</tr>
</td>
</table>";
 while($row = mysql_fetch_assoc($retvalss)) 
  { 

  		$e=date('h:i A', strtotime($row['expected_time']));

  		

 echo " 
 <table align=center' style='width:100%; '>
<tr>
<td>
<b><center>
<form action='cl.php' method=post>

<input type='text' name='a' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' name='b' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' name='c' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' name='d' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='hidden' name='q' value='{$row['pplace']}''>
<input type='hidden' name='z' value='{$row['hs']}''>
<input type='text' name='f' readonly style='border-radius:0px;background:white; color:black; width:105;text-align:center;' value='{$row['spec']}'>
<input type='text' name='g' readonly style='border-radius:0px;background:white; color:black; width:61;text-align:center;' value='{$row['tocken']}'>
<input type='text' name='h' readonly style='border-radius:0px;background:white; color:black; width:161;text-align:center;' value='{$row['date']}'>
<input type='hidden' name='i' readonly style='border-radius:0px;background:white; color:black; width:181;text-align:center;' value='{$row['time']}'>
<input type='text' name='ol' readonly style='border-radius:0px;background:white; color:black; width:181;text-align:center;' value='$e'>
<input type='submit'  class='lk' name='ss' onClick='al()' style='border-radius:0px;box-shadow:2px 2px 2px 2px black; color:white; width:72;text-align:center;' value='Cancel'>
</form>
";

} 


if(isset($_POST['myac']))
{
	echo"
<table bgcolor='white' style='width:83%; height:100%;left:230;top:50;border-left: 2px solid grey; position:fixed; opacity: 1.2; ''>
	<tr  style='top:0; height: 1px;''>
		<td ><b>My ACCOUNT<hr/><p>
<table align='center' width=1000><tr><td width=400>
		<font color='black' size='4' face='kalinga'><b><center>
		First Name:<hr/></td><td style='text-align:left;' ><font color='black' size='4' face='kalinga'><b>$name	<hr/></td></tr><br><tr><td>
	<font color='black' size='4' face='kalinga'><b><center>
		Last Name:<hr/></td><td style='text-align:left;' ><font color='black' size='4' face='kalinga'><b>$l_name	<hr/></td></tr><tr><td>
		<font color='black' size='4' face='kalinga'><b><center>
		Full Name:<hr/></td><td style='text-align:left;' ><font color='black' size='4' face='kalinga'><b>$names	<hr/></td></tr><tr><td>
		<font color='black' size='4' face='kalinga'><b><center>
		Email Id:<hr/></td><td style='text-align:left;' ><font color='black' size='4' face='kalinga'><b>$cyser	<hr/></td></tr><tr><td>
		<font color='black' size='4' face='kalinga'><b><center>
		Blood Group:<hr/></td><td style='text-align:left;' ><font color='black' size='4' face='kalinga'><b>$bg<hr/>
			</td></tr><tr><td>
</table>

	";
	}


	if(isset($_POST['mytc']))
{

		$sqlcc="SELECT * FROM tocken where ac like '$cyser' and status like 'available' and cancel like 'no'";
$retvalss = mysql_query( $sqlcc, $connection ); 
     $count = mysql_num_rows($retvalss);
 if($count<1)
 {
 	$r="there is no appointments ...<a href='treat.php'> click here to take a new appoinment</a>" ;
}
else
{
	$r="";
} 
	echo"
<table bgcolor='white' style='width:83%; height:100%;left:230;top:50;border-left: 2px solid grey; position:fixed; opacity: 1.2; ''>
	<tr  style='top:0; height: 1px;''>
		<td ><b>My Tokens<hr/><p>$r ";

  	
  		 		echo "<section id='c'>

<font face=kalinga color=white><b>
 <table   align=left' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:105;text-align:center;' value='SPEC  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:67;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:185;text-align:center;' value='ExpectedTime'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' onClick='al()' value='Cancel'>
</tr>
</td>
</table>
 <table align=center' style='width:100%; '>
<tr>
<td>";

	 
  while($row = mysql_fetch_assoc($retvalss)) 
  { 

  		$e=date('h:i A', strtotime($row['expected_time']));

 echo " 
<b><center>
<form action='cl.php' method=post>

<input type='text' name='a' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' name='b' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' name='c' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' name='d' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='hidden' name='q' value='{$row['pplace']}''>
<input type='hidden' name='z' value='{$row['hs']}''>
<input type='text' name='f' readonly style='border-radius:0px;background:white; color:black; width:105;text-align:center;' value='{$row['spec']}'>
<input type='text' name='g' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' name='h' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='hidden' name='i' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='{$row['time']}'>
<input type='text' name='ol' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='$e'>
<input type='submit'  class='lk' name='ss' onClick='al()' style='border-radius:0px;box-shadow:2px 2px 2px 2px black; color:white; width:72;text-align:center;' value='Cancel'>
</form>
";

}}



if(isset($_POST['ct']))
{

		$sqlcc="SELECT * FROM tocken where ac like '$cyser' and status like 'available' and cancel like 'yes'";
$retvalss = mysql_query( $sqlcc, $connection ); 
     $count = mysql_num_rows($retvalss);
 if($count<1)
 {
 	$r="there is no appointments ..." ;
}
else
{
	$r="";
} 
	echo"
<table bgcolor='white' style='width:83%; height:100%;left:230;top:50;border-left: 2px solid grey; position:fixed; opacity: 1.2; ''>
	<tr  style='top:0; height: 1px;''>
		<td ><b>Canceled Tokens<hr/><p>$r ";

  	
  		 		echo "<section id='c'>

<font face=kalinga color=white><b>
 <table   align=left' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:105;text-align:center;' value='SPEC  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:67;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:185;text-align:center;' value='Time'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Status'>
</tr>
</td>
</table>
 <table align=center' style='width:100%; '>
<tr>
<td>";

	 
  while($row = mysql_fetch_assoc($retvalss)) 
  { 

  		

 echo "
<b><center>


<input type='text' name='a' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' name='b' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' name='c' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' name='d' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='hidden' name='q' value='{$row['pplace']}''>
<input type='hidden' name='z' value='{$row['hs']}''>
<input type='text' name='f' readonly style='border-radius:0px;background:white; color:black; width:105;text-align:center;' value='{$row['spec']}'>
<input type='text' name='g' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' name='h' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='text' name='i' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='{$row['time']}'>
<input type='submit'  class='lk' name='ss' style='border-radius:0px;box-shadow:2px 2px 2px 2px black;font-size:14; color:white; width:79;text-align:center;' value='Canceled'>

";

}}







if(isset($_POST['rt']))
{

		$sqlcc="SELECT * FROM tocken where ac like '$cyser' and status like 'canceled' ";
$retvalss = mysql_query( $sqlcc, $connection ); 
     $count = mysql_num_rows($retvalss);
 if($count<1)
 {
 	$r="there is no appointments ..." ;
}
else
{
	$r="";
} 
	echo"
<table bgcolor='white' style='width:83%; height:100%;left:230;top:50;border-left: 2px solid grey; position:fixed; opacity: 1.2; ''>
	<tr  style='top:0; height: 1px;''>
		<td ><b>Canceled Tokens<hr/><p>$r ";

  	
  		 		echo "<section id='c'>

<font face=kalinga color=white><b>
 <table   align=left' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:155;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:105;text-align:center;' value='SPEC  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Time'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:105;text-align:center;' value='Reason'>
</tr>
</td>
</table>
 <table align=center' style='width:100%; '>
<tr>
<td>";

	 
  while($row = mysql_fetch_assoc($retvalss)) 
  { 

  		

 echo "
<b><center>


<input type='text' name='a' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' name='b' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' name='c' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' name='d' readonly style='border-radius:0px;background:white; color:black; width:155;text-align:center;' value='{$row['dname']}'>
<input type='hidden' name='q' value='{$row['pplace']}''>
<input type='hidden' name='z' value='{$row['hs']}''>
<input type='hidden' name='zx' value='{$row['reason']}''>
<input type='text' name='f' readonly style='border-radius:0px;background:white; color:black; width:105;text-align:center;' value='{$row['spec']}'>
<input type='text' name='g' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' name='h' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='text' name='i' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['time']}'>

<input type='text' name='i' readonly style='border-radius:0px;background:white; color:black; font-size:12;width:105;text-align:center;' value='{$row['reason']}'>
";

}


}


	//<input type='submit'  class='lk' name='rej' style='border-radius:0px;box-shadow:2px 2px 2px 2px black;font-size:14; color:white; width:79;text-align:center;' value='Rejected'>

?>