<?php
include ('DataAccess.php');
session_start(); 


            $newEntry = new DataAccess();
            $UserType=$fName=$userEmail=$userName=$userAddress=$gender=$Password="";
            $UserTypeError=$fNameError=$userEmailError=$userNameError=$contactNoError=$userAddressError=$genderError=$PassError=$FileError="";
            $contactNo;
            $target_file;
// store session data
         if (isset($_POST['submit']))
          {

              if(empty($_POST["UserType"]))
              {
                $UserTypeError="Select User Type";
              }
              else
              {
                  $UserType=$_POST['UserType'];     
              }
            
              if(empty($_POST["fName"]))
              {
                $fNameError="Enter Your Name";
                 
              }
              else
              {
                if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fName"])) {
                  $fNameError = "Only letters and white space allowed";
                }
                else
                {
                  $fName=$_POST['fName'];
                }
              }
            
              if(empty($_POST["userEmail"]))
              {
                $userEmailError="Enter Your Email";
              }
              else
              {
                if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
                  $userEmailError = "Invalid email format";
                }
                else
                {
                  $userEmail=$_POST["userEmail"];
                }
              }
            
              if(empty($_POST["userName"]))
              {
                $userNameError="Enter Your UserName";
              }
              else
              {
                $userName=$_POST["userName"];
              }
            
              if(empty($_POST["gender"]))
              {
                $genderError="Select Your Gender";
              }
              else
              {
                $gender=$_POST["gender"];

              }
                   
              if(empty($_POST["Password"]))
              {
                $PassError="Enter Your Password";
              }
              else
              {
                $Password=$_POST["Password"];
              }

              if(empty($_POST["userAddress"]))
              {
                $userAddressError="Enter Your Address";
              }
              else
              {
                $userAddress=$_POST["userAddress"];
              }

              if(empty($_POST["contactNo"]))
              {
                $contactNoError="Enter Your Contact Number";
              }
              else
              {
                  if (!ctype_alnum($_POST["contactNo"])) {
                  $contactNoError = "Only Numbers allowed";
                }
                else
                {
                  $contactNo=$_POST["contactNo"];
                }  
              }

              if(!isset($_FILES["fileToUpload"]))
              {
                $FileError="Select Your Image";
              }
              else
              {
                $target_dir = "../files/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                {
                  //$FileError= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } 
                else 
                {
                  $FileError= "Sorry, there was an error uploading your file.";
                }
              }


            if(!empty($_POST["UserType"])&&!empty($_POST["fName"])&&!empty($_POST["userEmail"])&&!empty($_POST["userName"])&&!empty($_POST["gender"])&&!empty($_POST["Password"]))
            {
              if($UserType=="Seller")
              {
                $insertQuery = "INSERT INTO Seller (username,Seller_name,Seller_email,Seller_contact,Seller_address,Gender,Password,Seller_image) VALUES 
                                                   ('".$userName."','".$fName."','".$userEmail."','".$contactNo."','".$userAddress."','".$gender."','".$Password."','".$target_file."')";

                if($newEntry->SetData($insertQuery))
                {
                  echo "Seller User Created Redirecting to Login Page";
                  header("Refresh:5;url= Login.php"); 
                }
                else
                {
                  echo "Seller User not Created";
                }                                   
              }
              else if($UserType=="Admin")
              {
                $insertQuery = "INSERT INTO Admin (username,Admin_name,Admin_email,Admin_address,Admin_contact,Gender,Password,Admin_image) VALUES 
                                                 ('".$userName."','".$fName."','".$userEmail."','".$userAddress."','".$contactNo."','".$gender."','".$Password."','".$target_file."')";

                if($newEntry->SetData($insertQuery))
                {
                  echo "Admin User Created Redirecting to Login Page";
                  header("Refresh:5;url= Login.php"); 
                }
                else
                {
                  echo "Admin User not Created";
                }                                             

              }
              else
              {
                echo "Sorry Another Option isn't availabe right now";
              }
            }
            else
            {
              $res="Must Fill All The Field";
            }



         }


?>
