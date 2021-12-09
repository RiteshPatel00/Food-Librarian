<!DOCTYPE html>

<!-- Micro data type included in the beginning to access library -->
<html lang="en" dir="ltr" itemscope itemtype="http://schema.org/WebPage">

<?php 
// Require PHP file
require('connect.php');
// If restaurant does not have ID then error is given
if (!isset($_GET['id'])) {
    die("Restaurant ID not given");
}
// Selecting the appropriate restaurant based on the id
$sql = "SELECT * FROM restaurants WHERE id=?";
try {
    $restaurants = $db->prepare($sql);
    $restaurants->execute([$_GET['id']]);
    $restaurants = $restaurants->fetchAll();
    if (sizeof($restaurants) == 0) {
        die("Invalid restaurant ID");
    } else {
      $restaurant = $restaurants[0];
      // Rounding the rating the nearest 0.5
      $rating = round($restaurant['rating'] * 2) / 2;

      // Selecting the review for the specific restaurant
      $sql = "SELECT * FROM reviews WHERE restaurant_id=?";
      $reviews = $db->prepare($sql);
      $reviews->execute([$restaurant['id']]);
      $reviews = $reviews->fetchAll();
    }
} catch (Exception $e) {
    die("Invalid restaurant ID");
}
//Importing the navbar
require('navbar.php'); 
?>

<body>

  <!-- Bootstrap container to contain the restaurant, map and user reviews -->
  <div class="container justify-content-center mt-5">
    <div class="card col-12 col-md-10 col-lg-7 bg-light mx-auto">

      <!-- Card for the specific object, with microdata about the geographical location -->
      <div class="card-body" itemscope itemtype="https://schema.org/Place">

        <!-- Picture of the specific restaurant -->
        <!-- Dynamically displaying the image of the restaurant from S3 bucket -->
        <img src="<?php echo $restaurant['image'] ?>" class="w-100 rounded mb-4" alt="Papa John's Hamilton" />
        <h2 class="card-title">
        <!-- Dynamically displaying the name of the restaurant -->
        <span id="name"><?php echo $restaurant['name'] ?></span><span class="px-1"></span>
        <!-- Dynamically displaying the number of stars and half stars based on the rating -->
            <?php for ($i = 0; $i < floor($rating); $i++) : ?>
                <i class="fas fa-star"></i>
            <?php endfor; ?>
            <?php if ($rating !== floor($rating)) : ?>
                <i class="fas fa-star-half"></i>
            <?php endif; ?> 
        </h2>
        <hr>
        <!-- Added microdata on the longitude and latitude of the restaurant specifically -->
        <p itemprop="geo" itemscope itemtype="https://schema.org/GeoCoordinates">
        <!-- Dynamically displaying the address and phonenumber of the restaurant -->
          <span id="address"><?php echo $restaurant['address'] ?></span><br />
          <span id="phone_number"><?php echo $restaurant['phone_number'] ?></span>
          <span class="d-none" id="latitude"><?php echo $restaurant['latitude'] ?></span>
          <span class="d-none" id="longitude"><?php echo $restaurant['longitude'] ?></span>
          <!-- Meta tags for the latitude and longitude -->
          <meta itemprop="latitude" content="<?php echo $restaurant['latitude'] ?>" />
          <meta itemprop="longitude" content="<?php echo $restaurant['longitude'] ?>" />
        </p>
      </div>
    </div>

    <!-- Container for map using it's id from the api, also setting a default height of 50 -->
    <div class="card col-12 col-md-10 col-lg-7 mx-auto mt-4" style="height: 50vh"> 
        <div id="map"></div>
      </div>
    </div>

    <!-- ================================================================================================================================================ -->
    <!--This section contains Bootstrap cards which are dynamically generated using PHP-->
    <!-- ================================================================================================================================================ -->

    <!-- Constructing the specific column and rows using Bootstraps grid system so that it can contain the user reviews and dynamically generating each review using PHP-->
    <div class="col-12 col-md-10 col-lg-9 mx-auto mt-4">
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Looping through each review for the specific restaurant -->
        <?php foreach ($reviews as $review) : ?>
        <div class="col">
          <!-- Microdata added in this div to grab information about the review -->
          <div class="card" itemprop="review" itemscope itemtype="https://schema.org/Review">
            <div class="card-body">
              <h5 class="card-title">
                <!-- Dynamically displaying the title of the review -->
                "<?php echo $review['title']; ?>"<span class="px-1"></span>
                <!-- Dynamically displaying the rating as stars on the review -->
                <?php for ($i = 0; $i < $review['rating']; $i++) : ?>
                    <i class="fas fa-star"></i>
                <?php endfor; ?> 
            </h5>
              <!-- Microdata from the review's name and the review body is grabbed as well as the date published -->
              <p class="card-text text-muted"> <span itemprop="name"><?php echo $review['name']; ?></span>&nbsp; - &nbsp;<span itemprop="datePublished" content="2021-01-08"><?php echo $review['date']; ?></span></p>
              <p class="card-text" itemprop="reviewBody"><?php echo $review['description']; ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="my-4 text-center">
      <!-- If user is logged in then they can add a review -->
        <?php if (isset($_SESSION['username'])) : ?>
            <a href="add_review.php?id=<?php echo $_GET['id']; ?>"><div class="btn btn-lg btn-primary btn-block">Add Review</div></a>
            <!-- If user is not logged in then text is dispalyed telling the user to sign in to leave a review -->
        <?php else : ?>
            <h2 class="text-muted">Please sign in to leave a review.</h2>
        <?php endif; ?>
    </div>



  <!-- Div for the footer of the website -->
  <div class="footer text-center">
    &copy; 2021 FoodLibrarian, Inc
  </div>

  <!-- Adding restaruant in a JSON object so that it can be used by our Javascript code -->
  <script>
    var restaurant = <?php echo json_encode($restaurant); ?>;
  </script>
  
  <!--Accessory script tags in order to make sure that Bootstrap is working properly-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!-- Importing the appropriate javascript for the page -->
  <script src="js/restaurant.js"></script>
  
  <!-- Google Maps API import using script tag -->
  <script async
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5BiEcEFYz2ot5qg678RWkIhtE6etgMs8&callback=initMap">
  </script>
</body>

</html>
