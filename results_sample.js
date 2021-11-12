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