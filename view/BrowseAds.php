<?php
session_start(); 
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

    


    <form action="" method="POST">
      
       <table>
         <tr>
           
        </tr> 
           <?php 

                        if (isset($_POST["contact"]))
                        {
                           $_SESSION["Seller_id"]=$_POST["contact"];
                           header("Refresh:0;url= SellerContactPage.php"); 
                        }
          

           if (!empty($result->num_rows))
           {
             // output data of each row
             while($row = $result->fetch_assoc()) 
             {
               $field1name = $row["Service_name"];
               $field2name = $row["Service_price"];
               $field3name = $row["Service_details"];
               $field4name = $row["Service_image"];
               $field5name = $row["Seller_id"];
               echo '
               <tr> 
               <td><img src="'.$field4name.'" alt=""width="300" height="300"></td> 
               <td><label for="ServiceName">Service Name :  '.$field1name.'----</label></td> 
               <td><label for="ServicePrice">Service Price :  '.$field2name.'----</label></td>
               <td><label for="ServiceDetails">Service Details :  '.$field3name.'---</label></td>
               <td><label for="SellerContact">Contact With This Seller :---</label></td>
               <td><input type="submit" value='.$field5name.' name="contact"></td>
                </tr>';
             }
           } 
           else
            {
             echo "0 results";
            }  
         ?>
         
       </table>
      
    </form>


  </body>
</html>
