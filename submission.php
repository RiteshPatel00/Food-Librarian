<!DOCTYPE html>

<html lang="en" dir="ltr">

<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: /sign_in.php');
}
require('navbar.php'); 
?>

<body>

  <!-- Bootstrap row for user submission -->
  <div class="row justify-content-center mt-5">
    <div class="col-11 col-md-7 col-lg-4">
      <div class="card mb-3">
        <!-- Header for the Bootstrap card  -->
        <div class="card-header font-weight-bold">Add a new restaurant</div>
        <div class="card-body text-primary">
          <!-- Websites' logo that contains a path to the image of the logo in our images folder -->
          <img class="logo mt-3 mb-4" src="images/logo.png" alt="FoodLibrarian" />
          <?php if($_GET['success'] == 'false') : ?>
            <div class="alert alert-danger" role="alert">
              There was an error while adding the restaurant.
            </div>
          <?php endif; ?>
          <!-- HTML form that has 5 fields, for the restaurant's name, phone number, address and it's longitude and latitude values -->
          <!-- Setting `required` attribute to form groups in order to perform form validation using pure HTML -->
          <form action="php/add_restaurant.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" name="name" class="form-control mb-3" placeholder="Restaurant name" required>
            </div>
            <div class="form-group">
              <input type="tel" name="phone_number" class="form-control mb-3" placeholder="Restaurant phone number" pattern="[0-9]{1,50}" required>
            </div>
            <div class="form-group">
              <input type="text" name="address" class="form-control mb-3" placeholder="Restaurant address" required>
            </div>
            <div class="input-group">
              <input type="number" name="latitude" step="any" class="form-control" placeholder="Latitude" id="latitude" required>
              <input type="number" name="longitude" step="any" class="form-control" placeholder="Longitude" id="longitude" required>
              <!-- Adding button-animation to make fading animation on button -->
              <button onClick="getLocation()" class="btn btn-primary p-3 location-button button-animation" type="button"><i class="fas fa-map-marker-alt"></i></button>
            </div>
            <!-- Button to upload an image of the restaurant using an input tag with the type being a file -->
            <div class="form-group mt-3">
              <b class="text-dark">Image of restaurant: </b><input type="file" name="image" class="px-3"/>
            </div>
            <!-- Bootstrap button that submits the user's restaurant information -->
            <!-- Adding button-animation to make fading animation on button -->
            <button type="submit" class="btn btn-primary w-100 mt-3 button-animation">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Div for the footer of the website -->
  <div class="footer text-center">
    &copy; 2021 FoodLibrarian, Inc
  </div>

  <!--Accessory script tags in order to make sure that Bootstrap is working properly-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!-- Importing the appropriate javascript for the page --> 
  <script src="js/submission.js"></script>
</body>

</html>
