<?php

$profileType="";

session_start(); 
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
include('../control/HomeControl.php');
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



<form action="" method="post">
<table>
    <tr>
      <td><label for="Search">Search Which Service You Want : </label></td>
      <td><input type="text" name="searchText" id=""></td>
      <td><input name="searchBtn" type="submit" value="Search"></td>
      <td><?php echo $searchError;?></td>
    </tr>
  </table>
  
</form> 


<form action="">
      
       <table>
         <tr>
           <td></td>
           <td></td>
           <td></td>

           <?php 
           
           echo $ErrorResult;
            
            $length = count($resultService);
            for ($i = 0; $i < $length; $i++) 
            {
              while($row = $resultService[$i]->fetch_assoc()) 
             {
                $field1name = $row["Service_name"];
               $field2name = $row["Service_price"];
               $field3name = $row["Service_details"];
               $field4name = $row["Service_image"];

               echo '
               <tr> 
               <td><img src="'.$field4name.'" alt=""width="300" height="300"></td> 
               <td><label for="ServiceName">Service Name :  '.$field1name.'----</label></td> 
               <td><label for="ServicePrice">Service Price :  '.$field2name.'----</label></td>
               <td><label for="ServiceDetails">Service Details :  '.$field3name.'---</label></td>
                </tr>';
             }
            }    
           
         ?>
         </tr>
       </table>
      
    </form>



  </body>
</html>
