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

$hs = mysqli_real_escape_string($link, $_REQUEST['name']);


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
.zz{width:280; color:white; background:#776198;}
.zz:hover{width:280; color:white; background:#173;}
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

  ?><?php 



 include('connect.php');
 $cyser= $_SESSION['cuser'];
 

$sql="SELECT * FROM person_info where email like '$cyser'";



     $retval = mysql_query( $sql, $connection );

	 

  while($row = mysql_fetch_assoc($retval)) 

  {

	  $name=$row['name'];

	  $l_name=$row['l_name'];
$names=$name."".$l_name;
  }

  ?>


 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body>
<div class=bg>
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">
<img src="img/a-young-woman-wearing-white-relaxes-in-yoga-position-at-sunrise-health-hd-wallpaper-1920x1080.jpg">
</div>
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=# class=nl>HOME</a>

<a href=#ap class=nl>APPOINMENTS</a>
<a href="nnm.php " class=nl>UPDATE</a>
<a href=3.php class=nl onclick="return confirm('Do you want to logout?'); " >LOG OUT</a>
<div class=search>
<input type=text placeholder=search field size="40" class="sb" >
<button style="margin:0 0 0 10;border-radius:10px;">Search</button>
</div>
</div>
</nav>





<div class=wrap>

<div class="margin">

<table  align="center"  height="260" style="width:100%;top:15; ">
<tr>
<td><center><font color="red"  style="text-shadow:6px 6px 6px black;" size="7" face="kalinga"><b>
<br>
<b>APPOINMENTS in <?php echo $names ;?>

</table>
<br>
</div>
</table>


<table  align="center"  bgcolor="#fff" height="" style="width:100%;top:15; border-radius:10px;">
<tr>
<td>

<center>
<font color="black" size="5" face="kalinga" ><b><big><?php echo 'APPOINMENTS'?></b>
<hr/ width="420" color="grey"><section id="ap">
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
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Patient Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Place'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:65;text-align:center;' value='Age'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:75;text-align:center;' value='Gender'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='DOCTOR Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='SPECIALISED  IN'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:45;text-align:center;' value='Tocken No'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:175;text-align:center;' value='DATE'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:185;text-align:center;' value='Time'>
</tr>
</td>
</table>
 <table align=center' style='width:96%; border:1px solid white;'>
<tr>
<td>";
$sqll="SELECT * FROM tocken where hs like '$name' ";
     $retval = mysql_query( $sqll, $connn );
	 
  while($row = mysql_fetch_assoc($retval)) 
  { 
 echo "
<b><center>
<form action='doctors.php' method=post>

<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['pplace']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['age']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:75;text-align:center;' value='{$row['sex']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['dname']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['spec']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:65;text-align:center;' value='{$row['tocken']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:165;text-align:center;' value='{$row['date']}'>
<input type='text' readonly style='border-radius:0px;background:white; color:black; width:185;text-align:center;' value='{$row['ac']}'>
</form>


";
  }
?>
