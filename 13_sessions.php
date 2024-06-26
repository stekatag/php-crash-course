<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash-course/extras/dashboard.php');
  } else {
    echo 'Invalid username or password';
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div>
    <label for="username">Username</label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password</label>
    <input type="text" name="password">
  </div>
  <input type="submit" value="submit" name="submit">
</form>