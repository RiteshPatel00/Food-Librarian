<?php
  // Requiring PHP files
  require('../connect.php');

  // Starting session
  session_start();

  // Running this code if it's a POST request and doing server side validation
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Server side validation on username
    if (!isset($_POST['username'])) {
        //username not given
        header("Location: ../sign_in.php?success=false");
    }
    // Server side validation on password
    if (!isset($_POST['password'])) {
        //password not given
        header("Location: ../sign_in.php?success=false");
    }
    $username = $_POST['username'];
    // Hashing the password as to not store the raw data into the database
    $hashedPassword = hash('sha256', $_POST['password']);
    
    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    // Redirecting user based on id and password to their own page
    try {
      $users = $db->prepare($sql);
      $users->execute([$username, $hashedPassword]);
      $users = $users->fetchAll();
      // No users will redirect to sign in page
      if (sizeof($users) == 0) {
        header("Location: ../sign_in.php?success=false");
      } else {
        // Successful login redirects to the home page where the user can add restaurant
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
      }
    } catch (Exception $e) {
        header("Location: ../sign_in.php?success=false");
    }
  }
?>