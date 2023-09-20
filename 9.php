<?php
  $string = "EraaSoft Learn by practice";
  $word = "by";
  
if (strpos($string, $word) !== false) {
    echo ('The word '.'('.$word.')'.' exists in the string '.$string.'<br>'.'<br>');
  } else {
    echo( 'The word '.'('.$word.')'.' does not exist in the string '.$string.'<br>'.'<br>');
  }
  
  ?>