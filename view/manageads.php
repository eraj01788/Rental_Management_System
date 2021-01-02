<?php
include('MainHeader.php');
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/mngads.js"></script>
    <link rel="stylesheet" href="../css/browse.css">

</head>
<body>
<div class="searchseller">
    <input type="text" id="uname" placeholder="Search Your Ads" onkeyup="searchsellerads()">
    
    <p id="mytext"></p>

</body>
</html>

<style>
    input#uname {
    width: 25%;
    padding: 7px;
    border-radius: 25px;
    margin: 8px 590px;
}
</style>