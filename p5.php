<?php
echo "<h1> Using For Loop  <h2> \n";
for ($i = 5; $i <= 10; $i++) {
    echo $i . "\n";
}
?>

<?php
echo "<h2> Using ForEach Loop  <h2> \n";
$numbers = range(5, 10); 
foreach ($numbers as $number) {
    echo $number . "\n";
}
?>