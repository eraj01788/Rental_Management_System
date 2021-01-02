<link rel="stylesheet" href="../css/browse.css">
<?php
session_start();
include('BrowseAdsControl.php');
  $sid=$_SESSION['username'];

  $adstosearch=$_POST['uname'];

  if(!empty($adstosearch))
  {
    $filterQuery="SELECT * FROM `sellerads` WHERE CONCAT(`Service_name`, `Service_price`, `Service_details`)LIKE '%".$adstosearch."%' and Seller_id='".$sid."'"; 
  }
  else
  {
    $filterQuery="SELECT * FROM `sellerads` WHERE Seller_id='".$sid."'";

  }

  $filterQuery="SELECT * FROM `sellerads` WHERE CONCAT(`Service_name`, `Service_price`, `Service_details`)LIKE '%".$adstosearch."%' and Seller_id='".$sid."'";
  $newbac=new BrowseAdsControl();
  $result=$newbac->FilterAds($filterQuery);
  echo '<div class="StyleAds">';
  echo '<ul>';
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
             $field7name = $row["Service_id"];
             
             echo '
             
             <li class="BrowseS"><img src="'.$field4name.'" class="simage" alt=""><br>
             <label for="ServiceName">Service Name :  '.$field1name.'</label><br>
             <label for="ServicePrice">Service Price :  '.$field2name.'</label><br>
             <label for="ServiceDetails">Service Details :  '.$field3name.'</label><br>
             <label for="Location">Service Details :  '.$field6name.'</label><br><br>
             <a class="mngads" href="updateads.php?service_id='.$field7name.'">Update</a>
             <a class="mngads" href="../control/deleteads.php?service_id='.$field7name.'">Delete</a>
             </li>';
             
           }
         } 

   echo '</ul>';      
  echo '</div>';
?>