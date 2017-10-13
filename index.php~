<?php
function checkPalindrome($inputString) {
 $isPalindrome = true;
 $len = strlen($inputString);

  if($len == 1){
   return $isPalindrome;
  }

  for($i = 0; $i < $len / 2; $i++){
    if($inputString[$i] !== $inputString[$len-$i-1]){
     $isPalindrome = false;
     return $isPalindrome;
    }
  }

 return $isPalindrome;
}
?>
