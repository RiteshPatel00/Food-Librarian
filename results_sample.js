<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

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

  <!-- ================================================================================================================================================ -->
  <!--This section contains Bootstrap cards and the cards have been repeated 8 times to make the layout of this page, each card is identical to the rest-->
  <!-- ================================================================================================================================================ -->

  <!-- Bootstrap row that will contain a list of restaurants that the user can click on -->
  <div class="row">
    <!-- Encapsulaing the results inside their own container in order to style them later on -->
    <div class="col-12 col-md-6 col-lg-4 p-4 results-container">
      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>

      <div class="card mb-4 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <!-- Title of the restaurant -->
            <a href="individual_sample.html">Papa John's Pizza</a><span class="px-1"></span>
            <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
          </h5>
          <p class="card-text">
            <!-- Summary of what the restaurant offers -->
            <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
          </p>
          <hr>
          <!-- Location information -->
          <p>
            1212 Upper Wentworth Street, Hamilton ON<br />
            (905) 524-1441
          </p>
        </div>
      </div>
    </div>

      <!-- ================================================================================================================================================ -->
      <!--End of restaurant cards section-->
      <!-- ================================================================================================================================================ -->

      <!-- Div for the map that will be made interactive on the website using one of our images from our images folder -->
      <div class="col-12 col-md-6 col-lg-8" style="min-height: 50vh">
        <div id="map"></div>
      </div>
    </div>

  <!-- Div for the footer of the website -->
  <div class="footer text-center">
    &copy; 2021 FoodLibrarian, Inc
  </div>

  <script>
    let map;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 43.256531, lng: -79.874420 },
        zoom: 12,
      });
      const papaJohns1 = { lat: 43.251040, lng: -79.815610 };
      // The marker, positioned at Papa Johns 1
      const contentString =
        '<div id="content">' +
        '<div id="siteNotice">' +
        "</div>" +
        '<a href="individual_sample.html"><h2 id="firstHeading" class="firstHeading">Papa John\'s Pizza</h2></a>' +
        '<h4><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i></h4>' +
        '<div id="bodyContent">' +
        '<h5><p>1212 Upper Wentworth Street, Hamilton ON<br />(905) 524-1441</p></h5>' +
        "</div>" +
        "</div>";
      const infowindow = new google.maps.InfoWindow({
        content: contentString,
      });
      
      const marker1 = new google.maps.Marker({
        position: papaJohns1,
        map: map,
        title: "Papa John's Pizza",
      });

      marker1.addListener("click", () => {
        infowindow.open({
          anchor: marker1,
          map,
          shouldFocus: false,
        });
      });
      const papaJohns2 = { lat: 43.230970, lng: -79.850530 };
      // The marker, positioned at Papa Johns 2
      const marker2 = new google.maps.Marker({
        position: papaJohns2,
        map: map,
        title: "Papa John's",
      });

      marker2.addListener("click", () => {
        infowindow.open({
          anchor: marker2,
          map,
          shouldFocus: false,
        });
      });
    }


  </script>
  <!--Accessory script tags in order to make sure that Bootstrap is working properly-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--Google Maps API-->
  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQKZXrOfu7qpxSSC_nxwKypHXJCDpzdzc&callback=initMap">
  </script>
</body>

</html>