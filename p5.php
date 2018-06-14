<?php
$value=2016;
if($value % 4 == 0 && $value % 100 !== 0 || $value % 400 == 0)
{
    echo "$value is a leap year";
}
else
{
	echo "$value is Not a leap year";
}
