<?php

echo "Local and Global Variable in PHP<br>";

echo "<br> <br>";

$a = 53;
$b = 64;

function printValue()
{
    global $a, $b;

    // for accessing global variable we have to declare them as global inside function

    echo "<br> Before Change <br> 53 64"; // 53 64

    echo "<br> <br>";
    

    echo "<br> The value of your variable a is $a and b is $b";

    // if we tried to change global values it will be changed permanently

    $a = 13;
    $b = 80;
    echo "<br> <br>";

    echo "<br> After Change <br> 13 80"; // 13 80

    echo "<br> <br>";

    echo "<br> The value of your variable a is $a and b is $b";

    echo "<br> <br>";

}

echo "<br> Before Change <br> 53 64"; // 53 64

echo "<br> <br>";

echo "<br> The value of your variable a is $a and b is $b";

echo "<br> <br>";

printValue();

echo "<br> After Change <br> 13 80"; // 13 80

echo "<br> <br>";

echo "<br> The value of your variable a is $a and b is $b";

echo "<br> <br>";

// print all the GLOBAL variables

echo var_dump($GLOBALS);

echo "<br> <br>";

echo var_dump($GLOBALS['a']);

echo "<br> <br>";

echo var_dump($GLOBALS['b']);

echo "<br> <br>";

?>