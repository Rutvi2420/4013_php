<?php

// 1. Arithmetic Operators
echo "<h1> Arithmetic Operators <h1> \n";
$a = 10;
$b = 3;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Exponentiation: " . ($a ** $b) . "<br>";

echo " <h2> Assignment Operators <h2>\n";
$x = 5;
echo "Initial value of x: " . $x . "<br>";

echo "After x += 3: " . $x . "<br>";
$x -= 2; 
echo "After x -= 2: " . $x . "<br>";
$x *= 4; 
echo "After x *= 4: " . $x . "<br>";
$x /= 2; 
echo "After x /= 2: " . $x . "<br>";
$x %= 3; 
echo "After x %= 3: " . $x . "<br>";


echo "<h3> Comparison Operators <h3> \n";
$a = 10;
$b = "10";
echo "Equal (==): " . (int)($a == $b) . "<br>"; 
echo "Identical (===): " . (int)($a === $b) . "<br>";
echo "Not Equal (!=): " . (int)($a != $b) . "<br>"; 
echo "Not Identical (!==): " . (int)($a !== $b) . "<br>";
echo "Greater Than (>): " . (int)(15 > 10) . "<br>"; 
echo "Less Than (<): " . (int)(5 < 10) . "<br>"; 
echo "Spaceship Operator (<=>): " . (5 <=> 10) . "\n\n";

echo "<h4> Logical Operators <h4> \n";
$is_admin = true;
$is_active = false;
echo "AND (&&): " . (int)($is_admin && $is_active) . "<br>"; 
echo "OR (||): " . (int)($is_admin || $is_active) . "<br>";
echo "NOT (!): " . (int)(!$is_active) . "\n\n";

echo "<h5> String Operator <h5>\n";
$greeting = "Hello";
$name = "World";
echo "Concatenation (.): " . $greeting . " " . $name . "!\n";

?>