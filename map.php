<?php include('config.php');?>
<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var centermap = {lat: -6.21462, lng: 106.84513};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: centermap
          <?php  
           mysql_connect('localhost','root','');  
           mysql_select_db('db_kebonsirih');  
           $query="select * from alamat";  
           $datas = mysql_query($query);  
           while ($data=mysql_fetch_array($datas)) {  
             ?>  
             ["<?php echo $data['alamat'];?>", <?php echo $data['lat']; ?> , <?php echo $data['lng']; ?> ,1, "<h4><?php echo $data['alamat'];?></h4>"],  
             <?php  
           }  
         ?> 
        });
        var marker = new google.maps.Marker({
          position: centermap,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-WbkXqtFaZGolPa0Y12CUiMdNRzHwgyk&callback=initMap">
    </script>
  </body>
</html>