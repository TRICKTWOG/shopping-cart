<?php
    session_start();
    if( !isset($_SESSION['shopping_cart']) ){
        
    }
?>
<!DOCTYPE html>
<html>
<title>buying</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('/w3images/profile_girl.jpg');
    min-height: 100%;
}
</style>
<body style="padding: 30px">

   

    <p>insert your data :</p>
    <form onsubmit="return validation()" method="post" action="register_insert.php" target=_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Frist Name" required  name="firstName"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Last Name" required  name="lastName"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required  name="email" ></p>
      <input class="w3-input w3-padding-16 w3-border" type="text" name="age"  placeholder="Your Age" />
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="mobile" required name="mobile"></p>
      <p>
        <button value="Register" class="w3-button w3-light-grey w3-padding-large" type="submit" >
          <i class="fa fa-paper-plane"></i> SEND 
        </button>
      </p>
    </form>
   
  <!-- End Contact Section -->
  </div>  
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">pharma</a></p>
  <!-- End footer -->
  </footer>
  
<!-- END PAGE CONTENT -->
</div>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Open and close sidebar
function openNav() {
    document.getElementById("mySidebar").style.width = "60%";
    document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<script src="script.js"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
