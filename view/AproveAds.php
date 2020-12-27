<?php
include('MainHeader.php');
include ('../control/AdminProfileControl.php'); 
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
    <link rel="stylesheet" href="../css/adminpro.css">
</head>
<body>

<div class="unaprservice">
<form action="" method="POST">  
<table class="sertable">
<tr >
<th class="tableth">Selelr_id</th>
<th class="tableth">Service Name</th>
<th class="tableth">Service Price</th>
<th class="tableth">Service Details</th>
<th class="tableth">Click Here to Aprove</th>
</tr>

<tr >
<?php 



if (isset($_POST["Approve"]))
{
   $upQuery="Update SellerAds Set Service_approved='1' where Service_id='".$_POST["Approve"]."'";
   $newCon1=new DataAccess();
   if($newCon1->SetData($upQuery))
   {
     header("Refresh:1;url= AdminProfile.php");
   }
}


    if (!empty($result->num_rows))
    {
      // output data of each row
      while($row = $result->fetch_assoc()) 
      {
        $newConn2=new DataAccess();

        $findSellerNameQuery="SELECT Seller_name FROM Seller WHERE username='".$row["Seller_id"]."'";
        $resultSellerName=$newConn2->GetData($findSellerNameQuery);
        while($row1 = $resultSellerName->fetch_assoc()) 
        {
         $field5name = $row1["Seller_name"];
        }
        $field1name = $row["Service_name"];
        $field2name = $row["Service_price"];
        $field3name = $row["Service_details"];
        $field4name = $row["Service_id"];
        echo '<tr> 
        <td class="tabletd">'.$field5name.'</td> 
        <td class="tabletd">'.$field1name.'</td> 
        <td class="tabletd">'.$field2name.'</td> 
        <td class="tabletd">'.$field3name.'</td>
        <td class="tabletdbtn"><input class="tabletdbtn" type="submit" value="'.$field4name.'" name="Approve"></td>
         </tr>';
      }
      
    } 
    else
      {
        echo '<tr> 
        <td class="tabletd">No Ads Pending</td> </tr>';
      }
  ?>
</tr>
</table>
</form>
</div>
  
    
</body>
</html>