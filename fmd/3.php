<?php
session_start();
ob_start();
unset($_SESSION['cuser']); 
header("Location: index.php");
?>
