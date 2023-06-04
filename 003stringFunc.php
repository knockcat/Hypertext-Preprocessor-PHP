<?php

$name = "knockcat is a good boy ";
echo $name;
echo "<br>";

// We can Concatenate 2 string using . operator

echo "function to calculate Length of string : " . strlen($name);
echo "<br>";

// give word count of the string

echo str_word_count($name);
echo "<br>";

// reverse the string

echo strrev($name);
echo "<br>";

// search in a string

// return the index of the search word or character if found otherwise print nothing.

echo strpos($name, "is"); 
echo "<br>";

// replace

echo str_replace("knockcat", "vishal", $name);
echo "<br>";

// repeat

echo str_repeat($name, 10);
echo "<br>";

// trim

// pre tag maintiains the formating of text in html

echo "<pre>";

echo rtrim("    this is a good boy    "); // rtrim removes spaces from right.

echo "<br>";

echo ltrim("     this is a good boy    "); // ltrim removes spaces from left.

echo "<br>";

echo "</pre>";
?>