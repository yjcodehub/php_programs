<?php 
  /* 
    Program to check whether a given number is Armstrong number or not.

    However, Armstrong number is any number following the given rule –

    abcd… = an + bn + cn + dn + …
    Where n is the order(length/digits in number)

    Example 1
    Example = 153 (order/length = 3)
    153 = 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

    Example 2
    Example = 1634 (order/length = 4)
    1634 = 1^4 + 6^4 + 3^4 + 4^4 = 1 + 1296 + 81 + 256 = 1634

  */
  function len($num,$len)
  {
    if(floor($num) == 0) return $len;
    return len($num/10, ++$len);
  }
  $num = $temp = 153;
  $len = $sum = 0;
  $len = len($num, $len);  
  while((int)$num != 0){
   $rem = $num % 10;
   $sum = $sum + pow($rem, $len);
   $num/=10;
  } 
  if($temp == $sum) echo "The number $temp is Armstrong number<br>";
  else echo "The number is not Armstrong number<br>";

?>