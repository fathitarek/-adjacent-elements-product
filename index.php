<?php
function adjacentElementsProduct($inputArray) {
    $len=count($inputArray);
    if($len > 10 || $len < 2){
        return false;
    }
    $largeElement =-1000;
    for($i = 0; $i < $len - 1; $i++){
        if($inputArray[$i] <= 1000 && $inputArray[$i] >= -1000){
            if(($inputArray[$i] * $inputArray[$i+1]) > $largeElement){
                $largeElement = $inputArray[$i] * $inputArray[$i+1];
            }
        }
    }
    return $largeElement;
}

?>
