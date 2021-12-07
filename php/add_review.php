<?php   
  session_start();    
  ini_set('display_errors', 1);
  require('../connect.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['title'])) {
        //title not given
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    if (!isset($_SESSION['username'])) {
        //not logged in
        header("Location: ../sign_in.php");
        die();
    }
    if (!isset($_POST['title'])) {
        //title not given
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    if ($_POST['rating'] > 5 || $_POST['rating'] < 1) {
        //rating not valid
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    if (!isset($_POST['restaurant_id'])) {
        //restaurant id not given
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }

    $sql = "INSERT INTO reviews (title, name, description, restaurant_id, rating, date) VALUES (?, ?, ?, ?, ?, CURDATE())";
    try {
        $db->prepare($sql)->execute([$_POST['title'], $_SESSION['username'], $_POST['description'], $_POST['restaurant_id'], $_POST['rating']]);
        header("Location: ../restaurant.php?id=" . $_POST['restaurant_id']);
    } catch (Exception $e) {
        header("Location: ../add_review.php?success=false");
    }
  }
?>