<?php 
include ('DataAccess.php');

$filterResultAccess = new DataAccess();

// if(isset($_POST['select']))
// {
//   echo $_POST['select'];
//   echo "Hello";
//   //header("Refresh:0;url= SellerProfile.php"); 
// }


echo "Eraj";

if($_POST["uname"]!="")
{
 $filterQuery="SELECT * FROM `sellerads` WHERE CONCAT(`Service_name`, `Service_price`, `Service_details`)LIKE '%".$_POST['uname']."%'";
 $result = $filterResultAccess->GetData($filterQuery);

 echo "Eraj";

 if (!empty($result->num_rows))
         {
           while($row = $result->fetch_assoc()) 
           {
             $field1name = $row["Service_name"];
             $field2name = $row["Service_price"];
             $field3name = $row["Service_details"];
             $field4name = $row["Service_image"];
             $field5name = $row["Service_id"];

             echo '<form action="" method="POST">';
             echo '<ul>';
             echo '<li>';
             echo '<label for="ServiceName">Service Name :  '.$field1name.'</label><br>';
             echo '<label for="ServicePrice">Service Price :  '.$field2name.'</label><br>';
             echo '<label for="ServiceDetails">Service Details :  '.$field3name.'</label><br>';
             echo '<label for="SellerContact" class="sellercontacttext">Contact With This Seller</label>';
             echo '<input type="submit" name="select" value='.$field5name.'><br><br><br>';
             echo '</li>';
             echo '</ul>';


            //  echo '
            //  <label for="ServiceName">Service Name :  '.$field1name.'</label><br>
            //  <label for="ServicePrice">Service Price :  '.$field2name.'</label><br>
            //  <label for="ServiceDetails">Service Details :  '.$field3name.'</label><br>
            //  <label for="SellerContact" class="sellercontacttext">Contact With This Seller</></label>
            //  <input type="submit" name="select" value='.$field5name.' onclick="select()"/></li><br><br><br>';


           }
         } 
         else
         {
           echo "No Data Found";
         }
}
