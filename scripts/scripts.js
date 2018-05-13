function loadJSON(callback) {   

  var xobj = new XMLHttpRequest();
      xobj.overrideMimeType("application/json");
  xobj.open('GET', 'my_data.json', true); // Replace 'my_data' with the path to your file
  xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
          // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
          callback(xobj.responseText);
        }
  };
  xobj.send(null);  
}


function initMap() {
  var uluru = {lat: 43.6269323, lng: -79.6280822};
  var mapStyle = 
  [{"featureType":"all","elementType":"labels","stylers":[{"gamma":0.26},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"on"},{"lightness":-50}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"lightness":20}]},{"featureType":"administrative.province","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"administrative.neighborhood","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"color":"#e8efcf"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#d1e5d1"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.medical","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.place_of_worship","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"poi.sports_complex","elementType":"geometry.fill","stylers":[{"color":"#d1e5d1"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#ffffff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"lightness":40},{"hue":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#dcb4b4"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#dcb4b4"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"lightness":15}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#bbe0ed"}]},{ featureType: "poi", elementType: "labels", stylers: [{visibility: "off"}]} ];
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: uluru,
    styles: mapStyle
  });

  var icon = {
    url: '../assets/map_marker.png',
    scaledSize: new google.maps.Size(35,35), // scaled size
  }
  
  var marker = new google.maps.Marker({
    position: uluru,
    map: map,  
    icon: icon
  });

  var infoContent = 'ICAN Immigraton';

  var infowindow = new google.maps.InfoWindow({
    content: infoContent
  });

  marker.addListener("click", function() {
      infowindow.open(map, marker);
  });

  infowindow.open(map, marker);
   
}

function checkIfHomePage() {
  var url = window.location.href;

  if (url.indexOf("/index.php") != -1) {
    var homeContainer = document.getElementsByClassName("main")[0];
    homeContainer.classList.add("home");
    homeContainer.classList.remove("main");

    var footer = document.getElementsByTagName("footer");

  }
}

window.addEventListener("load", () => {
  checkIfHomePage();
  });


// map style
