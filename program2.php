<?php
	/*
		Program to check number is even or odd.
		there is three method
	*/
	//Method 1 (Simple if-else method)
		$num = 5;
		if($num % 2 == 0){
			echo "$num is even Number<br>";
		}	
		else{
			echo "$num is odd Number<br>";
		}

	//Method 2 (using ternary operator)
		$num = 2;
		echo ($num % 2 == 0) ? "$num is  Even Number<br>":"$num is Odd Number<br>";

	//Method 3 (Using Binary number (Bitwise Operator))
		$num = 0;

		echo !($num & 1) ? "$num is  Even Number<br>":"$num is Odd Number<br>";
?>