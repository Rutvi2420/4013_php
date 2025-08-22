<?php
$array = [22, 25, 12, 18, 31];

$sortedArray = $array;
sort($sortedArray);
$minValue = $sortedArray[0];

$reverseSortedArray = $array;
rsort($reverseSortedArray);
$maxValue = $reverseSortedArray[0];

echo "Maximum value:" .$maxValue. "<br>";
echo "Minimum value:" .$minValue;
?>