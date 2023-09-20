<?php
$string = "no pain , no gain ";
$word = "gain";
if (strpos($string, $word) !== false) {
  echo ('success word '.'<br>'.'<br>');
} else {
  echo('wrong word '.'<br>'.'<br>');
}
?>
