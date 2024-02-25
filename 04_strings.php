<?php

// Create simple 
$name = 'Henry';
$string = 'Hello I am '.$name.'. I am 16 years old';
$string2 = "Hello I am $name. I am 16 years old";

echo $string.'<br/>';
echo $string2.'<br/>';
// String concatenation

echo 'Hello'.' World'.'. Welcome to PHP'.'<br/>';

// String functions
$string = "     Hello world     ";

echo strlen($string).'<br/>' . PHP_EOL;
echo trim($string).'<br/>'. PHP_EOL;
echo ltrim($string).'<br/>'. PHP_EOL;
echo rtrim($string).'<br/>'. PHP_EOL;
echo strrev($string).'<br/>'. PHP_EOL;
echo str_word_count($string).'<br/>'. PHP_EOL;
echo strtoupper($string).'<br/>'. PHP_EOL;
echo strtolower($string).'<br/>'. PHP_EOL;
echo ucfirst('hello').'<br/>'. PHP_EOL;
echo lcfirst('HELLO').'<br/>'. PHP_EOL;
echo ucwords('hello world').'<br/>'. PHP_EOL;
echo strpos($string, 'world').'<br/>'. PHP_EOL;
echo stripos($string, 'World').'<br/>'. PHP_EOL;
echo substr($string, 8, 6).'<br/>'. PHP_EOL;
echo str_replace('world', 'PHP', $string).'<br/>'. PHP_EOL;
echo str_ireplace('World', 'PHP', $string).'<br/>'. PHP_EOL;

// Multiline text and line breaks

$longText = "
	Hello my name is Henry
	I am 16,
	I love coding
";

echo $longText.'<br/>';
echo nl2br($longText).'<br/>';

$longText2 = "
	Hello my name is <b>Henry</b>
	I am <b>16</b> years old
	I love <i>coding</i>
";

// Multiline text and reserve html tags

echo $longText2.'<br/>';
echo nl2br($longText2).'<br/>';
echo htmlentities($longText2).'<br/>';
echo nl2br(htmlentities($longText2)).'<br/>';

// Decode html entities

$encodedHtml = '&lt;b&gt;Henry&lt;b&gt';

echo $encodedHtml . '<br />';
echo html_entity_decode($encodedHtml) . '<br />';


// https://www.php.net/manual/en/ref.strings.php