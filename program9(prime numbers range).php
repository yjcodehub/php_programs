<?php 
  //Program to check prime numbers in a given range

  $num1 = 1;
  $num2 = 50;
  echo "Entered Number is $num1 and $num2<br>";
  while ($num1 <= $num2) {
    $isPrime = 1;//true
    if($num1<2){
      $isPrime = 0; //false
    }

    for ($i=2; $i < $num1/2+1; $i++) { 
      if($num1%$i==0){
        $isPrime = 0;// false
        break;
      }
    }

    if($isPrime == 1){
      echo "$num1 ";
    }
    $num1++;
  }
