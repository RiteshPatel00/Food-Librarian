<!DOCTYPE html>


<html lang="en" dir="ltr">

<head>
  <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
          document.getElementById("latitude").value = position.coords.latitude;
          document.getElementById("longitude").value = position.coords.longitude;
        });
      } 
    }
  </script>
  <!-- Links to Bootstrap's cs style sheet, js script and a link to our own external style sheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5982edd98c.js" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet" />

  <!-- Meta tag for charset -->
  <meta charset="utf-8">




  <!-- Meta tags for IOS and Android devices so that the website scales and saving the website to a mobile's homescreen is done intelligently-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="application-name" content="FoodLibrarian">
  <meta name="mobile-web-app-capable" content="yes">

  <title>FoodLibrarian</title>
</head>

<body>

  <!--Navigation bar used from Bootstrap that has 4 links-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <!--Contains the branding of the website on the navigation bar-->
    <a class="navbar-brand" href="search.html">Food Librarian</a>
    <!--Navigation toggler allows the links on the nav bar to collapse, implemented as a button when the screen size reaches a certain dimension-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--Collapsing the navagation bar is implemented with unordered list tag and list item tags-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="submission.html">Add Restaurant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.html">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration.html">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>


  <!--Creating a Bootstrap row that will be for the logo-->
  <div class="row justify-content-center mt-5">
    <!-- Div for the websites logo that contains a path to the image of the logo in our images folder -->
    <div class="text-center mt-5 mb-3 px-4 col-11 col-md-8 col-lg-6 "><img class="logo" src="images/logo.png" alt="FoodLibrarian"></div>
  </div>

  <!--Creating a Bootstrap row that will be for the search bar-->
  <div class="row justify-content-center mt-5">
    <div class="col-11 col-md-7 col-lg-4 text-center">
      <form action="results_sample.html" class="d-block">
        <div class="input-group mb-3">
            <!--Bootstrap input type that takes in a restaurant name-->
            <input type="text" class="form-control p-3 bg-light" placeholder="Restaurant Name">
            <!-- Bootstrap button for searching the input -->
            <div class="input-group-append">
                <button class="btn btn-warning p-3" type="submit">Search</button>
            </div>
            <div class="input-group-append">
              <button onClick="getLocation()" class="btn btn-primary p-3 location-button" type="button"><i class="fas fa-map-marker-alt"></i></button>
            </div>
            <input type="hidden" id="latitude" name="latitude"/>
            <input type="hidden" id="longitude" name="longitude"/>
          </div>
      </form>
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
</body>

</html>
