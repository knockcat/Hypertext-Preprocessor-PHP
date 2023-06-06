<?php

echo "Functions in PHP <br>";

function processMarks($marksArr)
{
    $num = 0;

    foreach($marksArr as $val)
        $num += $val;
    
    return $num;
}

function averageMarks($marksArr)
{
    $num = 0;
    $cnt = count($marksArr);

    foreach($marksArr as $val)
    {
        $num += $val;
    }
    
    return $num/$cnt;
}

$vicky = [34, 98, 45,12,98,93];

$knockcat = [33,33, 33,33,33,33];

$numMarks = processMarks($vicky);
$avgvickyMarks = averageMarks($vicky);


$knockcatMarks = processMarks($knockcat);
$avgknockcatMarks = averageMarks($knockcat);

echo "Marks score by vicky : $numMarks <br>";
echo "Average Marks score by vicky : $avgvickyMarks <br>";

echo "Marks score by knockcat : $knockcatMarks <br>";
echo "Average Marks score by knockcat : $avgknockcatMarks <br>";

?>