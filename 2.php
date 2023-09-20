
<?php
$height = 5;
if($height <= 0 ){
    echo "height should be greater than or equal zero ";
}else{
    $sizeOfBox = (5 * 10 * $height);
    echo ('size of box is: '.$sizeOfBox.'<br>'.'<br>');
}
?>