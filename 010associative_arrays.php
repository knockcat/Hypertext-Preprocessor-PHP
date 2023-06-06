<?php

// Associative Arrays

// key value pair

$arr = array('1' => 'one', '2' => 'two', 'three' => '3' , 'four' => '4');

echo $arr['1'];
echo "<br>";

echo $arr['2'];
echo "<br>";

echo $arr['three'];
echo "<br>";

foreach($arr as $val => $key){
    echo "<br> key of $val is $key";
}

?>