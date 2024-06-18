<?php
/* -------- Output & Comments ------- */

/*
 * A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
 */

// echo - Outputs strings, numbers, html, etc
// echo 123, 'Hello', 10.5;

// print - Works like echo, but can only take in a single argument
// print 123;

// print_r() - Print single values and arrays
// print_r([1, 2, 3]);

// var_dump() - Returns more info like data type and length
// var_dump(true);

// var_export() - Similar to var_dump, but outputs a string representation of the variable
// var_export('Hello World!');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= 'Post one' ?></h1>
</body>

</html>