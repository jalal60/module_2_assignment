<?php
	//Fibonacci numbers with break condition
	$number=0;
	$num1=0;
	$num2=1;
	echo $num1." ".$num2." ";
	while($number<15){
	  $num3=$num1+$num2;
	  if($num3>100)
	  break;
	  else if($number<8){
  	  echo $num3." ";
  	  $num1=$num2;
  	  $num2=$num3;
	    }
  	  $number++;
