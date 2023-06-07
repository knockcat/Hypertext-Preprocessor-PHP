<?php

echo "Multidimensional Array in PHP <br>";

$multiArr = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11, 12),
    array(13,14,15,16)
);

echo var_dump($multiArr);

echo "<br>";
echo "<br>";

for($i = 0; $i < count($multiArr); ++$i)
{
    echo var_dump($multiArr[$i]);
    echo "<br>";
}

echo "<br>";
echo "<br>";

for($i = 0; $i < count($multiArr); ++$i)
{
    for($j = 0; $j < count($multiArr[$i]); ++$j){
        echo $multiArr[$i][$j];
        echo " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

foreach($multiArr as $arr){
    foreach($arr as $val)
        echo "$val ";
    echo "<br>";
}

?>