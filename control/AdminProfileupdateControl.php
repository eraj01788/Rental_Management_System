<?php
include ('DataAccess.php');
$newEntry = new DataAccess();
$adminContact=$adminAddress="";
$contactNoError=$userAddressError=$FileError="";
$adminImage;

$query1 = "SELECT Admin_contact,Admin_address,Admin_image FROM Admin WHERE username='".$_SESSION["username"]."'";
$result=$newEntry->GetData($query1);

$row=$result->fetch_assoc();

  $adminContact=$row["Admin_contact"];
  $adminAddress=$row["Admin_address"];
  $adminImage=$row["Admin_image"];

if (isset($_POST['UpdatePro']))
{
            
              if(empty($_POST["UadminAddress"]))
              {
                $userAddressError="Enter Your Address";
              }
              else
              {
                $adminAddress=$_POST["UadminAddress"];
              }

              if(empty($_POST["UadminContact"]))
              {
                $contactNoError="Enter Your Contact Number";
              }
              else
              {
                  if (!ctype_alnum($_POST["UadminContact"])) {
                  $contactNoError = "Only Numbers allowed";
                }
                else
                {
                  $adminContact=$_POST["UadminContact"];
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
                  $adminImage=$sImage;
                } 
                else 
                {
                  $FileError= "Sorry, there was an error uploading your file.";
                }
              }

                  $query="Update Admin Set Admin_contact='".$adminContact."',Admin_address='".$adminAddress."',Admin_image='".$adminImage."' where username='".$_SESSION["username"]."'";
                  if($newEntry->SetData($query))
                  {
                    header("Refresh:1;url= AdminProfile.php");
                  }
}

                              

?>