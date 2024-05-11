<?php

function mySin($x){
    return sin($x);
    
}
function myCos($x){
    return cos($x);
}
function myTan($x){
    return tan($x);
}
function myPow($x, $y){
    return pow($x, $y);
}
function myFactorial($x){
    if($x == 0 || $x == 1) {
        return 1;
    } else {
        return $x * myFactorial($x - 1);
    }
}

?>