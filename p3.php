<?php
$i = 0;
function primeOrNot($num){
	if($num==1){
		return 0;
	}

	for($i=2;$i<=$num/2;$i++){
		if($num % $i == 0)
			return 0;
	}
	return 1;

}

$num = 40;
$flag = primeOrNot($num);
if($flag == 1){
	echo "prime";
}
else
	echo "Not prime";
?>