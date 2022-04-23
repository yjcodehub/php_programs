<?php 
  /* 
    Program to check whether the given number is palindrome or not.
    A palindrome number is a number that is given the same number after reverse. 
  */

  //Method 1   (Itrative Method)
  $num = $temp = 505;
  $rev = 0;
  while((int)$num != 0){ //( floor($num) / (int)$num / $num!=0)
    $rem = $num % 10; //rem = 2 0 2 5
    $rev = $rev * 10 + $rem; //rev = 2 20 202 2025
    $num /= 10;//num = 520.2  52.02  5.202  0.5202
  }
  echo "Revrese of given number $temp is $rev<br>";
  if($temp == $rev) echo "The given number is Palindrome.<br>";
  else echo "The number is not Palindrome.<br>";


  //Method 2    (Recursive Approach)

  function reverse($num, $rev)
  {
    if((int)$num == 0) return $rev;
    $rev = ($rev * 10) + ($num % 10);
    return reverse($num/10, $rev);
  }
  $temp = $num = 202;
  $rev = reverse($num, 0);
  if($temp == $rev) echo "The given number is Palindrome.<br>";
  else echo "The number is not Palindrome.<br>";
?>