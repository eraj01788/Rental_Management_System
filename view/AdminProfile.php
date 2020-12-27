<?php
include('MainHeader.php');
include ('../control/AdminProfileControl.php'); 
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
    <link rel="stylesheet" href="../css/adminpro.css">
  </head>
  <body>


<div class="afullprofile">
    <h3>Welcome As Admin</h3>


 
    <div class="adminP">
    <form action="AdminProfileUpdate.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name :</td>
                <td> <?php echo  $adminName;?> </td>
            </tr>

            <tr>
                <td>User Name :</td>
                <td> <?php echo $adminId;?> </td>
            </tr>

            <tr>
                <td>Email :</td>
                <td><?php echo $adminEmail; ?> </td>
            </tr>

            <tr>
                <td> Gender :</td>
                <td><?php echo $adminGender; ?> </td>
            </tr>

            <tr>
                <td>Contact Number :</td>
                <td><?php echo $adminContact; ?> </td>
            </tr>

            <tr>
                <td>Address :</td>
                <td><?php echo $adminAddress; ?> </td>
            </tr>

            <tr>
                <td> Profile image :</td>
                <td><img src="<?PHP echo $adminImage; ?>" alt="Profile Image" width="100" height="100"> </td>
            </tr>

            <tr>
                <td><br><br></td>
            </tr>
        </table>
        <input class="updateadminbtn" name="UpdateProfile" type="submit" value="Update Profile">

        <a class="mngsellerbtn" href="manageseller.php">Manage Seller</a>
    </form>
    </div>

    

</div>


  <div class="aprovebtn">
  <form action="AproveAds.php">
  <input class="apvbtn" name="ApproveBtn" type="submit" value="There are <?php echo $pending?> pending ads">
  </form>
  </div>


  </body>
</html>
<?php
include('MainFooter.php');
?>
