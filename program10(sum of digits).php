<?php 
  /* 
      Program to sum digits of number
      Method 1: Iteration
      Method 2: recursive Approch
  */

  //Method 1
  $temp = $num = 1234;
  $sum = 0;
  while ((int)$num) {
    $sum = $sum + ($num%10);
    $num /= 10;
  }
  echo "The sum of all digits of $temp is <b>$sum</b><br>";

    $temp = $num = 5263;
  $sum = 0;
  while (floor($num)) {
    $sum = $sum + ($num%10);
    $num /= 10;
  }
  echo "The sum of all digits of $temp is <b>$sum</b><br>";

  //Method 2
  function sumOfDigit($num, $sum)
  {
    if($num == 0) return $sum;

      $sum += $num % 10;
     return  sumOfDigit($num/10, $sum);
    
  }
  $num = 1000000105;
  $sum = 0;
  echo "The Sum of All Digit in $num is ".sumOfDigit($num, $sum);
?>