<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string) . '<br/>'; // 11

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o') . '<br/>'; // 4

// Reverse a string
echo strrev($string) . '<br/>'; // dlroW olleH

// Convert all characters to uppercase
echo strtoupper($string) . '<br/>'; // HELLO WORLD

// Convert all characters to lowercase
echo strtolower($string) . '<br/>'; // hello world

// String replace
echo str_replace('World', 'PHP', $string) . '<br/>'; // Hello PHP

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5) . '<br/>'; // Hello
echo substr($string, 6) . '<br/>'; // World

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'String starts with Hello' . '<br/>';
}

// Ends with
if (str_ends_with($string, 'World')) {
  echo 'String ends with World' . '<br/>';
}

$string2 = '<h1>Hello World</h1>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'John', 'play');
printf('1+1 = %d', 1 + 1);
