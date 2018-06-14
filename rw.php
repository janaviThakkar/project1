<?php
	
	$Nfile = fopen("new.txt" , "r+") or die("unable to open file");
	$txt = "hello php";
	fwrite($Nfile,$txt);
	fclose($Nfile);
?>