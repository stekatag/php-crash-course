<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Set a cookie
// setcookie('name', 'Stefan', time() + 86400 * 30);

if (isset($_COOKIE['name'])) {
  echo 'Cookie "name" is set!<br>';
  echo 'Value: ' . $_COOKIE['name'];
} else {
  echo 'Cookie "name" is not set!';
}

// To delete a cookie, set the expiration date to one hour ago
// setcookie('name', 'Stefan', time() - 3600);
