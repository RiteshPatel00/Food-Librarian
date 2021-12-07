<?php
  require('connect.php');
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<?php require('navbar.php'); ?>

<body>
  <!-- Bootstrap row for the user registration -->
  <div class="row justify-content-center mt-5">
    <!-- Creating breakpoints in the columns for different screen sizes with the help of Bootstrap's grid system -->
    <div class="col-11 col-md-7 col-lg-4">
      <div class="card mb-3">
        <!-- Card header -->
        <div class="card-header font-weight-bold">Create an account</div>
        <div class="card-body text-primary">
          <!-- Websites' logo that contains a path to the image of the logo in our images folder -->
          <img class="logo mt-3 mb-4" src="images/logo.png" alt="FoodLibrarian" />

          <!-- HTML form that has 4 fields, for the user's email, username, password and confirmation of password  -->
          <!-- Setting id's for each input field in order to perform form validation which returns a function on submit -->
          <?php if($_GET['success'] == 'true') : ?>
            <div class="alert alert-success" role="alert">
              Account successfully created!
            </div>
          <?php elseif($_GET['success'] == 'false') : ?>
            <div class="alert alert-danger" role="alert">
              There was an error creating your account.
            </div>
          <?php endif; ?>
          <form id="myForm" onsubmit="return formValidation(event)" method="POST" action="php/register.php">
            <div class="form-group">
              <input id="userName" name="username" type="text" class="form-control mb-3" placeholder="Enter username">
            </div>
            <div class="form-group">
              <input id="email" name="email" type="email" class="form-control mb-3" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input id="password" name="password" type="password" class="form-control mb-3" placeholder="Password">
            </div>
            <div class="form-group">
              <input id="confirmPassword" type="password" class="form-control" placeholder="Confirm Password">
            </div>

            <!-- Bootstrap button that submits the user's registration information -->
            <!-- Adding button-animation to make fading animation on button -->
            <button type="submit" class="btn btn-primary w-100 mt-3 button-animation">Register</button>
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
