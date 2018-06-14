<?php
$str[1]=[1,2,3,4];
$str[2]=[5,6,7,8];

for ($i=0; $str[1] != '\0' ; ++$i) 

{

	for ($j=0; $str[2] != '\0' ; ++$j , ++$i) 

	{ 
		
		$str[1]=$str[2];

	}
}
$str[1] = '\0';
return 0;
echo $str[1];
?> 