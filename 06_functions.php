<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

// $y = 12;

// function registerUser() {
//   global $y;
//   echo $y;
//   echo "User Registered Successfully!";
// }

// registerUser();

function registerUser($email) {
  echo $email . ' Registered Successfully!';
}

// registerUser('email');

function sum($num1 = 4, $num2 = 5) {
  return $num1 + $num2;
}

// echo sum();

$subtract = function ($num1, $num2) {
  return $num1 - $num2;
};

// echo $subtract(10, 5);

$multiply = fn ($num1, $num2) => $num1 * $num2;

echo $multiply(10, 5);
