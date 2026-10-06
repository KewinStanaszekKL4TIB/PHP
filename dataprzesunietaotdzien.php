<?php
$now = time();
$week = 7 * 24 * 60 * 60;
echo "Za tydzień będzie: " . date("Y-m-d h:i:sa", $now + $week);
?>