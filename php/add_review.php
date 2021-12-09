<?php   
  //Starting session
  session_start();
  
  // Requiring PHP files
  require('../connect.php');

  // Running this code if we have a POST request and doing server side validation, if validation fails, then submitting the review also fails
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Server side validation on title
    if (!isset($_POST['title'])) {
        //title not given
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    // Server side validation to check to see if user is logged in
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
    // Server side validation on rating to make sure it's valid between 1 and 5 
    if ($_POST['rating'] > 5 || $_POST['rating'] < 1) {
        //rating not valid
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    // Server side validation on the id of the restaurants
    if (!isset($_POST['restaurant_id'])) {
        //restaurant id not given
        header("Location: ../add_review.php?success=false&id=" . $_POST['restaurant_id']);
        die();
    }
    try {       
        // Adding the review to the database with correct fields 
        $sql = "INSERT INTO reviews (title, name, description, restaurant_id, rating, date) VALUES (?, ?, ?, ?, ?, CURDATE())";
        $db->prepare($sql)->execute([$_POST['title'], $_SESSION['username'], $_POST['description'], $_POST['restaurant_id'], $_POST['rating']]);
        
        // Calculating the rating based on all of the reviews and assigning an overall rating to the restaurant card
        $sql = "SELECT COUNT(*) as num_reviews, SUM(rating) as sum_ratings FROM reviews WHERE restaurant_id=?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$_POST['restaurant_id']]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $newRating = $result['sum_ratings'] / $result['num_reviews'];

        // Updating the rating
        $sql = "UPDATE restaurants SET rating=? WHERE id=?";
        $db->prepare($sql)->execute([$newRating, $_POST['restaurant_id']]);

        // Redirecting the user after the rating is entered to the individual restaurant
        header("Location: ../restaurant.php?id=" . $_POST['restaurant_id']);
    } catch (Exception $e) {
        header("Location: ../add_review.php?success=false");
    }
  }
?>