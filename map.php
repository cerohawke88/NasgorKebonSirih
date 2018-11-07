<!DOCTYPE html>
<html>
<head>
    <style>
        #map{
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h3>Map</h3>

    <div id="map"></div>

    <?php
        $lat = $_GET['lat'];
        $lng = $_GET['lng'];
    ?>

    <script>
        var latitude = "<?php echo $lat; ?>";
        var longitude = "<?php echo $lng; ?>";

        function initMap(){

            var uluru = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: uluru});

            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>

    <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDjcv4dEOOtHw0srW1XQrUAXAtQJCY2EME&callback=initMap"></script>

</body>
</html>