<!DOCTYPE html>
	<html>
		<head>
		<link rel=stylesheet href="main.css"/>
		</head>
		<body>
		<div class="threadwrapper">
		<center>
		<form action="postlookup.php" method="post">
		<input name="keypost" type="number" value="<?PHP echo $_POST['keypost'];?>"/>
		<input type="submit"/>
		</form>
		<table class="posttable">
		<?php
		$keypost = $_POST['keypost'];
		if ($keypost == 0 || $keypost == null){}else{
				$filename = "posts/".$keypost.".txt";
				//get file data
				$myfile = fopen($filename, "r") or die("Unable to open file!");
				$blogtext = fread($myfile,filesize($filename));
				fclose($myfile);
				//generate table
			echo "<tr><td class=\"microtable\">".$blogtext."</td></tr>";
		}
		
		?>
		</table>
		</center>
		<p align="center" class="footertext">
		for inquiries or problems, send all messages to myxicast@gmail.com<br>
		<a href="index.php">Home</a></p>
		</div>
		</body>
		</html>