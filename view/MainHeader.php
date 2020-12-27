<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>

  <link rel="stylesheet" href="../css/main2.css">

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
    ?>
  </div>
  </body>
</html>