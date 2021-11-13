// Declaring map variable
let map;

// Creating a function that will be called to initalize our map when the api is called
function initMap() {

  // Creating a map object using the div we created from our HTML
  map = new google.maps.Map(document.getElementById("map"), {
     // Setting the `center` and `zoom` properties of the object to specific values   
    center: { lat: 43.256531, lng: -79.874420 },
    zoom: 12,
  });
  // Creating an object to represent the geoloaction with coordinates using arbitrary latitude and longitude values for first marker
  const papaJohns1 = { lat: 43.251040, lng: -79.815610 };
  // Setting the contents of our marker on the map using HTML 
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
  // Info window object attached to the marker 
  const infowindow = new google.maps.InfoWindow({
    // Setting the infoWindow content property to our previously defined HTML string
    content: contentString,
  });
  
  // Creating our first marker variable to store the API's marker object
  const marker1 = new google.maps.Marker({
    // Setting the marker objects properties to it's desired values
    position: papaJohns1,
    map: map,
    title: "Papa John's Pizza",
  });

  // Adding an event listener that is triggered, when user clicks on the marker
  marker1.addListener("click", () => {
    infowindow.open({
        // When the user clicks on marker, marker's content window opens with the values
      anchor: marker1,
      map,
      shouldFocus: false,
    });
  });
  
  // Creating an object to represent the geoloaction with coordinates using arbitrary latitude and longitude values for second marker
  const papaJohns2 = { lat: 43.230970, lng: -79.850530 };
  // Creating our second marker variable to store the API's marker object
  const marker2 = new google.maps.Marker({
    // Setting the marker objects properties to it's desired values
    position: papaJohns2,
    map: map,
    title: "Papa John's",
  });

  // Adding an event listener that is triggered, when user clicks on the marker
  marker2.addListener("click", () => {
    infowindow.open({
      // When the user clicks on marker, marker's content window opens with the values
      anchor: marker2,
      map,
      shouldFocus: false,
    });
  });
}