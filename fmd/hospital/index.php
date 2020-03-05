<?php 
session_start();
include('connect.php');
if (isset($_POST['user']) and isset($_POST['cuser'])and isset($_POST['cpsd'])){
$user = $_POST['user'];
$hospital = $_POST['cuser'];
$password = $_POST['cpsd'];


$query = "SELECT * FROM person_info WHERE email='$hospital' and psd='$password' and user='$user'";
$result = mysql_query($query);

$count = mysql_num_rows($result);
if ($count)

{
$_SESSION['hospital'] = $hospital;
if($user=="patient")
{
echo "<script>window.location='home.php'</script>";
}
if($user=="hospital")
{
echo "<script>window.location='home.php'</script>";
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


<link rel="stylesheet" href="body_css/body.css">

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body bgcolor=" #abebc6 ">

<div class=all>
<nav style="opacity:0.7;">

<div class=margin>
<font face="kalinga">
<a href="#" class="txt" ><b><big><big>Find My Doctor</a></big></big>
<marquee>  welcome to findmydoctor.com.
you must need to log in your hospital to update your changes. </marquee>
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
<input type="text" readonly  style="border-radius:3px;text-align:center;font-family:kalinga;font-weight:bold; color:white;width:200;background:black; padding:3px 2px; box-shadow:2px 1px 2px 2px black;" name="user" value="hospital">
<br><br>
<input type="text" required name="cuser" style="box-shadow:2px 1px 2px 1px black;font-family:kalinga;font-weight:bold;width:280; border-radius:10px ;border:2px solid grey;" placeholder="enter a hospital's  email id" ><br><br>
<input type="password" required name="cpsd" style="width:280;box-shadow:2px 1px 2px 1px black;font-weight:bold;font-family:kalinga; border-radius:10px; border:2px solid grey;" placeholder="enter password"><br>
<br>
<input type="submit" value="LOG IN" style="background:#000; color:white; border:2px solid grey;width:100; border-radius:10px;">
<input type="reset"  style="background:#000; color:white; border:2px solid grey;width:100; border-radius:10px;">

</form>
<br>