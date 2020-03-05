
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "manju4");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$l_name = mysqli_real_escape_string($link, $_REQUEST['l_name']); 
$psd = mysqli_real_escape_string($link, $_REQUEST['psd']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$user = mysqli_real_escape_string($link, $_REQUEST['user']);

$sql = "INSERT INTO person_info ( name,l_name, psd, email,user) VALUES ('$name', '$l_name','$psd', '$email','$user')";

$sq = "INSERT INTO temp (semail) VALUES ('$email')";
if(mysqli_query($link, $sq)){
}
if(mysqli_query($link, $sql)){
                     
header('index.php');echo "<script>window.location='index.php'</script>";



exit();
			 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	

	
	
	}

 
// close connection
mysqli_close($link);
?>

