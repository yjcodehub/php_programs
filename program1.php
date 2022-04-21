<?php 
	//Program to check a number is negative or positive
	/*
			There is three method 
			method 1 => Brute force
			method 2 => Nested If...else Statements
			method 3 => Ternary Operator
	*/

	//Method 1
		$num = 5;
		if($num>0){
			echo "The $num is Positive<br>";
		}
		elseif($num<0){
			echo "The $num is Negative<br>";
		}
		else{
			echo "The $num is neither Negative nor Positive<br>";
		}

	//Method 2
		$num = -5;
		if($num >= 0){
			if($num == 0){
				echo "The $num is Zero<br>";
			}else{
				echo "The $num is positive<br>";
			}
		}
		else{
			echo "The $num is Negative<br>";
		}

		//Method 3
			$num = 0;
			if($num == 0){
				echo "$num is Zero<br>";
			}
			else{
				echo ($num>0)?"$num is Positive":"$num is Negative";
			}
 ?>