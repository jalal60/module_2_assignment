<?php
//For Loop Function
function evenNumber1($num1, $num2)
{
    echo "For Loop Even Number=";
    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
evenNumber1(1, 20);
echo PHP_EOL;
//While Loop Function
function evenNumber2($num1, $num2)
{
    echo "While Loop Even Number=";
    $i = $num1;
    while ($i <= $num2) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    }
}
evenNumber2(1, 20);
echo PHP_EOL;
//Do-While Loop Function
function evenNumber3($num1, $num2)
{
    echo "Do While Loop Even Number=";
    $i = $num1;
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    } while ($i <= $num2);
}
evenNumber3(1, 20);
