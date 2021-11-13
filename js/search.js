// Using GeoLocation api to get the user's current location
function getLocation() {
  if (navigator.geolocation) {
    // Getting the current position and storing the respected fields by their values
    navigator.geolocation.getCurrentPosition((position) => {
      document.getElementById("latitude").value = position.coords.latitude;
      document.getElementById("longitude").value = position.coords.longitude;
    });
  } 
}
