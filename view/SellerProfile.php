<?php
include('MainHeader.php');
include('../control/SellerProfileControl.php');

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

  <div class="sfullprofile">
    
  <h3>Welcome As Seller</h3>

<form action="">
  <table>
    <tr>
      <td><label for="PendingApprove">Pending Approve</label></td>
      <td></td>
    </tr>
  </table>
  <input name="ApproveBtn" type="button" value="There are <?php echo $pending?> pending ads">
</form>




<div class="sellerP">
<form action="SellerProfileUpdate.php"  method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name :</td>
                <td> <?php echo  $sellerName;?> </td>
            </tr>

            <tr>
                <td>User Name :</td>
                <td> <?php echo $sellerId;?> </td>
            </tr>

            <tr>
                <td>Email :</td>
                <td><?php echo $sellerEmail; ?> </td>
            </tr>

            <tr>
                <td> Gender :</td>
                <td><?php echo $sellerGender; ?> </td>
            </tr>

            <tr>
                <td>Contact Number :</td>
                <td><?php echo $sellerContact; ?> </td>
            </tr>

            <tr>
                <td>Address :</td>
                <td><?php echo $sellerAddress; ?> </td>
            </tr>

            <tr>
                <td> Profile image :</td>
                <td><img src="<?PHP echo $sellerImage; ?>" alt="Profile Image" width="100" height="100"> </td>
            </tr>

            <tr>
                <td><br><br></td>
            </tr>
        </table>
        <input name="UpdateProfile" type="submit" value="Update Profile"><br><br>
        <a class="pnabtn" href="PostnewAds.php">PostNewAds</a><br><br>

    </form>
</div>
  </div>

  


  <br><br><br>
  <br><br><br>
  <br><br><br>
  <br><br><br>



  <?php
include('MainFooter.php');
?>

  </body>
</html>

