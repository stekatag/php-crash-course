<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($i = 0; $i < 5; $i++) {
//   echo "The number is: $i <br>";
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while ($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 11;
// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 10);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ["First post", "Second post", "Third post"];

// for ($i = 0; $i < count($posts); $i++) {
//   echo $posts[$i] . "<br>";
// }

// foreach ($posts as $post) {
//   echo $post . "<br>";
// }

$person =
  [
    'first_name' => 'Stefan',
    'last_name' => 'Gogov',
    'email' => 'stefan@gmail.com'
  ];

foreach ($person as $key => $value) {
  echo "$key: $value <br>";
}
