<?php
  // Requiring PHP files
  require('../connect.php');
  //Starting session
  session_start();

  // Running this code if it's a POST request and doing server side validation
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Server side validation on username
    if (!isset($_POST['username'])) {
        //username not given
        header("Location: ../registration.php?success=false");
    }
    // Server side validation on email
    if (!isset($_POST['email'])) {
        //email  not given
        header("Location: ../registration.php?success=false");
    }
    // Server side validation on password
    if (!isset($_POST['password'])) {
        //password  not given
        header("Location: ../registration.php?success=false");
    }
    // Server side validation on length of username
    if (strlen($_POST['username']) < 5) {
        //username too short
        header("Location: ../registration.php?success=false");
    }
    // Server side validation on length of password
    if (strlen($_POST['password']) < 8) {
        //password too short
        header("Location: ../registration.php?success=false");
    }
    $username = $_POST['username'];
    $email = $_POST['email'];
    // Hashin the password 
    $hashedPassword = hash('sha256', $_POST['password']);

    // Inserting the user into the database with their username, email and hashed password
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    try {
        $db->prepare($sql)->execute([$username, $email, $hashedPassword]);
        header("Location: ../registration.php?success=true");
    } catch (Exception $e) {
        header("Location: ../registration.php?success=false");
    }
  }
?>