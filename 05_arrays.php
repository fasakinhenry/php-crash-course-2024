<?php

// What is array

/**
 * Array is a variable that contains series or list of 
 * Array can contain different types of value and is dynamic in nature
 */

// Create array
$fruits = ["apple", "banana", "orange"]; // An array with three elements

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index

echo $fruits[1].'<br>';

// Set element by 

$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); //true

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '<pre/>';

// Print the length of the array

echo count( $fruits ).'<br>'; //4

// Add element at the end of the array
array_push($fruits, 45);
echo '<pre';
var_dump( $fruits );
echo '</pre>';

// Remove element from the end of the array

echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, "Apple");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(',',$string));
echo '</pre>';

// Combine array elements into 
echo implode(" , ", $fruits) . "<br>";

// Check if element exist in the array
echo '<pre>';
var_dump(in_array('Mango', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Peach', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables=array("Carrot","Tomato");
echo '<pre>';
var_dump(array_merge($fruits,$vegetables));
echo '</pre>';

//Merging using spread operator
$newFruitList=[...$fruits,"Grapes"];
echo '<pre>';
var_dump($newFruitList);
echo '</pre> ';

// Sorting of array (Reverse order also)
/* 
1. SORT_ASC - for ascending order
2. SORT_DESC - for descending order
3. SORT_REGULAR -  for mixed type sorting (default)
4. SORT_NUMERIC - for numeric data
5. SORT_STRING - for string data
*/

//print array before the sort
echo '<pre>';
var_dump($fruits);
echo '</pre>';
sort($fruits);
echo 'sorted';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Reverse sorting of Arrays
echo "Reversed sorted";
rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

/**
 * Associative arrays are Arrays that use strings as index values rather than integer keys. The value associated with an index is called key value pair.
 * An associative array is an array that uses strings as index. These indices are unique and can be of any value, unlike numerical arrays.
 */

// Create an associative array
$person = [
	'name' => 'Henry',
	'surname' => 'Fasakin',
	'age' => 16,
	'hobbies' => ['Tennis', 'Video Games']
];

echo '<pre>';
// Test out print_r :)
print_r($person);
echo '</pre>';

// Get element by key

echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'Henqsoft';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if  (!isset($person['email'])) {
    $person['email'] = 'Unknown'; // This will set the value to NULL if it is not already defined
} else {
    echo "The email field exists!";
}

//The shorthand version in new versions

$person['address'] ??= 'Unknown';

// Check if array has specific key
echo '<pre>';
var_dump(isset( $person['address']));
echo '</pre>';

// Print the keys of the 
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort( $person );
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
	['title' => 'Todo title 1', 'completed' => true],
	['title' => 'Todo title 2', 'completed' => true]
];

echo '<pre>';
var_dump($todos);
echo '</pre>';