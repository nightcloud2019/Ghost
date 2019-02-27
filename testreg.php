<?php

$line = "Vi is the                    greatest word processor ever created";
   // perform a case-Insensitive search for the word "Vi"
   
   if (preg_match("/^[a-zA-Z0-9\d ,]*$/", $line, $match)){
	echo "This is  ok";
 
}else{
	echo "This is not ok";
}

?>
