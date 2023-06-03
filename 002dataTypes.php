<?php

$name = "Knockcat";
$income = 200;

// php data types

/*

1. String 
2. Integer
3. float
4. boolean
5. object
6. Array
7. NULL

*/

// String : Sequence of characters

// single quotes and double quotes give same results
$name = "Vicky";
$friend = 'knockat';

echo "$name is $friend itself. <br>";

// Integer : Non decimal number

$a = 10;
$b = -32;

echo "$a and $b";

// Float : Decimal point number.

echo "<br>";

// we can overwrite values in php.

$a = 4.5;
$b = -43.43;

echo $a;
echo "<br>";
echo $b;

// Boolean : can be either true or false

$ok = true;
$flag = false;

echo "<br> $ok";

// do not give output for false value

echo "<br> $flag";

// var_dump() function give variable value and its type as output

$one = false;
$two = true;

echo "<br>";
echo var_dump($one);

echo "<br>";
echo var_dump($two);


// Object : Instances of Classes

// Employee is a class ---> arun can be one object

// Array - Used to store multiple values in a single variable

$names = array("vishal", "vicky", "vishu", "knockcat");

echo "<br>";

echo var_dump($names);

// other way

echo "<br>";

echo $names[0];
echo "<br>";
echo $names[1];
echo "<br>";
echo $names[2];
echo "<br>";
echo $names[3];
echo "<br>";


// NULL

$here = NULL;

// NULL do no print anything
echo "<br>$here";

echo var_dump($here);

?>