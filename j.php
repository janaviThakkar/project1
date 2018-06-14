<?php

echo "1212";

$i=0
$y='0';
$x='abc';

echo "<br/>";

$math = 1+2+3;


/*
== value comparison

=== datatype and value comparison

*/

if($i==0) {
	echo "its 0";
} else {
	echo "its not 0";
}
echo "<br/>";


for($i=0;$i<5;$i++) {
	echo "Loop Count" .$i."<br/>" ;
}


$i=[1,2,3,4,5];
$i=array(1,2,3,5,6);


foreach ($i as $key => $value) {
	echo "Loop Count" .$value."<br/>" ;
}



foreach ($i as $key => $value) {
	echo "Loop Count" .$i[$key]."<br/>" ;
}


?>