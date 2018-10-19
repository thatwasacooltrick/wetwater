<?php
$score = 0;
	$dir = "posts/";
	$postcountcount = 0;

	$postnames = scandir($dir);
	$postcount = count($postnames) - 4;
	echo $postcount;
	?>