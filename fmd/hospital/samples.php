<?php
//php mail




/*$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
*/



/*/$date = '02:00 '; 
$date1 = '0:20 '; 
$t=date('h:i A', strtotime($date));
$t1=date('h:i A', strtotime($date1));
$t2=date('h:i A', strtotime($date))+date('h:i A', strtotime($date1));;
echo date('h:i A', strtotime($t2));
*/
$tk=4;


$minutes=20*$tk;

echo $hours = floor($minutes / 60).':'.($minutes -   floor($minutes / 60) * 60);
echo "         ";

$time = "06:30";
$time2 = $hours;

$secs = strtotime($time2)-strtotime("00:00");
echo $result = date("H:i",strtotime($time)+$secs);
?> 