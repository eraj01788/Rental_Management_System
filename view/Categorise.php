<?php
include('MainHeader.php');
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
  
  <h1>This Part Will Be Updated Soon!</h1>

  </body>
</html>
<?php
include('MainFooter.php');
?>
