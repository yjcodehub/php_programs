<?php 
  /* 
    Program to check a number is Prime or not.

    Given an integer input, the objective is to check whether or not the input integer is a prime or not. In order to do so we check if the number is divisible by 2, if so it’s not a prime. We also divide the numbers with the input until square root of the input, if any of them divides the number perfectly, it’s not a prime.  Here are some of the methods to Check Whether a Number is Prime or Not in PHP

    Method 1: Simple iterative solution
    Method 2: Optimization by break condition
    Method 3: Optimization by n/2 iterations
    Method 4: Optimization by √n
    Method 5: Optimization by skipping even iteration
    Method 6: Basic Recursion technique
  
  */
  // Method 1: Simple iterative solution
  /* 
      Initialize count = 0
      Run an iterative for loop in iteration of (i) b/w 1 -> num
      Check if num is divisible i
      If divisible increment count
      If num == 0 or num == 1 : Not Prime
      If count > 2 : Not prime
      Else, it is Prime
  */
  $num = -3;
  $count = 0;
  for ($i=1; $i < $num; $i++) { 
    if($num % $i == 0){
      $count++;
    }
  }
  if($num == 0 || $num == 1 || $count > 2 || $num < 0){
    echo "$num is not Prime Number<br>";
  }
  else{
    echo "$num is Prime Number<br>";
  }

  // Method 2: Optimization by break condition
  /* 
    All numbers are divisible by 1 and itself
    So it is better to check for divisors between [2,n-1]
    If any divisor is found, then break the loop and don’t check further as it’s not prime
    0, 1 and all negative numbers are not prime

    Initialize a flat called as isPrime = 1 i.e. true
    If num < 2
    isPrime = 0
    Run an iterative for loop in iteration of (i) b/w 2 -> num -1
    Check if num is divisible i
    If divisible isPrime = 0 and break loop
    If isPrime  == 1 : Prime
    Else, it is Not Prime

  */

  $num = 2;
  $isPrime = 1;//true
  if($num < 2){
    $isPrime = 0;//false
  }
  for ($i=2; $i < $num; $i++) { 
    if($num%$i==0){
      $isPrime = 0;//false
      break;
    }
  }
  echo $isPrime == 1 ? "$num is Prime Number <br>":"$num is not a Prime Number <br>";


  // Method 3: Optimization by n/2 iterations
  /* 
    Checking for divisors b/w [2, n-1] is wasteful
    As no number will have any divisor beyond num/2+1
    Example: 36 won’t have any divisors between [17, 35]
  */
  $num = 31;
  $isPrime = 1;//true
  if($num < 2){
    $isPrime = 0;//false
  }
  for ($i=2; $i < ($num/2)+1; $i++) { 
    if($num%$i==0){
      $isPrime = 0;//false
      break;
    }
  }
  echo $isPrime == 1 ? "$num is Prime Number <br>":"$num is not a Prime Number <br>";
?>