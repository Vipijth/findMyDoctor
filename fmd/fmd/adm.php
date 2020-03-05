<?php
session_start();
header('Cache-Control: max-age=900');
if(isset($_SESSION['xuser']))
{
 include('connect.php');
 $hsp= $_SESSION['xuser'];
 

$sql="SELECT * FROM person_info where email like '$hsp'";



     $retval = mysql_query( $sql, $connection );

   

  while($row = mysql_fetch_assoc($retval)) 

  {

    $name=$row['name'];

    $l_name=$row['l_name'];
$names=$name.".".$l_name;
  }

  ?><?php 

$link = mysqli_connect("localhost", "root", "", "manju4");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  
  mysql_select_db('manju4');

// Escape user inputs for security



$sql="SELECT * FROM hospital  ";

 

     $retval = mysql_query( $sql, $conn );
   
  while($row = mysql_fetch_assoc($retval)) 
  {
    $place=$row['place'];
    $contacts=$row['contacts'];
  }
}
if(!isset($_SESSION['xuser']))
{
  die('not loged in...<a href=index.php>.click here to log in ');
}
?><script>
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
<link rel="stylesheet" href="body_css/body.css">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<?php 





 include('connect.php'); 

$sql="SELECT * FROM person_info where email like '$hsp'";



     $retval = mysql_query( $sql, $connection );

   

  while($row = mysql_fetch_assoc($retval)) 

  {

    $name=$row['name'];

    $l_name=$row['l_name'];
$names=$name."".$l_name;
  }
  $sql="SELECT * FROM hospital where name like '$names'";



     $retval = mysql_query( $sql, $connection );

   

  while($row = mysql_fetch_assoc($retval)) 

  {

    $place=$row['place'];
    $con=$row['contacts'];

  }

  ?>


 

<html>
<head>
<title>FINDMYDOCTOR.com</title>

</head>
<body bgcolor=" #022 ">
<div class=all>
<nav>

<div class=margin>
<a href="#" class="txt" face="kalinga"><b><big><big>Find My Doctor</a></big></big>
<a href=adm.php class=nl>Admin Panel</a>

<a href=3.php class=nl onclick="return confirm('Do you want to logout?'); " style="right:0;position: fixed;border-left:1px solid grey;">LOG OUT</a>

</div>
</nav>






   <font color="white"  style="text-shadow:1px 1px 1px  #e5ec12;" size="3" face="kalinga"><big>




<table  align="center"   style="width:100%;top:0; ">
<tr>
<td>

  <table bgcolor="white" style="width:17%; height:100%;left:0;top:50;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
  <tr bgcolor="#137d7b" style="top:0; height: 1px;">
    <td >
      
      <font color="white" face="kalinga"><b><big><big><big><i class="fa fa-user" aria-hidden="true"></i></big></big>&nbsp;<?php echo $names; ?>
    </td>
    <tr bgcolor="#fff" style="top:0; height: 570px;">
      <td>
      <form action='hsptl.php' method="post">
        <input type="submit" class="lk" name="hs" value="HOSPITALS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:100;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
               <form action='dctr.php' method="post">
  <input type="submit" class="lk" name="dr" value="DOCTORS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:150;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
<form action='user.php' method='post'>
    <input type="submit" class="lk" name="usr" value="USERS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:200;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
  </form>
  <form action='blood.php' method='post'>
      <input type="submit" class="lk" name="bb" value="BLOOD BANK SERVICE" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:250;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
    </form>
    <form action='ambulance.php' method='post'>
     <input type="submit" class="lk" name="amb" value=" AMBULANCE SERVICE" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:300;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
   </form>
   <form action='medlab.php' method='post' >
    <input type="submit" class="lk" name="med" value="MEDICAL LABS" style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:350;border-right: 2px solid black; position:fixed; opacity: 0.9; "></form>
   <form action='chat.php' method='post' >
  <input type="submit" class="lk" name="uq" value="USER QUESTIONS " style="width:17%;color: white;font-weight: bold;font-family: kalinga; height:10%;left:0;top:400;border-right: 2px solid black; position:fixed; opacity: 0.9; ">
</form>
        
        
        
        
        </tr></td></table>

        <?php 

        if(isset($_POST['dl']))
{

  $n = mysqli_real_escape_string($link, $_REQUEST['id']);
  echo '$n';
$sqt="delete from hospital where  id ='$n' ";
if(mysqli_query($link, $sqt)){

header('location:hsptl.php');

}
else {
  header('location:hsptl.php');
}}

$sql="SELECT * FROM hospital";
echo "<br><br>";
echo "<table  align='right'   style='width:84%;top:0; ''>
<tr>
<td><font color='white' face='kalinga'><big><big>&nbsp;Hospitals <hr/ style='color:white;'>
<table   align=left' style='width:100%;'>
<tr>
<td>
<center>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Hospital Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Locality'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Contact Number'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value=' User Name'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='  Password'>


<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='View More'>
</tr>
</td>
</table>";
     $retval = mysql_query( $sql, $conn );

$count = mysql_num_rows($retval);
 while($row = mysql_fetch_assoc($retval)) 

  {
echo "<table   align='right' style='width:100%;'>
<tr>
<td><center><form action='' method='post'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['name']}'>

<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['place']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['contacts']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value=' {$row['username']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='  {$row['password']}'>
<input type='hidden' name='id' value='  {$row['id']}'>

<input type='submit' name='vm' class='lk' style='border-radius:0px;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='View More'>
</form></tr>
</td>
</table>";}
?>

<center><form action="" method="post"><br><br><br>
<input type="submit" name="ah" class="lk"  style="border-radius:4px;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;"" value="add hospitals"></form>
<?php ?>
<?php 
 if(isset($_POST['ah']))
 {
  echo "  <table bgcolor='White' align='right' width=84% height='500' style='postion:fixed'>
  <tr>
  <td><center>
  <form action='' method='post'><br><br>
  <input type='text' name='hnaame' required placeholder='enter the new hospital name' style='width:90%;border:1px solid #499;font-family:kalinga'>
<br><br>
 <input type='text' name='loc' required placeholder='enter the exact location of the hospital' style='width:90%;border:1px solid #499;font-family:kalinga'><br><br>
 <input type='number' name='contact' id='mob' onClick='check()' required placeholder='enter a contact number of the hospital
 ' style='width:90%;border:1px solid #499;font-family:kalinga'>

<br><br>
 <input type='email' name='username' required placeholder='enter a email id for the hospital' style='width:90%;border:1px solid #499;font-family:kalinga'>

<br><br>
 <input type='password' name='psd' required placeholder='enter the password for the hospital' style='width:90%;border:1px solid #499;font-family:kalinga'>
 <BR><br>
 <input type='submit' name='hsm' value=submit' style='width:130px; border-radius:5px;' class='lk'>
  <input type='reset' style='width:130px; border-radius:5px;' class='lk'></form>
 
"; 
 }
 if(isset($_POST['hsm']))
 {

  $hname = mysqli_real_escape_string($link, $_REQUEST['hnaame']);
    $loc = mysqli_real_escape_string($link, $_REQUEST['loc']);
      $con = mysqli_real_escape_string($link, $_REQUEST['contact']);
        $usr = mysqli_real_escape_string($link, $_REQUEST['username']);
          $psd = mysqli_real_escape_string($link, $_REQUEST['psd']);
          $sql="SELECT * FROM hospital  where username like '$usr'";

     $retval = mysql_query( $sql, $conn );

$count = mysql_num_rows($retval);
if($count>0)
{
  header('location:errorzz.php');
}
          $sqy="insert into person_info(user,name,email,psd)values('hospital','$hname','$usr','$psd')";
          if(mysqli_query($link, $sqy)){
             
}
          $sqc="insert into hospital(name,place,contacts,username,password)values('$hname','$loc','$con','$usr','$psd')";
          if(mysqli_query($link, $sqc)){
              header('location:hsptl.php');
}


 }
 if(isset($_POST['vm']))
 {

  $n = mysqli_real_escape_string($link, $_REQUEST['id']);
echo "<table bgcolor='White' align='right' width=84% height='400' style='postion:fixed'>
  <tr>
  <td><center><input action='action' class='lk' onclick='window.history.go(-1); return false;'  style='width:82%;top:50;left:233;position:fixed;' type='button' value='Go Back $n ' /><center>";
  $sql="SELECT * FROM hospital where id = '$n' ";
     $retval = mysql_query( $sql, $connection );
  while($row = mysql_fetch_assoc($retval)) 

  {

    $namez=$row['name'];
       $place=$row['place'];
          $contacts=$row['contacts'];
          $uk=$row['username'];

    echo "<table align='center'  width=94% height='300' style='postion:fixed'><tr><td><big><big>
    <font face='kalinga'><center><b><br>".$namez." Hospital<br></big></b>
    $place<br>$contacts<br>$uk <form action='' method='post'><br>
<input type='hidden' value='$uk' name='uk'>
<input type='hidden' value='$namez' name='namez'>
<input type='text' name='dname' style='width:400;' required placeholder='Enter the Doctor name'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' required name='spec'style='width:400;' placeholder='specialised in'>&nbsp;&nbsp;&nbsp;&nbsp;<br><br><input type='submit' name='drs' value='submit' class='lk' style='width:150;border-radius:5px;'></form>
<form action='' method='post'>
<input type='hidden' value='$n' name='id'>
<input type='submit' name='dl' value='delete hospital' class='lk' style='width:150;border-radius:5px;'></form>
    ";

 }
}
 if(isset($_POST['drs']))
 {
  $uk = mysqli_real_escape_string($link, $_REQUEST['uk']);
    $namez = mysqli_real_escape_string($link, $_REQUEST['namez']);
    $dname = mysqli_real_escape_string($link, $_REQUEST['dname']);
    $dsp = mysqli_real_escape_string($link, $_REQUEST['spec']);
$sqc="insert into doctors(name,spec,hospital,hid)values('$dname','$dsp','$namez','$uk')";
          if(mysqli_query($link, $sqc)){
            
 }
}

?>
