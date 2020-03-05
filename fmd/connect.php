<?php
$connection = mysql_connect('localhost', 'root', '');

$select_db = mysql_select_db('manju4');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
