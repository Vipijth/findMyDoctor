<?php
session_start();
ob_start();
unset($_SESSION['hospital']); 
header("Location: index.php");

?>
