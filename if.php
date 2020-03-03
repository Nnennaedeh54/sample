<?php
$height = 6.1;

//if ($height>= 6.3) {
  //  echo "You are tall";
//} else if ($height>=5.8) {
  //  echo "You are average";

 //}elseif ($height>=5.0){
   // echo "You are short";
//} else {
  //  echo "You are d";
// 
//}   

switch ($height) {
case 6.2:
    echo "You are tall";
    break;
case 5.8:
    echo "You are average";
    break;
case 5.0:
    echo "You are short";
    break;
default:
    echo "You are D";
    $result = $height>6 ? "Qualified":"Disqualified";
    echo $result;
}
?>


