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


 .cancel { display:block; position:absolute; top:3px; right:2px; background:rgb(245,245,245); color:black; height:30px; width:35px; font-size:30px; text-decoration:none; text-align:center; font-weight:bold; } 

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
<head>
<script>
function check()
{
	
	var x=document.getElementById("mob").value;
	var l=x.length;
	if(l!=10)
	{
		alert('enter a valid mobile number');
		
	}
	
}
</script>

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
<?php 
$error="";
$su="";
$succeed="please add your details";

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
if(isset($_POST['xuv']))
{
	$cv = mysqli_real_escape_string($link, $_REQUEST['cv']);
 $vc = mysqli_real_escape_string($link, $_REQUEST['vc']);
 
echo " <table bgcolor='#000' width=98% height=650 style='position:fixed;top:10;left:10;box-shadow:3px 3px 3px 3px black;opacity:0.9;'>
 <tr>
 <td>
 <a href='blood.php'  class='cancel'>&times;</a> </div> 
 <font color='#fff' face='kalinga' ><b><big>$cv BLOOD DONATERS IN $vc 
 <hr/>";
$sqll="SELECT * FROM blood where place like '%$vc%' and bg like '$cv' ";
$retvals = mysql_query( $sqll, $connection );

	 
	 $count = mysql_num_rows($retvals);



if ($count==0)

{

	echo "<br><br><br><center>

	<br>";

	echo "<font color='red' face='kalinga' size=7 ><b><big>Sorry ... No Results to fetch! :(";

}
else
{
echo "

<table width='90%' align='center' bgcolor='white' style='border:1px solid grey;'>
<tr>
<td style='border:1px solid grey;padding:1px 10px;'><center>NAME
</td>
<td style='border:1px solid grey;'><center>BLOOD GROUP
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>AGE
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>PLACE
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>GENDER
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>EMAIL
</td>
<td style='border:1px solid grey;'><center>CONTACT NUMBER
</td></tr><tr>
";

  while($row = mysql_fetch_assoc($retvals)) 

  {

	  $name=$row['name'];
 $gen=$row['sex'];

	   $bg=$row['bg'];
	    $place=$row['place'];
	     $email=$row['email'];
	      $age=$row['age'];
	       $mob=$row['mobile'];

echo " 

<td style='border:1px solid grey;padding:1px 10px;'><center>$name
</td>

<td style='border:1px solid grey;padding:1px 10px;'><center>$bg
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>$age
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>$place
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>$gen
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>$email
</td>
<td style='border:1px solid grey;padding:1px 10px;'><center>+91-$mob
</td>
";
}
  }


echo "</table>
 </table>";
	}
if(isset($_POST['xxc']))
{
  $sex = mysqli_real_escape_string($link, $_REQUEST['sex']);
 $name = mysqli_real_escape_string($link, $_REQUEST['pname']);
$place = mysqli_real_escape_string($link, $_REQUEST['pplace']); 
$age = mysqli_real_escape_string($link, $_REQUEST['page']);
$bg = mysqli_real_escape_string($link, $_REQUEST['bg']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mob']);
$pc= strlen($mobile);
if($pc!=10)
{
	$su="enter valid mobile num";
}if($pc==10)
{
$sql="SELECT * FROM blood  where email like '$cyser'";

     $retval = mysql_query( $sql, $conn );

$count = mysql_num_rows($retval);

if ($count>0)

{
	$error="email already exist..try with another email";
}
if($count==0)
{
$sql = "INSERT INTO blood ( name,bg, place,age, sex,email,mobile) VALUES ('$name','$bg', '$place','$age','$sex', '$cyser','$mobile')";

if(mysqli_query($link, $sql)){
	$succeed="successfully added..";

$succeed="successfully added";
$error="successfully added...";


} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);


}
}
}
}
?>



<div class=wrap>

<div class="margin">
<table  align="center" height="360" style="width:96%; ">
<tr>
<td>
<table align="right" style="border:1px solid grey;">
<tr>
<td>

<img src="img/2.gif" height="150" width=150>
<font face="kalinga" color="#424" size="4" style="text-shadow: 2px 2px 2px white;">
<b><p><big>Need Bloodbank Service?
<br></big>
<form action="" method="post">
select blood group
 <select name="cv" style="background: #246;color: white;padding:3px 8px;">
<option value="A+ve">A+ve</Aoption>
<option value="B+ve">B+ve</option>
<option value="O+ve">O+ve</option>
<option value="AB+ve">AB+ve</option>
<option value="A-ve">A-ve</Aoption>
<option value="B-ve">B-ve</option>
<option value="O-ve">O-ve</option>
<option value="AB-ve">AB-ve</option>

</select><br><br>
<input type="text" required name="vc" placeholder="enter the location..." style="width:240; padding:3px 2px; background:#286; color:white">
<br>
<br><center>
<input type="submit" value="submit" name="xuv" style="background:#826;height:30px;border-radius:4px;width:100px;color:white;font-family:kalinga; ">
</form>
</table>
	<table  align="left" bgcolor="#fff" height="370" style="width:30%;top:10;opacity:1.2; box-shadow:5px 6px 5px 6px black;border-radius:0px; ">
<tr>
<td>
<img src="img/bloodtypes.jpg" height="360" style="width:100%;" ></table>
<table  align="center" height="360"  style="width:40%;">
<tr>
<td><?php echo $succeed ?><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
<form method="post" action="#" onsubmit="return validateForm();">
Enter Your Name:</td>
<td>
<input type="text" required name="pname" placeholder=" name" style="width:250; "></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Enter  Your Place:</td><td>
<input type="text" required name="pplace" placeholder=" place" style="width:250; "></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Enter Your Age:</td><td>
<input type="number" required name="page" min="1" max="112" style="width:90;min:1;max:170; "><br><br></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Sex:</td><td> <select name="sex">
<option value="male">Male</option>
<option value="female">Female</option>
</select></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Blood Group:</td><td> <select name="bg" style="background: #246;color: white;padding:3px 8px;">
<option value="A+ve">A+ve</Aoption>
<option value="B+ve">B+ve</option>
<option value="O+ve">O+ve</option>
<option value="AB+ve">AB+ve</option>
<option value="A-ve">A-ve</Aoption>
<option value="B-ve">B-ve</option>
<option value="O-ve">O-ve</option>
<option value="AB-ve">AB-ve</option>

</select></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Email:</td><td><br><?php echo"
<input type='text' name='emailz' readonly  placeholder=' email' style='width:250; ' value='$cyser'><br><br>
";?></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">
Mobile:</td><td>
<input type="number" required name="mob" id="mob" placeholder=" enter your mobile number" maxlength="10" style="width:250;maxlenth:1; "><br><br></td></tr><tr><td><font face="kalinga" color="green" size="4" style="text-shadow: 2px 2px 2px white;">

</tr><tr>
<td ><input type="reset" style="background:orange;color:white; font-family:kalinga;"> </td><td>
<input type="submit" value="upload details" name="xxc" onClick="check()" style="background:#526;color:white;font-family:kalinga; " > </td>
</TR>
<tr>
<td> <?php echo $error.$su ?>