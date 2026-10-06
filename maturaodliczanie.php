<?php 
$now = time(); 
$year = 18 *365 * 24 * 60 * 60;
echo "18 lat temu było: " . date("Y-m-d h:i:sa", $now - $year);