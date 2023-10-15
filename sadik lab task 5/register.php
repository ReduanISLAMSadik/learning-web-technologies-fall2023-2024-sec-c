<?php

// Get the form data.
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];

// Validate the form data.
$errors = [];

// Name is required and must be at least 2 characters long.
if (empty($name) || strlen($name) < 2) {
  $errors['name'] = 'Your name is required and must be at least 2 characters long.';
}

// Email is required and must be valid.
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = 'Your email address is required and must be valid.';
}

// Username is required and must be at least 6 characters long.
if (empty($username) || strlen($username) < 6) {
  $errors['username'] = 'Your username is required and must be at least 6 characters long.';
}

// Password is required and must be at least 8 characters long.
if (empty($password) || strlen($password) < 8) {
  $errors['password'] = 'Your password is required and must be at least 8 characters long.';
}

// Confirm password must match password.
if ($password !== $confirm_password) {
  $errors['confirm_password'] = 'Your password and confirm password must match.';
}

// Gender is required.
if (empty($gender)) {
  $errors['gender'] = 'Your gender is required.';
}

// Date of birth is required and must be a valid date.
if (empty($date_of_birth) || !date_parse($date_of_birth)) {
  $errors['date_of_birth'] = 'Your date of birth is required and must be a valid date.';
}

// If there are any errors, display them and stop the form from being submitted.
if (!empty($errors)) {
  echo '<h2>Please fix the following errors:</h2>';
  foreach ($errors as $error) {
    echo '<li>' . $error . '</li>';
  }
  echo '</ul>';
  exit();
}


?>