<?php 
	/*
		Program to find Greater among two numbers.
			Two methods
	*/
	// If..else Condition
		$a = 5;
		$b = 8;
		if($a > $b){
			echo "$a is greater than $b<br>";
		}
		else{
			echo "$b is greater than $a<br>";
		}

	//Ternary Operators
		$a = 1;
		$b = 5;
		echo ($a > $b)?"$a is greater than $b":"$b is greater than $a";
 ?>