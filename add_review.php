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
  <!-- Bootstrap row for the user registration -->
  <div class="row justify-content-center mt-5">
    <!-- Creating breakpoints in the columns for different screen sizes with the help of Bootstrap's grid system -->
    <div class="col-11 col-md-7 col-lg-4">
      <div class="card mb-3">
        <!-- Card header -->
        <div class="card-header font-weight-bold">Add a review</div>
        <div class="card-body text-primary">
          <!-- Websites' logo that contains a path to the image of the logo in our images folder -->

          <img class="logo mt-3 mb-4" src="images/logo.png" alt="FoodLibrarian" />
          <?php if($_GET['success'] == 'false') : ?>
            <div class="alert alert-danger" role="alert">
              There was an error while adding your review.
            </div>
          <?php endif; ?>

          <!-- HTML form that has 4 fields, for the user's email, username, password and confirmation of password  -->
          <!-- Setting id's for each input field in order to perform form validation which returns a function on submit -->
         
        <form id="myForm" action="php/add_review.php" method="POST">
          <input type="hidden" name="restaurant_id" value="<?php echo $_GET['id']; ?>"/>
          <div class="form-group">
            <input id="title" name="title" type="text" class="form-control mb-3" placeholder="Enter Title">
          </div>

            <div class="form-group">
                <textarea class="form-control mb-3" rows="3" name="description" placeholder="Description"></textarea>
            </div>

            <div class="form-group">
                <select class="form-select" name="rating" aria-label="Default select example">
                    <option value="0" selected>Select rating out of 5</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
            </div>

              


            <!-- Bootstrap button that submits the user's review information -->
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
  <script src="js/registration.js"></script>
</body>

</html>
