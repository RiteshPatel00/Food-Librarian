<!DOCTYPE html>

<!-- Micro data type included in the beginning to access library -->
<html lang="en" dir="ltr" itemscope itemtype="http://schema.org/WebPage">

<head>

  <!-- Links to Bootstrap's cs style sheet, js script and a link to our own external style sheet -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5982edd98c.js" crossorigin="anonymous"></script>
  <link href="style.css" rel="stylesheet" />

  <!-- Meta tag for charset -->
  <meta charset="utf-8">

  <!-- Meta tags for Facebook’s Open Graph protocol-->
  <meta property="og:title" content="FoodLibrarian" />
  <meta property="og:type" content="video.movie" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="images/logo.png" />
  <meta property="og:description" content="A treasure trove of restaurants" />

  <!-- Meta tags for Twitter Cards-->
  <meta name="twitter:card" content="A treasure trove of restaurants" />
  <meta name="twitter:site" content="@FoodLibrarian" />
  <meta name="twitter:creator" content="@FoodLibrarian" />

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

  <!-- Bootstrap container to contain the restaurant, map and user reviews -->
  <div class="container justify-content-center mt-5">
    <div class="card col-12 col-md-10 col-lg-7 bg-light mx-auto">

      <!-- Card for the specific object, with microdata about the geographical location -->
      <div class="card-body" itemscope itemtype="https://schema.org/Place">

        <!-- Picture of the specific restaurant -->
        <img src="images/papa-johns.webp" class="w-100 rounded mb-4" alt="Papa John's Hamilton" />
        <h2 class="card-title">
          Papa John's Pizza<span class="px-1"></span>
          <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half"></i>
        </h2>
        <p class="card-text">
          <i>Take-out/delivery chain offering classic & specialty pizzas, wings & breadsticks, plus desserts.</i>
        </p>
        <hr>
        <!-- Added microdata on the longitude and latitude of the restaurant specifically -->
        <p itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
          1212 Upper Wentworth Street, Hamilton ON<br />
          (905) 524-1441
          <!-- Meta tags for the latitude and longitude -->
          <meta itemprop="latitude" content="40.75" />
          <meta itemprop="longitude" content="73.98" />
        </p>
      </div>
    </div>

    <!-- Image of map that will be made interactive -->
    <div class="card col-12 col-md-10 col-lg-7 mx-auto mt-4" style="height: 50vh"> 
        <div id="map"></div>
      </div>
      
      <!-- <img src="images/papa-johns-map2.png" class="w-100 rounded" alt="Papa John's Location" /> -->
    </div>

    <!-- ================================================================================================================================================ -->
    <!--This section contains Bootstrap cards for user reviews and the cards have been repeated 4 times to make the layout of this page, each card is identical in structure, not content, to the rest-->
    <!-- ================================================================================================================================================ -->

    <!-- Constructing the specific column and rows using Bootstraps grid system so that it can contain the user reviews -->
    <div class="col-12 col-md-10 col-lg-9 mx-auto mt-4">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <!-- Microdata added in this div to grab information about the review -->
          <div class="card" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card-body">
              <h5 class="card-title">
                "Very Good"<span class="px-1"></span>
                <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </h5>
              <!-- Microdata from the review's name and the review body is grabbed as well as the date published -->
              <p class="card-text text-muted"> <span itemprop="name">John Appleseed</span>-<span itemprop="datePublished" content="2021-01-08">January 8, 2021</span></p>
              <p class="card-text" itemprop="reviewBody">Pizza was cooked perfectly. Toppings are high quality and fresh. Delivery was fast. I recommend the fiery buffalo chicken pizza and the philly cheese steak. My favorite pizza in town!</p>
            </div>
          </div>
        </div>

        <div class="col">
          <!-- Microdata added in this div to grab information about the review -->
          <div class="card" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card-body">
              <h5 class="card-title">
                "Best pizza ever!"<span class="px-1"></span>
                <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </h5>
              <!-- Microdata from the review's name and the review body is grabbed as well as the date published -->
              <p class="card-text text-muted"><span itemprop="name">Jack Hellewell</span>-<span itemprop="datePublished" content="2021-01-01">January 1, 2021</span></p>
              <p class="card-text" itemprop="reviewBody">I am impressed! The delivery guy placed my food in front of my door on the floor above an extra empty pizza box and plastic bag. No other food delivery place does this</p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card-body">
              <h5 class="card-title">
                "Needs improvement"<span class="px-1"></span>
                <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </h5>
              <!-- Microdata from the review's name and the review body is grabbed as well as the date published -->
              <p class="card-text text-muted"><span itemprop="name">Jimmy Appleseed</span>-<span itemprop="datePublished" content="2021-01-10">January 10, 2021</span></p>
              <p class="card-text" itemprop="reviewBody">The pizza is rarely consistent quality. Don’t bother to pay for extra or double cheese they will just put the same amount. If you can see tomato sauce through the cheese, it isn’t extra cheese.
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card-body">
              <h5 class="card-title">
                "Disgusting"<span class="px-1"></span>
                <!-- Link from FontAwesome that is included in the head of our HTML doc that generates an image of a star and/or half a star to indicate a rating on the restaurant -->
                <i class="fas fa-star"></i>
              </h5>
              <!-- Microdata from the review's name and the review body is grabbed as well as the date published -->
              <p class="card-text text-muted"><span itemprop="name">John Doe</span>-<span itemprop="datePublished" content="2021-01-22">January 22, 2021</span></p>
              <p class="card-text" itemprop="reviewBody">Ordered the bbq chicken bacon pizza with green peppers. The whole pizza maybe had one strip of bacon on it. Barely any chicken and only 2 slices had green peppers.</p>
            </div>
          </div>
        </div>
        <!-- ================================================================================================================================================ -->
        <!--End of review cards section-->
        <!-- ================================================================================================================================================ -->
      </div>
    </div>
  </div>


  <!-- Div for the footer of the website -->
  <div class="footer text-center">
    &copy; 2021 FoodLibrarian, Inc
  </div>

  <script>
    let map;
    function initMap() {
      const papaJohns = { lat: 43.251040, lng: -79.815610 };
      map = new google.maps.Map(document.getElementById("map"), {
        center: papaJohns,
        zoom: 11,
      });
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
        position: papaJohns,
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