<?php 
include ('DataAccess.php');

$newConn = new DataAccess();

$query = "SELECT * FROM SellerAds WHERE Service_approved=1";

$result=$newConn->GetData($query);

if(!empty($result->num_rows))
{
  return $result;
}
else
{
  $result=null;
  return $result;
}
        
?>