<?php

$newentry = $_POST["microblog"];
if($newentry == ""){
header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
	
	
	
	if ($_POST["name"]==""){
	$username = "anonymous";
	}else{
	$username = $_POST["name"];
	}
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());


//count number of files in DIR posts/
$directory = "posts/";
$filecount = 0;
$files = glob($directory . "*");
if ($files){
 $filecount = count($files);
}
$nextfilenumber = $filecount + 1;
$my_file = "posts/".$nextfilenumber.'.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
$data = "<b>".htmlspecialchars($newentry)."</b><br>-".htmlspecialchars($username)." at ". $date;
fwrite($handle, $data);


header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>