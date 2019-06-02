<?php include 'nello-config.php' ?>

<!DOCTYPE html>
<html lang="en">

 <head>

<title><?=$title?></title>
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
  <script src="js/lightbox.js"></script>

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
          <li><a href="nelloindex.php">NELLO</a></li>
            <!-- drop down menu for Gallery pages -->
          <li><a href="gallery.php">GALLERY</a>
            <ul>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="brides.php">Brides</a></li>
                <li><a href="portfolio.php">Clients</a></li>
            </ul>         
          </li>
          <li><a href="profile.php">PROFILE</a></li>
          <!-- drop down menu for Services pages -->
          <li><a href="services.php">SERVICES</a>
            <ul>
                <li><a href="map.php">Map</a></li>
            </ul>         
          </li>
          <li><a href="contact.php">CONTACT</a></li>
          
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        </ul>     
       </nav>
    </header>
<section>
  <h1 class="pageID"><?=$PageID?></h1>
