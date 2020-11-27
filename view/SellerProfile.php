<?php
session_start(); 
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

    <h3>Welcome As Seller</h3>



    <fieldset style="width:40%">
        <legend><b>Seller Profile</b></legend>
        <form method="POST" enctype="multipart/form-data">
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
                    <td>0<?php echo $sellerContact; ?> </td>
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
        </form>
    </fieldset>


    <form action="">
      <table>
        <tr>
          <td><label for="PendingApprove">Pending Approve</label></td>
          <td></td>
        </tr>
      </table>
      <input name="ApproveBtn" type="button" value="There are <?php echo $pending?> pending ads">
    </form>

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
      <td><input type="text" name="ServiceDetails" ></td>
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
    

    <a href="../control/logout.php">Log Out</a>

  </body>
</html>
