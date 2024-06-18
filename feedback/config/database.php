<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'stefan');
define('DB_PASS', '123');
define('DB_NAME', 'php_dev');

// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
