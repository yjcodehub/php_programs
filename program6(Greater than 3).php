<?php 
  //Program to find Greater among three numbers
  /* 
      1. Nested If..Else 
      2. if...elseif ladder
      3. Ternary Operator
  */
  //Nested If....else
    $a = 500;
    $b = 100;
    $c = 15;
    if($a>$b){
      if($a>$c){
        echo "$a is Greater<br>";
      }
      else{
        echo "$c us Greater<br>";
      }
    }
    else{
      if($b>$c){
        echo "$b is Greater<br>";
      }
      else{
        echo "$c is Greater<br>";
      }
    }

  // 2. if...elseif ladder

   if($a>$b && $a>$c){
    echo "$a is Greater<br>";
   }
   elseif($c>$b && $c>$a){
    echo "$c is Greater<br>";
   }
   else{
     echo "$b is Greater<br>";
   }

   //Ternary Operator

   $num1 = 5;
   $num2 = 10;
   $num3 = 20;
   
   $temp = $num1>$num2 ? $num1:$num2;
   $result = $temp>$num3 ? $temp:$num3;

   echo "$result is Greater";

 ?>