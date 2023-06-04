<?php

// Operators in PHP

/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

// 1. Arithmetic Operators

$a = 45;
$b =  5;

echo "addition of $a and $b is : " . ($a + $b) . "<br>";
echo "subtraction of $a and $b is : " . ($a - $b) . "<br>";
echo "multiplication of $a and $b is : " . ($a * $b) . "<br>";
echo "division of $a and $b is : " . ($a / $b) . "<br>";
echo "modulo of $a and $b is : " . ($a % $b) . "<br>";
echo "exponentiation of $a ** $b ( a raise to power b ) is : " . ($a ** $b) . "<br>";

// 2. Assignment Operators

// value of a is assigned to x
$x = $a;

echo "for x the value is $x";
echo "<br>";

// other use of assignment operators

$x += $a;
echo "$x";
echo "<br>";

$x -= $a;
echo "$x";
echo "<br>";

$x *= $a;
echo "$x";
echo "<br>";

$x /= $a;
echo "$x";
echo "<br>";

$x %= $a;
echo "$x";
echo "<br>";

// 3. Comparison Operators

$x = 7;
$y = 9;

$x1 = 3;
$x2 = 3;

// do no return false

// equal and not equal

echo "for $x == $y, the result is : ";
echo var_dump($x == $y);
echo "<br>";

echo "for $x <> $y, the result is : ";
echo var_dump($x <> $y);
echo "<br>";

echo "for $x1 == $x2, the result is : " . ($x1 == $x2) . "<br>";

// lest than greater than

echo "for $x1 > $x2, the result is : " ;
echo var_dump($x1 > $x2);
echo "<br>";

echo "for $x1 < $x2, the result is : ";
echo var_dump($x1 < $x2);
echo "<br>";

// less than, greater than equal to

echo "for $x1 < $x2, the result is : ";
echo var_dump($x1 <= $x2);
echo "<br>";

// 4. Logical Operators

$m = true;
$n = false;

// and or

echo "for $x1 and $x2, the result is : ";
echo var_dump($x1 and $x2);
echo "<br>";

echo "for $x1 or $x2, the result is : ";
echo var_dump($x1 or $x2);
echo "<br>";

echo "for $x1 && $x2, the result is : ";
echo var_dump($x1 && $x2);
echo "<br>";

echo "for $x1 || $x2, the result is : ";
echo var_dump($x1 || $x2);
echo "<br>";

// not

echo "for !$m, the result is : ";
echo var_dump(!$m);
echo "<br>";

?>