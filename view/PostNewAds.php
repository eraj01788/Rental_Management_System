<?php
include('MainHeader.php');
include('../control/SellerProfileControl.php');

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
</head>
<body>

<div class="pnadiv">
<form action="" method="post" enctype="multipart/form-data">

<table>

<tr>
  <td><h4>Post New Ads-->></h4></td>
</tr>

<tr>
<td><label for="ServiceName">Service Name : </label></td>
<td><input type="text" name="ServiceName"></td>
<td><?php echo $ServiceNameError?></td>

</tr>

<tr>
<td><label for="ServicePrice">Service Price : </label></td>
<td><input type="text" name="ServicePrice"></td>
<td><?php echo $ServicePriceError?></td>

</tr>

<tr>
  <td><label for="ServiceDetails">Service Details : </label></td>
  <td><input type="text" name="ServiceDetails"></td>
  <td><?php echo $ServiceDetailsError?></td>
</tr>

<tr>
  <td><label for="ServiceDetails">Service Location : </label></td>
  <td><input type="text" name="ServiceLocation"></td>
  <td><?php echo $ServiceDetailsError?></td>
</tr>

<tr>
     <td><label for="ChooseProfile">Choose Profile Image</label></td>
     <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
     <td><?php echo $uploadFile?></td>
</tr>



<tr>
  <td></td>
  <td><input name="PostAds" type="submit" value="PostAds"></td>
  <td><?php echo $AddServiceError?></td>
</tr>
</table>
</form>
</div>

</body>
</html>