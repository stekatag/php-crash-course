<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if (file_exists($file)) {
  // Read file
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  // Write file
  $handle = fopen($file, 'w');
  $contents = 'Stefan' . PHP_EOL . 'Konstantin' . PHP_EOL . 'Ivan';
  fwrite($handle, $contents);
  fclose($handle);
}
