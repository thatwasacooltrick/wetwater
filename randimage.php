<?php
$imagedir = scandir("images/");
$basenumber = glob("images/" . "*");
$imagenumber = rand(1, count($basenumber)) + 1;
$imagetag = "<img class=\"imgthreadwrapper\" src=\"images/$imagedir[$imagenumber]\"><p> Your Image: ".$imagedir[$imagenumber]."</p>";
echo $imagetag;
?>