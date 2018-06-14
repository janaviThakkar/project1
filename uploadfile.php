<?php

$result=0;
	echo "Sss";
	if (!empty($_POST["upload_file"])) { 

	   $imagename = basename($_FILES['image_file']['name']); 
	   $result = move_uploaded_file($_FILES['image_file']['tmp_name'], $imagename); 
	   print_r($result);

   if ($result==1)

   		{
   		 echo("Successfully uploaded: <b>".$imagename."</b>");
   		}
   	else
   	{
   		echo "string123";
   	}
}
if ($result==1)

	{
	 echo("<img src='".$imagename."'>");
	}

?> 