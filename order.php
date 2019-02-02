<?php
    session_start();
    $name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html>
<head>
<title>camera</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/all.js"></script>
<link rel="stylesheet" href="css/stayle.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/all.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
* {
  box-sizing: border-box;
}
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
input:hover,
.btn:hover{
  opacity: 1;
}
#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.btn{
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  font-size:1.4vw;
}
.num{ 
  background-color: white;
  border: none;
  cursor: pointer;
  font-size:2vw;
}
</style>
</head>
<body>
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="Menu">
  <h2 style="font-size:1.5vw;"><h style="font-size:5vw;">Hello <?php echo $name; ?> </h>you can order online now.</h2>
    <div class="w3-content" style="font-size:2.8vw;">
    <h1 class="w3-center" style="font-size:4vw;">THE MENU</h1>
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
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      </div>
      <ul id="myUL">
      <div id="Cameras" class="w3-container menu w3-padding-32 w3-white">
         <?php
          
          $con=mysqli_connect("localhost","root","","camera");
          $q=mysqli_query($con,"select * from goods") or die (mysqli_error());
          $result=mysqli_query($con,"select * from goods");
          $result=mysqli_fetch_all($result,MYSQLI_ASSOC);
          foreach($result as $row){?>
              <?php if($row['catigory'] == "Cameras") {?><li>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?><span class="w3-right"><input type="submit" class="num" value="-" onclick="mun('<?php echo $row['code'];?>')"><span id="<?php echo $row['code'];?>">0</span><input type="submit" class="num" value="+" onclick="pls('<?php echo $row['code'];?>')"></span></p>
              </div><div class="w3-col"><hr></div></li>
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
              <?php if($row['catigory'] == "DVR") {?><li>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?><span class="w3-right"><input type="submit" class="num" value="-" onclick="mun('<?php echo $row['code'];?>')"><span id="<?php echo $row['code'];?>">0</span><input type="submit" class="num" value="+" onclick="pls('<?php echo $row['code'];?>')"></span></p>
              </div><div class="w3-col"><hr></div></li>
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
              <?php if($row['catigory'] == "Access") {?><li>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b> <?php echo $row['name']; ?></b> <span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?><span class="w3-right"><input type="submit" class="num" value="-" onclick="mun('<?php echo $row['code'];?>')"><span id="<?php echo $row['code'];?>">0</span><input type="submit" class="num" value="+" onclick="pls('<?php echo $row['code'];?>')"></span></p>
              </div><div class="w3-col"><hr></div></li>
                     
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
              <?php if($row['catigory'] == "Accessories") {?><li>
              <div class="w3-quarter"><img src="<?php echo $row['img'];?>" class="w3-image"><br>
                  <h1 class="w3-center" style="font-size:1vw;">Code  " <?php echo $row['code'];?> "</h1>
              </div>
              <div class="w3-threequarter">
              <h1 style="font-size:3vw;"><b><?php echo $row['name']; ?></b><span class="w3-right w3-tag w3-dark-grey w3-round"><?php echo $row['price'];?> <i class="fas fa-pound-sign"></i> </span></h1>
                  <p class="w3-text-grey"><?php echo $row['describtions'];?><span class="w3-right"><input type="submit" class="num" value="-" onclick="mun('<?php echo $row['code'];?>')"><span id="<?php echo $row['code'];?>">0</span><input type="submit" class="num" value="+" onclick="pls('<?php echo $row['code'];?>')"></span></p>
                  </div><div class="w3-col"><hr></div></li>
          <?php 
        }  }
          ?>
      </div>
      </ul>
    </div>
    <form class="w3-center" method="post" action="orderDB.php">
    <input type="text" placeholder="Notes" id="note" name="note"><h style="font-size:1.5vw;"> *not required.</h>
    <input type="text" id="o" name="o" value=" " style="display:none;">
    <input type="submit" class="btn" value="Finish" onclick="return ordervalidation(getElementById('note'))">
    </form>
</div>
</body>
<script src = "js/menu.js"></script>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("b")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
function pls(id){
    ++document.getElementById(id).innerHTML;
    document.getElementById("o").value += " "+id;
}
function mun(id){
    if(document.getElementById(id).innerHTML == 0)
        alert("You didn't buy any amount of this to decrease the amount.");
    else{
        --document.getElementById(id).innerHTML;
        var order = document.getElementById("o").value;
        id = " "+id;
        order = order.replace(id,"");
        document.getElementById("o").value = order;
    }
}
function ordervalidation(details){
    if(document.getElementById("o").value == " "){
        alert("No item is selected go shopping first.");
        return false;
    }
    var notes = /^[A-Za-z ]+$/;
    if(details.value.match(notes) || details.value == ""){
        return true;
    }
    else{
        alert("The Notes should be a real words writen in english.");
        return false;
    }
}   
</script>
</html>