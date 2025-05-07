<?php
//Number Classifier
$number = -4;

if ($number >= 0) {
    if ($number == 0) {
        echo "$number is zero.\n";
    } else {
        echo "$number is positive.\n";
    }
} else {
    echo "$number is negative.\n";
}

//Even or Odd Number Checker
if ($number % 2 == 0) {
    echo "$number is even.\n";
} else {
    echo "$number is odd.\n";
}


//Temperature Converter
$celsius = 25;
$fahrenheit = ($celsius * 9/5) + 32;
$celsius = ($fahrenheit - 32) * 5/9;
echo "$celsius degrees Celsius.\n";
echo "$fahrenheit degrees Fahrenheit.\n";



//Basic Auth System
//like database variable
$username = "admin";
$password = "1234";

//like user input variable
$input_username = "admin";
$input_password = "1234";


if ($input_username == $username && $input_password == $password) {
    echo "Login Successful.\n";
} else {
    echo "Invalid username or password.\n";
}



//Simple Electricity Bill Calculator
$units = 150; // Number of units consumed

if ($units <= 50) {
    $bill = $units * 3.50; // Rate for first 50 units
} elseif ($units <= 100) {
    $bill = (50 * 3.50) + (($units - 50) * 4.00); // Rate for 100 units
} elseif ($units <= 200) {
    $bill = (50 * 3.50) + (50 * 4.00) + (($units - 100) * 5.20); // Rate for next 100 units
} else {
    $bill = (50 * 3.50) + (50 * 4.00) + (100 * 5.20) + (($units - 200) * 6.50); // Rate for above 200 units
}
echo "Electricity Bill: $bill Taka\n";