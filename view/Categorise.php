<?php
session_start(); 
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>

  <h1>Rental Management System</h1>

    <table style="width:50%">
      <tr>
        <th><a href="Home.php"><h2>Home</h2></a></th>
        <th><a href="BrowseAds.php"><h2>BrowseAds</h2></a></th>
        <th><a href="Categorise.php"><h2>Categorise</h2></a></th>
        <?php  
        if($_SESSION["UserType"]=="Seller")
        {
          echo '<th><a href="SellerProfile.php"><h2>Profile</a></h2></th>';  
        }
        else if($_SESSION["UserType"]=="Admin")
        {
          echo '<th><a href="AdminProfile.php"><h2>Profile</a></h2></th>';  
        }    
        ?> 
      </tr>
    </table>
  </body>
</html>
