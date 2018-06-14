<?php



function search($list, $data)
{


	$count = count($list);


	for ($i = 0; $i < $count; $i++ ) 

		{ 
			if ($data == $list[$i]) 
				return $i;
		}
		return -1;
}

$list = array(123, 12, 143, 14, 456);
$index = search($list, 456);
echo $index;
?>
