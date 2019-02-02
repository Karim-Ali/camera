<!DOCTYPE html>
<html>
<head>
<title>camera</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/all.js"></script>
<script src="js/validation.js"></script>
<link rel="stylesheet" href="css/stayle.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/all.css">
</head>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home  w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#Menu" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-list-alt w3-xxlarge"></i>
    <p>Menu</p>
  </a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-shopping-cart w3-xxlarge"></i>
    <p>Order</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#Menu" class="w3-bar-item w3-button" style="width:25% !important">Menu</a>
    <a href="login.php" class="w3-bar-item w3-button" style="width:25% !important">Order</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Remote.</h1>
    <p>for security cameras and networks.</p>
    <i class="fa fa-camera-retro w3-image" style="font-size:400px;" ></i>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">My Name</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Some text about me. Some text about me. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
      ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
      adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Photography</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Photoshop</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">11+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">50GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    <!-- End Grid/Pricing tables -->
    </div>
    
    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <img src="/w3images/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>Jane Doe saved us from a web disaster.</p><br>
    
    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than Jane Doe.</p>
  <!-- End About Section -->
  </div>
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="Menu">
  <div class="w3-content"  style="font-size:2.8vw;">
    <h1 class="w3-center" style="margin-bottom:64px;font-size:5vw;">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Cameras');" id="myLink">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red" >Camera</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'DVR');">
        <div class="w3-col s2 tablink w3-padding-large w3-hover-red" >DVR</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Access');">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red">Access</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Accessories');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Accessories</div>
      </a>
       
      </div>
      <div id="Cameras" class="w3-container menu w3-padding-32 w3-white">
         <?php
          
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from goods") or die (mysqli_error());
          $result=mysqli_query($con,"select * from goods");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?>
              <?php if($row['catigory'] == "Cameras") {?>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?></p>
              </div><div class="w3-col"><hr></div>
          <?php 
        }  }
          ?>
    </div>
    <div id="DVR" class="w3-container menu w3-padding-32 w3-white">
          <?php
          
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from goods") or die (mysqli_error());
          $result=mysqli_query($con,"select * from goods");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?>
              <?php if($row['catigory'] == "DVR") {?>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?></p>
              </div><div class="w3-col"><hr></div>
          <?php 
        }  }
          ?>
      </div>
      <div id="Access" class="w3-container menu w3-padding-32 w3-white">
          <?php
          
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from goods") or die (mysqli_error());
          $result=mysqli_query($con,"select * from goods");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?>
              <?php if($row['catigory'] == "Access") {?>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?></p>
              </div><div class="w3-col"><hr></div>
                     
          <?php 
        }  }
          ?>
      </div>
    <div id="Accessories" class="w3-container menu w3-padding-32 w3-white">
        <?php
          
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from goods") or die (mysqli_error());
          $result=mysqli_query($con,"select * from goods");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?>
              <?php if($row['catigory'] == "Accessories") {?>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?></p>
              </div><div class="w3-col"><hr></div>
          <?php 
        }  }
          ?>
      </div><br>
    </div>
</div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="Order">
    <h2 class="w3-text-light-grey">Contact Us</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Giza, Egypt</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +02 01124847464</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: <a href = "mailto:alaa.mohamed.ali.mostafa@gmail.com" >alaa.mohamed.ali.mostafa@gmail.com</a></p>
    </div><br>
    <p>Lets get in touch. Send us a message:</p>

    <form action="messageDB.php" name="form" method="post">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit" onclick="return messagevalidation(document.form.Name , document.form.Email , document.form.Subject , document.form.Message)">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>        
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fab fa-facebook w3-hover-opacity"></i>
    <i class="fab fa-instagram w3-hover-opacity"></i>
    <i class="fab fa-snapchat w3-hover-opacity"></i>
    <i class="fab fa-pinterest-p w3-hover-opacity"></i>
    <i class="fab fa-twitter w3-hover-opacity"></i>
    <i class="fab fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="mailto:kareem50329@gmail.com" target="_blank" class="w3-hover-text-green">Karim Ali</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>
</body>
<script src = "js/menu.js"></script>
</html>
