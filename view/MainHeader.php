<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("hiddenmsgbox");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<style>
  h1 {
  color: black;
  text-shadow: 2px 2px 4px #000000;
}
</style>
  </head>

  <link rel="stylesheet" href="../css/main2.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <body>

  <div class="header">
  <h1>Rental Management System</h1>
  </div>

  <div class="topnav">
  <a href="Home.php"><h2>Home</h2></a>
  <a href="BrowseAds.php"><h2>BrowseAds</h2></a>
  <a href="Categorise.php"><h2>Categorise</h2></a>
  <a class="logoutbtn" href="../control/logout.php">Log Out</a>
  <?php  
        session_start(); 
        if($_SESSION["UserType"]=="Seller")
        {
          echo '<a href="SellerProfile.php"><h2>Profile</a></h2>';  
        }
        else if($_SESSION["UserType"]=="Admin")
        {
          echo '<a href="AdminProfile.php"><h2>Profile</a></h2>';  
        }    

        if (!isset($_COOKIE["username"])) 
        {
          header("Location: Login.php");
        }
    ?>
  </div>

  </body>
</html>




