<?php

function add($n1, $n2){
    $result = $n1 + $n2;
    return $result;
    /*echo "Result Add : ".$result."<br>";*/
}

function subtract($n1, $n2 = 50){
    $result = $n1 - $n2;
    echo "Result Subtract : ".$result."<br>";
}

function multiply($n1, $n2, &$result){
    $result = $n1 * $n2;
}

$num1 = 20;
$num2 = 10;
$resultMul =  0;

$resultAdd = add($num1, $num2);
echo "Result Add : ".$resultAdd."<br>";

subtract($num1);

multiply($num1, $num2, $resultMul);
echo "Result Multiply : ".$resultMul;

?>