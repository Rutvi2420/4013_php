<?php

echo "<h1> Using If..else <h1> \n";
$monthNum = date('n'); 
if ($monthNum == 1) {
    echo "Current Month: January";
} elseif ($monthNum == 2) {
    echo "Current Month: February";
} elseif ($monthNum == 3) {
    echo "Current Month: March";
} elseif ($monthNum == 4) {
    echo "Current Month: April";
} elseif ($monthNum == 5) {
    echo "Current Month: May";
} elseif ($monthNum == 6) {
    echo "Current Month: June";
} elseif ($monthNum == 7) {
    echo "Current Month: July";
} elseif ($monthNum == 8) {
    echo "Current Month: August";
} elseif ($monthNum == 9) {
    echo "Current Month: September";
} elseif ($monthNum == 10) {
    echo "Current Month: October";
} elseif ($monthNum == 11) {
    echo "Current Month: November";
} elseif ($monthNum == 12) {
    echo "Current Month: December";
} else {
    echo "Invalid Month Number"; 
}
 
echo "<h2> Using  switch case <h2> \n";
$monthNum = date('n'); 
if ($monthNum == 1) {
    echo "Current Month: January";
} elseif ($monthNum == 2) {
    echo "Current Month: February";
} elseif ($monthNum == 3) {
    echo "Current Month: March";
} elseif ($monthNum == 4) {
    echo "Current Month: April";
} elseif ($monthNum == 5) {
    echo "Current Month: May";
} elseif ($monthNum == 6) {
    echo "Current Month: June";
} elseif ($monthNum == 7) {
    echo "Current Month: July";
} elseif ($monthNum == 8) {
    echo "Current Month: August";
} elseif ($monthNum == 9) {
    echo "Current Month: September";
} elseif ($monthNum == 10) {
    echo "Current Month: October";
} elseif ($monthNum == 11) {
    echo "Current Month: November";
} elseif ($monthNum == 12) {
    echo "Current Month: December";
} else {
    echo "Invalid Month Number"; 
}
?>