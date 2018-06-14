<?php

function revSNum($num){
	$snum = (string) $num;
	$revstr = strrev($snum);
	$reverse = (int) $revstr;
	return $reverse;
}
echo revSNum(12345);
?>