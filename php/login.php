<?php
  require('../connect.php');
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['username'])) {
        //username not given
        header("Location: ../sign_in.php?success=false");
    }
    if (!isset($_POST['password'])) {
        //password not given
        header("Location: ../sign_in.php?success=false");
    }
    $username = $_POST['username'];
    $hashedPassword = hash('sha256', $_POST['password']);
    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    try {
      $users = $db->prepare($sql);
      $users->execute([$username, $hashedPassword]);
      $users = $users->fetchAll();
      if (sizeof($users) == 0) {
        header("Location: ../sign_in.php?success=false");
      } else {
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
      }
    } catch (Exception $e) {
        header("Location: ../sign_in.php?success=false");
    }
  }
?>