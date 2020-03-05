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
          if(isset($_POST['aa']))
          { 
 $v = mysqli_real_escape_string($link, $_REQUEST['lb']);
    $l = mysqli_real_escape_string($link, $_REQUEST['loc']);
      $c = mysqli_real_escape_string($link, $_REQUEST['contact']);
       $ne = mysqli_real_escape_string($link, $_REQUEST['ne']);
                $sqy="insert into medlab(name,place,number,near)values('$l','$v','$c','$ne')";
          if(mysqli_query($link, $sqy)){
            header('location:medlab.php');
            
             
}
   
}

        if(isset($_POST['dl']))
{
echo "<table   bgcolor='white' align='right' style='width:100%;'>
<tr>
<td>";
  $n = mysqli_real_escape_string($link, $_REQUEST['id']);
  echo '$n';
$sqt="delete from medlab where  id like '$n' ";
if(mysqli_query($link, $sqt)){

header('location:medlab.php');

}
else {
  header('location:medlab.php');
}}
        
$sql="SELECT * FROM medlab";
echo "<br><br>";
echo "<table  align='right'   style='width:84%;top:0; ''>
<tr>
<td><font color='white' face='kalinga'><big><big>&nbsp;Medical Labs <hr/ style='color:white;'>
<table   align=left' style='width:100%;'>
<tr>
<td>
<center><form action='' method='post'>
          <input type='text' name='lb' required placeholder='Enter Lab Name' style='width:250;border:1px solid #499;font-family:kalinga'>
 <input type='text' name='loc' required placeholder='enter the locality' style='width:250;border:1px solid #499;font-family:kalinga'>
 <input type='number' name='contact' id='mob' onClick='check()' required placeholder='enter a contact number 
 ' style='width:250;border:1px solid #499;font-family:kalinga'>
  <input type='text' name='ne' required placeholder='enter the nearest place' style='width:250;border:1px solid #499;font-family:kalinga'><br><br>
 <input type='submit' value='add Medical LAb' name='aa' class='lk' style='width:200'></form><hr/>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Lab Name'>

<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Located In'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Contact Number'>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='near to '>
<input type='text' readonly style='border-radius:0px;background:green;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value=' '>



</tr>
</td>
</table>";
     $retval = mysql_query( $sql, $conn );

$count = mysql_num_rows($retval);
if($count<1)
{
  echo "<center>there is no informations available";
}
 while($row = mysql_fetch_assoc($retval)) 

  {
  
     
echo "<table   align='right' style='width:100%;'>
<tr>
<td><center><form action='' method='post'>
<input type='hidden' name='id' value='{$row['id']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['name']}'>

<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['place']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['number']}'>
<input type='text' readonly style='border-radius:0px;background:#526;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='{$row['near']}'>


<input type='submit' name='dl' class='lk' style='border-radius:0px;box-shadow:2px 2px 2px 2px black; color:white; width:165;text-align:center;' value='Delete'>
</form>
</tr>
</td>
</table>";}



?>
