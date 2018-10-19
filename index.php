<!DOCTYPE html>
	<html>
		<head>
		<link rel=stylesheet href="main.css"/>
		</head>
		<body>
		<div class="threadwrapper">
		<center>
		<form id="home" action="upload.php" method="post">
		<header class="banner" align="center">Alt Culture Messageboard</header>
		<?php include("randimage.php");?>
		<p style="color: #000;">Over <label style="color: #110;"><?php include "postcount.php";?></label> Posts from KIDS LIKE YOU</p>
		<br>
		
		Your Message
		<br>
		<textarea form="home" name="microblog" rows=8 cols=70></textarea><br>
		
		Name (optional):  <input type=text name="name">
		<input type="submit">
		</form>
		</center>
		<table class=posttable> 
			<?php
	//calculate number of posts and retrive posts
	$directory = "posts/";
	$filecount = 0;
	$files = glob($directory . "*");
	if ($files){
	$filecount = count($files);
	}
	//loop
	for ($x = 0; $x <= $filecount -1; $x++){
	$revcount = $filecount - $x;
	$filename = "posts/".$revcount.".txt";
	//get file data
	$myfile = fopen($filename, "r") or die("Unable to open file!");
	$blogtext = fread($myfile,filesize($filename));
	fclose($myfile);
	//generate table row
	echo "<tr><td class=\"microtable\">".$blogtext."</td></tr>";
	
	}
	?>
		</table>
		<p align="center" class="footertext">
		<a href="postlookup.php">Post Archive</a></p>
		</div>
		</body>
		</html>