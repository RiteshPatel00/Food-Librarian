// Declaring map variable
let map;

// Creating a function that will be called to initalize our map when the api is called
function initMap() {

  // Creating a map object using the div we created from our HTML
  map = new google.maps.Map(document.getElementById("map"), {
     // Setting the `center` and `zoom` properties of the object to specific values   
    center: results.length > 0 ? 
    { lat: parseFloat(results[0]['latitude']), lng: parseFloat(results[0]['longitude']) } : 
    { lat: 43.256531, lng: -79.874420 },
    zoom: 12,
  });

  // Looping through JSON file to display all results using it's content
  results.forEach(restaurant => {
    const contentString =
      '<div id="content">' +
      '<div id="siteNotice">' +
      "</div>" +
      '<a href="restaurant.php?id=' + restaurant['id'] + '"><h2 id="firstHeading" class="firstHeading">'+ restaurant['name'] +'</h2></a>' +
      '<div id="bodyContent">' +
      '<h5><p>'+ restaurant['address'] +'<br />'+ restaurant['phone_number'] +'</p></h5>' +
      "</div>" +
      "</div>";
    // Info window object attached to the marker 
    restaurant['infoWindow'] = new google.maps.InfoWindow({
      // Setting the infoWindow content property to our previously defined HTML string
      content: contentString,
    });
    
    // Creating our marker variable to store the API's marker object
    restaurant['marker'] = new google.maps.Marker({
      // Setting the marker objects properties to it's desired values
      position: { lat: parseFloat(restaurant['latitude']), lng: parseFloat(restaurant['longitude']) },
      map: map,
      title: restaurant['name'],
    });

    // Adding an event listener that is triggered, when user clicks on the marker
    restaurant['marker'].addListener("click", () => {
      restaurant['infoWindow'].open({
          // When the user clicks on marker, marker's content window opens with the values
        anchor: restaurant['marker'],
        map,
        shouldFocus: false,
      });
    });
  });
}