<?php
	/*
	| Program to sum of n natural numbers
		There is three methods to solve it
	*/
	//Iterative Method
	$num = 10;
	$sum = 0;
	for ($i=1; $i <= $num ; $i++) {
		$sum += $i;
	}
	echo "Sum of $num natural number is $sum <br>";
	// Time complexity : O(n)
	// Space complexity : O(1)
	
	/*
		Direct Formula
		// Time complexity : O(1)
	// Space complexity : O(1)
	*/
	$num = 5;
	$sum = $num*($num+1)/2;
	echo "The sum of $num natural number is $sum<br>";
	
	/*
	Recursive Approach
		Time complexity : O(n)
		Space complexity : O(1)
		Auxilary space complexity : O(N)
		Due to function call stack
	*/
	function getSum($sum, $n)
	{
		if($n == 0) return $sum;
		return $n + getSum($sum, $n-1);
	}
	$n = 5;
	$sum = 0;
	echo "The sum of $n natural numbers is ". getSum($sum, $n);
?>