<?php
session_start();
if(!isset($_SESSION['cuser']))
{
	die('not loged in...<a href=index.php>.click here to log in ');
}

include('connect.php');

$cyser= $_SESSION['cuser'];
	$link = mysqli_connect("localhost", "root", "", "manju4");


mysql_select_db('manju4');
if($link === false){
echo "as";
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$msgs = mysqli_real_escape_string($link, $_REQUEST['msg']);
	
	$user="user";
$sql="INSERT INTO chat (u_type,message,user) VALUES('$user', '$msgs','$cyser')";
if(mysqli_query($link, $sql)){
	echo "<script>window.location='chat.php#s'</script>";
}
else
{
	echo "error";
}
	?>
echo $count;
<button onclick="myFunction()" style="padding:2; font-family: kalinga; height:100px;border-radius:50px;position:fixed;top:100;"><b>Reload page</button>
</button>
<script>
function myFunction() {
    location.reload();
}</script>