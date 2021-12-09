<!DOCTYPE html>

<html lang="en" dir="ltr">

<?php 
// Require PHP file
require('connect.php');

// Compbination serach on name and raing
if (!empty($_GET['name']) && $_GET['rating'] > 0) {
    // Selecting the restaurant based on SQL like operater and the rating being greater than or equal to the given rating
    $sql = "SELECT * FROM restaurants WHERE name LIKE CONCAT('%', :restaurant_name, '%') AND rating >= :rating";
    $stmt = $db->prepare($sql);
    $stmt->execute(['restaurant_name' => $_GET['name'], 'rating' => $_GET['rating']]);
// Searching by name only
} elseif (!empty($_GET['name'])) {
    // Selecting the restaurant based on SQL like operater
    $sql = "SELECT * FROM restaurants WHERE name LIKE CONCAT('%', :restaurant_name, '%')";
    $stmt = $db->prepare($sql);
    $stmt->execute(['restaurant_name' => $_GET['name']]);
// Searching by rating only
} elseif ($_GET['rating'] > 0) {
    //search by rating
    $sql = "SELECT * FROM restaurants WHERE rating >= ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_GET['rating']]);
// Searching all restaurants in the database
} else {
    // Selecting all restaurants from the database
    $sql = "SELECT * FROM restaurants";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}

// Storing the results that are generated from the search
$results = $stmt->fetchAll();
// Importing the navbar
require('navbar.php'); 
?>

<body>

  <!-- ================================================================================================================================================ -->
  <!--This section contains Bootstrap cards which are dynamically generated using PHP-->
  <!-- ================================================================================================================================================ -->

  <!-- Bootstrap row that will contain a list of restaurants that the user can click on -->
  <div class="row">
    <!-- Encapsulaing the results inside their own container in order to style them later on -->
    <div class="col-12 col-md-6 col-lg-4 p-4 results-container">
      <!-- If database is empty then display texts telling the user that there are not results -->
      <?php if (sizeof($results) == 0): ?>
        <h3 class="text-center text-muted">No results</h3>
      <?php endif; ?>
      <!-- Looping through the results and displaying them inside of our contianer -->
      <?php foreach ($results as $result) : ?>
        <div class="card mb-4 bg-light">
          <div class="card-body">
            <h5 class="card-title">
              <!-- Dyanmically generating the title of the restaurant -->
              <a href="restaurant.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a><span class="px-1"></span>
              <!-- Rounding the rating to the nearest 0.5 -->
              <?php $rating = round($result['rating'] * 2) / 2; ?>
              <!-- Dyanmically generating the number of stars and half stars for the restaurant rating -->
              <?php for ($i = 0; $i < floor($rating); $i++) : ?>
                  <i class="fas fa-star"></i>
              <?php endfor; ?>
              <?php if ($rating !== floor($rating)) : ?>
                  <i class="fas fa-star-half"></i>
              <?php endif; ?> 
            </h5>
            <hr>
            <!-- Location information -->
            <p>
              <!-- Dyanmically generating the address and phone number of the restaurant -->
              <?php echo $result['address']; ?><br />
              <?php echo $result['phone_number']; ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
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

  <!-- Adding the results to JSON object to be used by our Javascript to appropriately place the restaurants on the map -->
  <script>
    var results = <?php echo json_encode($results); ?>;
  </script>

  <!--Accessory script tags in order to make sure that Bootstrap is working properly-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--Google Maps API-->
  <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5BiEcEFYz2ot5qg678RWkIhtE6etgMs8&callback=initMap">
  </script>

  <!-- Importing the appropriate javascript for the page --> 
  <script src="js/results.js"></script>
</body>

</html>
