
<?php
include ('../control/DataAccess.php');
include('MainHeader.php');

if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
$sellerName=$sellerId=$sellerEmail=$sellerContact=$sellerAddress=$sellerGender="";
$sellerImage;
$query1="";
   if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
   {
     header("Location: Login.php"); // Redirecting To Login Page
   }

$sellerid="";

$sellerid=$_GET['seller_id'];

$newConn1 = new DataAccess();
$query1 = "SELECT * FROM Seller WHERE username='".$sellerid."'";
$result1=$newConn1->GetData($query1);

while($row=$result1->fetch_assoc())
{
  $sellerName=$row["Seller_name"];
  $sellerId=$row["username"];
  $sellerEmail=$row["Seller_email"];
  $sellerContact=$row["Seller_contact"];
  $sellerAddress=$row["Seller_address"];
  $sellerGender=$row["Gender"];
  $sellerImage=$row["Seller_image"];
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Contact With Seller</h2>


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


</body>
</html>