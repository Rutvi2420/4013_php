<?php
echo "<h1>Using a while  <h1> \n";
$i = 15; 
echo "Numbers from 15 to 20 using a while loop:\n";
while ($i <= 20) { 
    echo $i . "\n"; 
    $i++; 
}
?>

<?php
$j= 15; 

echo "\nNumbers from 15 to 20 using a do...while loop:";
do {
    echo $j . "\n"; 
    $j++; 
} while ($j <= 20); 