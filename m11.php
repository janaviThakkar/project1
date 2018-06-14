<?php

$array = [1,2,3,4,5];
echo sizeof($array);
echo "<br />";

	function binarySearch(int $value, array $array, int $start, int $end)

		{
    
    		if($end<$start) 

    			return ;


    
    		$middle = floor(($end + $start)/2);

    			echo "middle = $middle<br />";

    			echo "array = $array[$middle]<br />";

    			echo "value = $value<br />";



    		if($array[$middle]==$value) 


    			return true;


    		elseif ($array[$middle] > $value) 

    			return binarySearch($value, $array, $start, $middle-1);


    		else binarySearch($value, $array, $middle+1, $end);

		}


$found = binarySearch(6, $array, 3, sizeof($array)-1);

	if($found) echo "found";

	else echo "not found";
?>