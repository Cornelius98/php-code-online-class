<?php

//If statement
// $a = 10;
// $b = 11;
// if($a==$b){
//     echo "Equal";
// }else {
//     echo "Not Equal";
// }

//== (value)
$a = 100;
$b = 100;
if($a==$b){
    echo "Yes, Equal";
}else {
    echo "No, Not Equal";
}

//=== (value & data type)
$c = 200;
$d = 200;
if($c===$d){
    echo "<br>Equal 200<br>";
} else {
    echo "<br>Not Equal 200<br>";
}

//!= or <>
$e = 10;
$f = 10;

if($e<>$f){
    echo "Yes, not equal<br>";
} else {
    echo "No, they are equal<br>";
}

//>
$g = 30;
$h = 20;
if($g>$h){
    echo "30 is greater than 20<br>";
} else {
    echo "30 is less than<br>";
}

//>=
$g = 30;
$h = 30;
if($g>=$h){
    echo "30 is greater than 20<br>";
} else {
    echo "30 is less than<br>";
}

//<
$i = 30;
$j = 50;

if($i<$j){
    echo "i is less than J<br>";
} else {
     echo "i is greater than J<br>";
}

//<=
$m = 40;
$n = 50;
if($m<=$n){
    echo "Yes, is less than or equal<br>";
}else {
    echo "No, is not less than or equal to<br>";
}

?>