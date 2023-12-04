<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Example</title>
    <style>
        #googleMap {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>
    <h1>Google Maps Example</h1>
    
    <div id="googleMap"></div>

    <script>
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(-8.0522759, 114.1677159), // Koordinat tengah peta
                zoom: 13, // Level zoom
                mapTypeId: google.maps.MapTypeId.ROADMAP // Tipe peta (ROADMAP, SATELLITE, HYBRID, TERRAIN)
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTaoH68tDGImpq4oMAjrkdIRof1jM8s_w &callback=initialize" async defer></script>
</body>
</html>
