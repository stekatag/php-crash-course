<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

// Get length of an array
// echo count($fruits); // 6

// Search array for a value
// var_dump(in_array('apple', $fruits)); // true

// Add to array
$fruits[] = 'pineapple'; // Push to the end of array
array_push($fruits, 'grapes', 'lemon');
array_unshift($fruits, 'watermelon'); // Push to the beginning of array

// Remove from array
array_pop($fruits); // Remove last element
array_shift($fruits); // Remove first element
// unset($fruits[1]); // Remove specific element

// Split into 2 chunks
// $chunked_array = array_chunk($fruits, 3);

// print_r($chunked_array);

// print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);
// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);
// print_r($numbers);

$newNumbers = array_map(function ($num) {
  return "Number $num";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn ($num) => $num <= 10);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn ($carry, $num) => $carry + $num);
echo $sum;
