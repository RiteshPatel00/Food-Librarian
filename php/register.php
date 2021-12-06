<?php
    ini_set('display_errors', 1);
  require('../connect.php');
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['username'])) {
        //username not given
        header("Location: ../registration.php?success=false");
    }
    if (!isset($_POST['email'])) {
        //email  not given
        header("Location: ../registration.php?success=false");
    }
    if (!isset($_POST['password'])) {
        //password  not given
        header("Location: ../registration.php?success=false");
    }
    if (strlen($_POST['username']) < 5) {
        //username too short
        header("Location: ../registration.php?success=false");
    }
    if (strlen($_POST['password']) < 8) {
        //password too short
        header("Location: ../registration.php?success=false");
    }
    $username = $_POST['username'];
    $email = $_POST['email'];
    $hashedPassword = hash('sha256', $_POST['password']);
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    try {
        $db->prepare($sql)->execute([$username, $email, $hashedPassword]);
        header("Location: ../registration.php?success=true");
    } catch (Exception $e) {
        header("Location: ../registration.php?success=false");
    }
  }
?>