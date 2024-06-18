<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 2, 3, 4, 5];
$fruits = array('Apple', 'Banana', 'Orange', 'Mango');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[1];

// Associative Arrays
$colors = [
  'red' => 'Apple',
  'yellow' => 'Banana',
  'orange' => 'Orange',
  'green' => 'Mango'
];

// echo $colors['red'];

$hex = [
  'red' => '#ff0000',
  'yellow' => '#ffff00',
  'orange' => '#ffa500',
  'green' => '#008000'
];

// echo $hex['red'];

$person = [
  'first_name' => 'Stefan',
  'last_name' => 'Gogov',
  'email' => 'stefan@gmail.com'
];

// echo $person['first_name'];

$people = [
  [
    'first_name' => 'Stefan',
    'last_name' => 'Gogov',
    'email' => 'stefan@gmail.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com'
  ],
  [
    'first_name' => 'Martin',
    'last_name' => 'Doe',
    'email' => 'martin@gmail.com'
  ]
];

// echo $people[1]['email'];
var_dump(json_encode($people));
