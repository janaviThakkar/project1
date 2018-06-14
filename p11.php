<?php

function swapNum($a,$b){

	$a=$a+$b;
	$b=$a-$b;
	$a=$a-$b;
	print $a;	
}
swapNum(10,20);
;
?>