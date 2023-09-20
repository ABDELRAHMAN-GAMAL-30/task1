<?
 $drop="add";
 $num1 = 5;
 $num2 = 5;
 if($drop=="add"){
   $num3=$num1+$num2;}
     elseif ($drop=="sub") {
       $num3=$num1-$num2;
     }  
     elseif ($drop=="mod") {
       $num3=$num1%$num2;
     }  
     elseif ($drop=="mul") {
       $num3=$num1*$num2;
     }  
     elseif ($drop=="div") {
       $num3=$num1/$num2;
     }  
     elseif ($drop=="pow") {
       $num3=$num1^$num2;
     }  
   else( $num3="Please select operation ");
   echo "the result is: ".$num3;

   ?>