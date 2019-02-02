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
input[type=text]{
  width:75%;
  padding: 15px;
  border: none;
  border-radius: 4px;
  margin: 5px 0 22px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
}
input:hover{
  opacity: 1;
}
.num:hover{
  opacity: 0.9;
}
#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.num{ 
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  width: auto;
  opacity: 1;
  font-size:1vw;
}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <a href="control.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-list-alt w3-xxlarge"></i>
    <p>Menu</p>
  </a>
  <a href="adminOrder.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fas fa-clipboard-list w3-xxlarge"></i>
    <p>Orders</p>
  </a>
  <a href="Mesages.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-comments w3-xxlarge"></i>
    <p>Mesages</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="control.php" class="w3-bar-item w3-button" style="width:33% !important">Menu</a>
    <a href="Order.php" class="w3-bar-item w3-button" style="width:33% !important">Orders</a>
    <a href="Mesages.php" class="w3-bar-item w3-button" style="width:33% !important">Mesages</a>
  </div>
</div>
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="Menu">
    <div class="w3-content" style="font-size:2.8vw;">
    <h1 class="w3-center" style="font-size:4vw;">THE MESSAGES</h1>
    <div class="w3-center">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    </div><ul id="myUL">
    <div class="w3-container menu w3-padding-32 w3-white">
        <?php
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from buy, user where mail = email") or die (mysqli_error());
          $result=mysqli_query($con,"select * from buy, user where mail = email");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?><li class="w3-col"><hr>
              <h1 style="font-size:3vw;"> <h2 class="w3-center"><?php echo $row['fristName']." ".$row['lastName']; ?></h2><br>
                     <div class="w3-threequarter"><b><?php
                     $array = str_split($row['detailes']);
                     foreach ($array as $char) {
                        if ($char == '-')  echo "<br>";
                         else   echo $char; }?></b>
                  <p class="w3-text-grey"><?php echo $row['notes'];?></p></div><div class="w3-quarter">
                  <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['mobile'];?><br><?php echo $row['email']; ?></span>
                  <span class="w3-right"><a href="deleteorder.php?id=<?php echo $row['id'];?>"><input type="submit" class="num" value="Delete"></a></span></div></h1></li>
          <?php 
        }
          ?>
      </div>
    </ul>
    </div>
</div>
</body>
<script>s
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h2")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</html>
