<?php

$username = $_POST['username'];
$password = $_POST['password'];
// Validate username
if (!preg_match('/^[a-zA-Z0-9._-]+$/', $_POST['username'])) {
  $errors['username'] = 'Username can only contain alphanumeric characters, period, dash or underscore.';
} else if (strlen($_POST['username']) < 2) {
  $errors['username'] = 'Username must contain at least two characters.';
}

// Validate password
if (strlen($_POST['password']) < 8) {
  $errors['password'] = 'Password must not be less than eight characters.';
} else if (!preg_match('/[@#$%]/', $_POST['password'])) {
  $errors['password'] = 'Password must contain at least one of the special characters @, #, $, %.';
}

// If there are no errors, process the form
if (empty($errors)) {
  
}

?>