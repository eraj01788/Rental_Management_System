<?php 
include ('DataAccess.php');

$newConn = new DataAccess();
$pending=0;

$query = "SELECT * FROM SellerAds WHERE Service_approved=0";
$query1 = "SELECT * FROM Admin WHERE username='".$_SESSION["username"]."'";

$adminName=$adminId=$adminEmail=$adminContact=$adminAddress=$adminGender="";
$adminImage;


$result=$newConn->GetData($query);

if(!empty($result->num_rows))
{
  $pending=$result->num_rows;
  
}
else
{
  $pending = 0;
  $result=null;
  
}

$result1=$newConn->GetData($query1);

$row=$result1->fetch_assoc();

  $adminName=$row["Admin_name"];
  $adminId=$row["username"];
  $adminEmail=$row["Admin_email"];
  $adminContact=$row["Admin_contact"];
  $adminAddress=$row["Admin_address"];
  $adminGender=$row["Gender"];
  $adminImage=$row["Admin_image"];



?>