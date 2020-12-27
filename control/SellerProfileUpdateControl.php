<?php
include ('DataAccess.php');
$newEntry = new DataAccess();
$sellerContact=$sellerAddress="";
$contactNoError=$userAddressError=$FileError="";
$sellerImage;

$query1 = "SELECT Seller_contact,Seller_address,Seller_image FROM Seller WHERE username='".$_SESSION["username"]."'";
$result=$newEntry->GetData($query1);

while($row=$result->fetch_assoc())
{
  $sellerContact=$row["Seller_contact"];
  $sellerAddress=$row["Seller_address"];
  $sellerImage=$row["Seller_image"];
}

if (isset($_POST['UpdatePro']))
{
            
              if(empty($_POST["UsellerAddress"]))
              {
                $userAddressError="Enter Your Address";
              }
              else
              {
                $sellerContact=$_POST["UsellerAddress"];
              }

              if(empty($_POST["UsellerContact"]))
              {
                $contactNoError="Enter Your Contact Number";
              }
              else
              {
                  if (!ctype_alnum($_POST["UsellerContact"])) {
                  $contactNoError = "Only Numbers allowed";
                }
                else
                {
                  $sellerAddress=$_POST["UsellerContact"];
                }  
              }

              if(empty($_FILES["fileToUpload"]))
              {
                $FileError="Select Your Image";
              }
              else
              {
                $target_dir = "../files/";
                $sImage = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $sImage)) 
                {
                  //$FileError= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                  $sellerImage=$sImage;
                } 
                else 
                {
                  $FileError= "Sorry, there was an error uploading your file.";
                }
              }

                  $query="Update Seller Set Seller_contact='".$sellerContact."',Seller_address='".$sellerAddress."',Seller_image='".$sellerImage."' where username='".$_SESSION["username"]."'";
                  if($newEntry->SetData($query))
                  {
                    header("Refresh:1;url= SellerProfile.php");
                  }
}

                              

?>