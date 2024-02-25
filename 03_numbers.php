<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo $a + $b.'<br/>';  // addition - gives the sum of two operands
echo $a - $b.'<br/>';  // addition - gives the difference of two operands
echo $a * $b.'<br/>';  // addition - gives the product of two operands
echo $a / $b.'<br/>';  // addition - gives the quotient of two operands
echo $a % $b.'<br/>';  // addition - gives the remainder of two operands

// Assignment with math operators
$a += $b;    // adds and assigns the value of b to a
echo $a.'<br/>' ;   // prints the new value of a

$a -= $b;    // subtracts and assigns the value of b from a
echo $a.'<br/>' ;   // prints the new value of a

$a *= $b;         // multiplies and assigns the value of b to a
echo  $a.'<br/>' ;   // prints the new value of a

$a /= $b; //divides and assigns the value of b to a
echo $a.'<br/>'; //print the new value of a

$a %= $b; //divides and assigns the value of b to a
echo $a.'<br/>'; //print the new value of a


// Increment operator
echo '<br/>';
echo $a++.'<br/>';
echo ++$a.'<br/>';

// Decrement operator
echo $a--.'<br/>';
echo --$a.'<br/>';

// Number checking functions
echo  is_numeric($c).'<br/>'; // returns true if $c is numeric, else false
echo  is_int($c).'<br/>'; // returns true if $c is an integer, else false
echo  is_integer($c).'<br/>'; // returns true if $c is an integer, else false
echo  is_float($c).'<br/>'; // returns true if $c is float, else false
echo  is_double($c).'<br/>'; // returns true if $c is float, else false
echo is_numeric(5.38).'<br/>'.is_numeric("5").'<br/>'; // both return true
echo is_numeric("3g.45"); // returns false

// Conversion (Type casting)
$strNumber = '12.34';
$number = intval( $strNumber ); // converts string to integer
$number2 = (float)$strNumber; // converts string to float
$number2 = floatval($strNumber); // converts string to float
echo $number . "<br />". $number2. "<br/>"; //Prints the value of number1 and number2

// Number functions

echo abs(-9)."<br />\n";     // Returns absolute value of -9, i.e., 9
echo ceil(9.3)."<br />\n";    // Rounds up value if necessary, e.g., ceil(9.3) => 10
echo floor(9.3)."<br />\n";   // Rounds down value if necessary, e.g., floor(9.3) => 9
echo round(9.3)."<br />\n";   // Round the value to the nearest integer, e.g., round(9.3) => 9
echo sqrt(16)."<br />\n";      // Calculates square root of 16, i.e., 4
echo pow(3, 2)."<br />\n";    // Calculate 3 raised to the power of 2, i.e., 3^2 = 9
echo log(8, 2)."<br />\n";    // Calculates the logarithm base 2 of 8, i.e., log_2(8) = 3
echo max(3, 7 ,10)."<br />\n"; // Returns the highest value among arguments, here it will be 10
echo min(3, 7 ,10)."<br />\n"; // Returns the lowest value among arguments, here it will be 3

// Formatting numbers

$number  = 123456789.12345;
echo number_format($number, 2, '.', ', '); 

// https://www.php.net/manual/en/ref.math.php
