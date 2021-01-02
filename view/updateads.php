<?php
include('MainHeader.php');

$service_id=$_GET['service_id'];

if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}


include('../control/DataAccess.php');
$ServiceName=$ServiceDetails=$ServiceLocation="";
$ServicePrice=0;
$ServiceNameError=$ServicePriceError=$ServiceDetailsError=$ServiceLocationError=$FileError="";

        $adupconn=new DataAccess();
        $findadsQuery="Select * from SellerAds where Service_id=".$service_id."";
        $result=$adupconn->GetData($findadsQuery);

        if (!empty($result->num_rows))
         {
           while($row = $result->fetch_assoc()) 
           {
             $ServiceName = $row["Service_name"];
             $ServicePrice = $row["Service_price"];
             $ServiceDetails = $row["Service_details"];
             $ServiceLocation = $row["Service_location"];
           }
         }




if (isset($_POST['UpdateAds'])) {

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

    $query="Update SellerAds Set Service_name='".$ServiceName."', Service_price='".$ServicePrice."', 
            Service_details='".$ServiceDetails."', Service_location='".$ServiceLocation."' where Service_id='".$service_id."'";
    if($adupconn->SetData($query))
    {
      echo '<script >
                alert( "Post Updated" );
                 </script>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="pnadiv">
<form action="" method="post" enctype="multipart/form-data">

<table>

<tr>
  <td><h4>Update Ads-->></h4></td>
</tr>

<tr>
<td><label for="ServiceName">Service Name : </label></td>
<td><input type="text" name="ServiceName" value="<?php echo $ServiceName ?>"></td>
<td><?php echo $ServiceNameError?></td>

</tr>

<tr>
<td><label for="ServicePrice">Service Price : </label></td>
<td><input type="text" name="ServicePrice" value="<?php echo $ServicePrice ?>"></td>
<td><?php echo $ServicePriceError?></td>

</tr>

<tr>
  <td><label for="ServiceDetails">Service Details : </label></td>
  <td><input type="text" name="ServiceDetails" value="<?php echo $ServiceDetails ?>"></td>
  <td><?php echo $ServiceDetailsError?></td>
</tr>

<tr>
  <td><label for="ServiceDetails">Service Location : </label></td>
  <td><input type="text" name="ServiceLocation" value="<?php echo $ServiceLocation ?>"></td>
  <td><?php echo $ServiceLocationError?></td>
</tr>



<tr>
  <td></td>
  <td><input name="UpdateAds" type="submit" value="Update ads"></td>
</tr>
</table>
</form>
</div>

</body>
</html>