<?php 
  /* 
    Program to find Leap year or not

    Given an integer input for an year, the objective is to check whether the given integer input represents a 
    Leap year or not. In order to do so we’ll check for two conditions, any year to be a leap year must satisfy 
    either of them.

    Conditions for a Leap Year
    For any year to be a leap year it must satisfy either of these conditions
    1. Year must be divisible by 400.
    2. Year must be divisible by 4 and not by 100 at the same time.

    Method 1. if...else ladder Statement
    Method 2. if...else statement

  */

  //1. if...else ladder
  $year = 2020;
  if($year%400==0){
    echo "$year is Leap year<br>";
  }
  elseif($year%4==0 && $year%100 != 0){
    echo "$year is Leap Year<br>";
  }
  else{
    echo "$year is not year<br>";
  }


  //2. if...else statement
  if(($year%400 == 0) || ($year%4==0 && $year%100!=0)){
    echo "$year is Leap year<br>";
  }
  else{
    echo "$year is not year<br>";
  }



?>