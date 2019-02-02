<!DOCTYPE html>
<html>
<head>
<title>Adminstrator</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/all.js"></script>
<script src = "js/validation.js"></script>
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
.container {
  padding: 16px;
}
/* style inputs and link buttons */
input[type=text], input[type=password] {
  width:80%;
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
.btn:hover {
  opacity: 1;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  position: relative;
  left: 30%;
  font-size:1.4vw;
}
.signup {
  background-color: darkgrey;
  text-align: center;
  position: absolute;
  bottom: 0;
}
</style>
<body class="w3-black">
    <form action="control.php" name ="form" method="post">
        <div class="container">
        <input type="text" name="admin" placeholder="admin" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <input type="submit" value="Log in" class="btn" onclick="return adminvalidation(document.form.admin , document.form.password )">
    </div>
    <div class="container signup w3-col">
        <p>I'm a user ! <a href="index.php">Go back</a></p>
    </div>
    </form>
</body>
</html>