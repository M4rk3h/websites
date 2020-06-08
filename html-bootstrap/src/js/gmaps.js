var map, infoWindow;

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {
          lat: 51.58959,
          lng: -3.3279
        },
        zoom: 15,
        mapTypeId: 'hybrid',
        disableDefaultUI: true

      });
      infoWindow = new google.maps.InfoWindow;

      // Try HTML5 geolocation in browser
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          // Get the location
          infoWindow.setPosition(pos);
          infoWindow.setContent('You are near here.');
          infoWindow.open(map);
          map.setCenter(pos);
        }, function () {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Display error Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }