<?php   
  session_start();    
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
    try {       
        //add review
        $sql = "INSERT INTO reviews (title, name, description, restaurant_id, rating, date) VALUES (?, ?, ?, ?, ?, CURDATE())";
        $db->prepare($sql)->execute([$_POST['title'], $_SESSION['username'], $_POST['description'], $_POST['restaurant_id'], $_POST['rating']]);
        
        //calculate new rating
        $sql = "SELECT COUNT(*) as num_reviews, SUM(rating) as sum_ratings FROM reviews WHERE restaurant_id=?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$_POST['restaurant_id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $newRating = $result['sum_ratings'] / $result['num_reviews'];

        //update restaurant rating
        $sql = "UPDATE restaurants SET rating=? WHERE id=?";
        $db->prepare($sql)->execute([$newRating, $_POST['restaurant_id']]);

        //success redirect
        header("Location: ../restaurant.php?id=" . $_POST['restaurant_id']);
    } catch (Exception $e) {
        header("Location: ../add_review.php?success=false");
    }
  }
?>