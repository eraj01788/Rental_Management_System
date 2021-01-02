<?php
include('MainHeader.php');
include('../control/BrowseAdsControl.php');
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
    <link rel="stylesheet" href="../css/browse.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
  </head>
  <body>


<div class="searcbox">
<form action="" method="post">
<table>
    <tr>
      <td><input class="sbox" type="text" name="searchtext"></td>
      <td><input class="sboxbtn" name="searchBtn" type="submit" value="Search"></td>
    </tr>
  </table>
  <br>
</form> 
</div>


<div class="StyleAds">
<form action="" method="POST">
      
    <ul id="mytext">
           <?php                    
         if (!empty($result->num_rows))
         {
           // output data of each row
           while($row = $result->fetch_assoc()) 
           {
             $field1name = $row["Service_name"];
             $field2name = $row["Service_price"];
             $field3name = $row["Service_details"];
             $field4name = $row["Service_image"];
             $field6name = $row["Service_location"];
             $field5name = $row["Seller_id"];
             echo '
             
             <li class="BrowseS"><img src="'.$field4name.'" class="simage" alt=""><br>
             <label for="ServiceName">Service Name :  '.$field1name.'</label><br>
             <label for="ServicePrice">Service Price :  '.$field2name.'</label><br>
             <label for="ServiceDetails">Service Details :  '.$field3name.'</label><br>
             <label for="Location">Service Details :  '.$field6name.'</label><br><br>
             <a class="sellerprofilebtn" href="SellerContactPage.php?seller_id='.$field5name.'">Contact With Seller</a>
             </li>';
           }
         } 
            
         ?>
         
    </ul>
      
    </form>
</div>


  </body>
</html>
<?php
include('MainFooter.php');
?>
