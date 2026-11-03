<?php
$myfile = fopen("Kewin.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Kewin.txt"));
fclose($myfile);
?>