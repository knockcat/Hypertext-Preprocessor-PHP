<?php

// if, elseif,  else

$a = 423;
$b = 564;

if($a > 78)
    echo "a is greater than 78";
else
    echo "a is not greater than 78";

echo "<br>";

$age = 54;

if($age > 18)
    echo "You are above 18 <br>";
elseif($age > 13)
    echo "You are below 15 <br>";
else
    echo "$age";

if($age > 18)
    echo "You are above 18 <br>";
if($age > 13)
    echo "You are below 15 <br>";
else
    echo "$age";

echo "<br>";

$drivingAge =  33;

if($drivingAge < 25)
    echo "underAge";
else if($drivingAge > 65)
    echo "overAge";
else
    echo "You can Drive";

echo "<br>"

?>