<?php
include('DataAccess.php');
$ServiceName=$ServiceDetails=$ServiceLocation="";
$ServicePrice=0;
$ServiceNameError=$ServicePriceError=$ServiceDetailsError=$ServiceLocationError="";

$sellerName=$sellerId=$sellerEmail=$sellerContact=$sellerAddress=$sellerGender="";
$sellerImage;

$pending=0;
$newConn1=new DataAccess();

$query = "SELECT * FROM SellerAds WHERE Service_approved=0 AND Seller_id='".$_SESSION["username"]."'";

$AddServiceError=$uploadFile="";
$result=$newConn1->GetData($query);

if(!empty($result->num_rows))
{
  $pending=$result->num_rows;
}
else
{
  $pending = 0;
  $result=null;
}

$query1 = "SELECT * FROM Seller WHERE username='".$_SESSION["username"]."'";
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



if (isset($_POST['PostAds'])) {

    if(empty($_POST["ServiceName"]))
    {
      $ServiceNameError="Enter Service Name";
    }
    else
    {
        $ServiceName=$_POST['ServiceName'];
    }
    if(empty($_POST["ServicePrice"]))
    {
        $ServicePriceError="Enter Service Price";
    }
    else
    {
        $ServicePrice=$_POST["ServicePrice"];
    }
    if(empty($_POST["ServiceDetails"]))
    {
        $ServiceDetailsError="Enter Service Details";
    }
    else
    {
        $ServiceDetails=$_POST["ServiceDetails"];
        
    }
    if(empty($_POST["ServiceLocation"]))
    {
        $ServiceLocationError="Enter Location";
    }
    else
    {
        $ServiceLocation=$_POST["ServiceLocation"];
    }


              $target_dir = "../files/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
              {
                $uploadFile= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              } 
              else 
              {
                $uploadFile= "Sorry, there was an error uploading your file.";
              }



    $newConn=new DataAccess();

    $approve=false;
    $insertQuery = "INSERT INTO SellerAds(Seller_id,Service_name,Service_price,Service_details,Service_image,Service_approved,Service_location) VALUES 
    ('".$_SESSION["username"]."','".$ServiceName."','".$ServicePrice."','".$ServiceDetails."','".$target_file."','".$approve."','".$ServiceLocation."')";
    
    if(!empty($_POST['ServiceName'])&&!empty($_POST['ServicePrice'])&&!empty($_POST['ServiceDetails']))
    {
        if($newConn->SetData($insertQuery))
        {
            $AddServiceError= "Ads Posted Successfully";
            header("Refresh:0;url= SellerProfile.php"); 
        }
        else
        {
            $AddServiceError= "Error While Posting";
        }
    }
    else
    {
        $AddServiceError= "Fill All The Field";
    }
    


}

?>
