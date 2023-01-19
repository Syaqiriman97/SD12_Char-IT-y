<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("Donation.jpg");
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">READ MORE</a>
    </div>
    <div class="w3-col s3">
      <a href="login.php" class="w3-button w3-block w3-black">LOGIN</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Char-IT-y</span>
  </div>
  <div class="w3-display-middle w3-center">
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Awesome</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CHAR-IT-Y</span></h5>
    <p>Many people nowadays wish to donate to charity but are unsure how or where to do so.</p>
    <p> Char-IT-y app which is a website system that is being developed to assist those who are hungry, homeless, or in need of assistance.</p>
    <img src="Food Donation.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Need something for help? We care for you!</span></h5>
    <p>People who require assistance will seek assistance from the website before being alerted. They do not always locate the slots, and they do not always have the time to travel to the organisational management office. Because of the selection, people find it easy to channel what type of help that they really need, and they can accept whatever assistance . So people who really in need please ask for our help</p>
    <img src="Cloth Donation.jpg" class="w3-image" style="width:100%">
    
   

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Be a donators</span></h5>
    <p>The system allows users choose whether they wish to donate or seek assistance. If they want to donate, they will be directed to a page that contains all the necessary information for the transaction, and they will be able to transfer a specific amount without the assistance of the personnel. They can move the funds on their own and dont need wait for NGO to do it.</p>
    <img src="Money Donation.jpg" class="w3-image" style="width:100%">
   
    
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Char-It-y</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
