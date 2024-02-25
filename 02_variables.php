<?php

// What is a variable

/**
 * A variable is a container that stores values. Variables are created by assigning a value to them
 */

// Variable types

/**
 * Integer
 * String
 * Float / Double
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

// Declare variables
$name = 'zura';
$age = 28;
$isMale = true;
$height = 1.25;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>' . $age . '<br>'. $isMale .'<br>' . $height .'<br>'.$salary.'<br>';

// Print types of the variables
echo gettype($name) . '<br>'; //string
echo gettype($age) . '<br>'; //integer
echo gettype($isMale) . '<br>'; //boolean
echo gettype($height) . '<br>'; //float
echo gettype($salary) . '<br>'; //null
echo '<br>';
// Print the whole variable

var_dump($name, $age, $isMale, $height, $salary);
echo '<br/><br/>';

// Change the value of the variable
$name = true;

// Print type of the variable
echo gettype($name) . "<br>"; //boolean
echo '<br/><br/>';

// Variable checking functions
is_string($name); //true
is_int($age);	
is_bool($isMale);
is_float($height);

// Check if variable is defined
isset($name); //true
isset($undefinedVar); //false

// Empty check

empty($name); //false

// Constants

// Using PHP built-in constants
define('PI', 3.14); // It can be used anywhere in your script
echo PI.'<br/><br/>';

// User defined constant
define('SITE_NAME','MySite');

// Using PHP built-in constants

echo SORT_ASC.'<br/>'; //4
echo PHP_INT_MAX;