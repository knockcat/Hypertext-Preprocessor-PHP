<?php

echo "while loop in php <br>";

$i = 0;

while($i < 10)
{
    echo "$i ";
    ++$i;
}

echo "<br>";

echo "for loop in php <br>";

for($i = 0; $i < 5; ++$i)
    echo $i+1;

echo "<br>";

echo "do-while loop in php <br>";

do
{
    echo $i;
} while($i < 4);

echo "<br>";

echo "for-each loop in php <br>";

$arr = array("one", "two", "three", "four", "five");

// one way

for($i = 0; $i<count($arr); ++$i)
{
    echo "$arr[$i] ";
}

echo "<br>";

// better way

foreach ($arr as $val) {
    echo "$val ";
}

?>