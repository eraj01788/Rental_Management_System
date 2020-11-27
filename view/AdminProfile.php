<?php
session_start(); 
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
    <h3>Welcome As Admin</h3>


    <fieldset style="width:40%">
        <legend><b>Admin Profile</b></legend>
        <form method="POST" enctype="multipart/form-data">
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

<form action="" method="POST">  
<table >
	<tr >
    <th>Selelr_id</th>
		<th>Service Name</th>
    <th>Service Price</th>
    <th>Service Details</th>
  </tr>
  
	<tr >
  <?php 
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
               <td>'.$field5name.'</td> 
               <td>'.$field1name.'</td> 
               <td>'.$field2name.'</td> 
               <td>'.$field3name.'</td>
               <td><input type="submit" value="'.$field4name.'" name="Approve"></td>
                </tr>';
             }
           } 
           else
            {
             echo "0 results";
            }
           
         ?>
	</tr>
</table>
</form>

<?php 
   if (isset($_POST["Approve"]))
   {
     echo $_POST["Approve"];
      $upQuery="Update SellerAds Set Service_approved='1' where Service_id='".$_POST["Approve"]."'";
      $newCon1=new DataAccess();
      if($newCon1->SetData($upQuery))
      {
        header("Refresh:1;url= AdminProfile.php");
      }
      else
      {
      echo "There is no ads to approved";
      }
   }
?>

        
<a href="../control/logout.php">Log Out</a>


  </body>
</html>
