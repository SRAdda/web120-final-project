

<!DOCTYPE html>
<html lang="en">

 <head>

<title>Nello Home</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/nello.css" />
  <link rel="stylesheet" href="css/nav.css"  />
   <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <!-- MenuMaker Plugin -->
  <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
  <link rel="stylesheet" href="css/lightbox.css" />
  <script src="js/script.js"></script>

   </head>
    <body class="background">
    <div class="wrapper">
     <!-- A wrapper can be used to contain the web page -->
       <header> 
        <div id="wrapperHeader">
            <div id="header">
              <a href="template.php"><img src="images/nellologo.jpg" alt="logo" /></a>
            </div>
        </div>    
       <nav id="cssmenu" class="align-center">
        <ul>
          <li><a href="../index.php">WEB120</a></li>
          <li><a href="template.php">NELLO</a></li>    
            <!-- drop down menu for Gallery pages -->
          <li><a href="gallery.php">GALLERY</a>
            <ul>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="brides.php">Brides</a></li>
                <li><a href="clients.php">Clients</a></li>
            </ul>         
          </li>
          <li><a href="profile.php">PROFILE</a></li>
          <!-- drop down menu for Services pages -->
          <li><a href="services.php">SERVICES</a>
            <ul>
                <li><a href="map.php">Map</a></li>
            </ul>         
          </li>
          <li><a href="contactme.php">CONTACT</a></li>
        </ul>     
       </nav>
    </header>
    <section>
   

  <h2>Template Page</h2> 

  <p>Hi, Sara and Bill! Here is my template page for my final project. It is responsive, yes, 
  but the actual project will be much more interesting. I enjoy your classes very much and learn a great deal.</p>
  <p>Stay tuned...</p>
</section>      
<!-- END LEFT COLUMN -->
        
<!-- START RIGHT COLUMN -->
 <aside>
     <h3>Favorite Links about Coding</h3>
     <ul>
         <li><a href="https://fontawesome.com/icons?d=gallery" target="_blank">fontawesome.com</a></li>
         <li><a href="https://www.w3schools.com" target="_blank">W3 Schools</a></li>
         <li><a href="https://www.quackit.com/css/codes/" target="_blank">Quackit.com</a></li>
     </ul>
 </aside>
<!-- END RIGHT COLUMN -->
<footer class="center">
  <p><small>&copy;<?=date('Y')?> by <a href="contactme.php" 
  target="_blank">Sally Ross</a>, All Rights Reserved ~ 
  <a href="http://validator.w3.org/check/referer" target="_blank">  Valid HTML</a>

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</small></p>
</footer>

<!-- END Footer --> 
<script src="js/lightbox.js"></script> 
    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>

<!-- END WRAPPER -->
</div>   
</body>

</html>