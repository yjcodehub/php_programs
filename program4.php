<?php 
	/*
		Program to sum of numbers between the range.

			There is Three different Methods to solve it.
	*/
	// Iterative / Brute force Method

		$num1 = 5;
		$num2 = 10;
		$sum = 0;
		for ($i=$num1; $i <= $num2; $i++) { 
			$sum += $i;
		}
		echo "The sum of numbers between $num1 and $num2 is $sum<br>";

	// Direct Formula
		$num1 = 5;
		$num2 = 10;
		$sum = $num2*($num2+1)/2 - $num1*($num1+1)/2 + $num1;

		echo "The sum of numbers between $num1 and $num2 is $sum<br>";

	//Recursive approch 
		function getSum($sum, $a, $b)
		{
			if($a > $b) return $sum;
			return $a + getSum($sum, $a+1, $b);
		}
		$a = 5;
		$b = 10;
		$sum = 0;
		echo "The sum of numbers between the range $a and $b is ". getSum($sum, $a, $b);
 ?>