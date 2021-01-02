<?php
include('MainHeader.php');
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
//include('../control/HomeControl.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <style>
  h1 {
  color: black;
  text-shadow: 2px 2px 4px #000000;
}

#example1 {
  border: 2px solid black;
  padding: 25px;
  background: url(../files/homebg.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}

</style>

  </head>

  <style>
    p {
      color : black;
      font-weight: bold;
      text-indent: 100px;
      text-align: justify;
      letter-spacing: 2px;
      padding-top: 50px;
      border: 1px solid black;
      background-color: lightblue;
      }

      a {
      font-family:  OnlineBuySale, serif;
      font-family:  bproperty, serif;  
      text-decoration: none;
      color: black;
      text-decoration: underline;
      
        }  
  </style>

  <body>

<div id="example1">
  <h2>Welcome To Our Rental Management System</h2>
  <p>
        Greetings to all our users who have visited our site and we warmly welcome to all of you to our Rental_Management System. This is our webtech project where, we cater to the needs of those seeking real estate services, with a promise to make property search, renting & buying easier than ever. We offer the easiest platform that enables anyone to buy, rent or sell properties in the country. We have taken some background ideas from <a target="_blank" href=" https://www.onlinebuysale.com/">1.OnlineBuySale</a> and also from
        <a target="_blank" href=" https://www.bproperty.com/">2.bproperty</a>
    </p>
</div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  </body>
</html>

<?php
include('MainFooter.php');
?>