<?php
include ('DataAccess.php');
session_start(); 

            $newEntry = new DataAccess();
            $UserType=$fName=$userEmail=$userName=$gender=$DOB="";
            $UserTypeError=$fNameError=$userEmailError=$userNameError=$genderError=$DOBError="";
// store session data
         if (isset($_POST['submit']))
          {

              if(isset($_POST["UserType"]))
              {
                $UserTypeError="Select User Type";
              }
              else
              {
                $UserType=$_POST["UserType"];
                
              }
            
              if(empty($_POST["fName"]))
              {
                $fNameError="Enter Your Name";
                 
              }
              else
              {
                $fName=$_POST["fName"];

              }
            
              if(empty($_POST["userEmail"]))
              {
                $userEmailError="Enter Your Email";
              }
              else
              {
                $userEmail=$_POST["userEmail"];
                $_SESSION["userEmail"] = $userEmail;
              }
            
              if(empty($_POST["userName"]))
              {
                $userNameError="Enter Your UserName";
              }
              else
              {
                $userName=$_POST["userName"];
                $_SESSION["userName"] = $userName;
              }
            
              if(empty($_POST["gender"]))
              {
                $genderError="Select Your Gender";
              }
              else
              {
                $gender=$_POST["gender"];

              }
            
              if(empty($_POST["DOB"]))
              {
                $DOBError="Enter Your DOB";
              }
              else
              {
                $DOB=$_POST["DOB"];

              }

              $target_dir = "LoginAction/files/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
              {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              } 
              else 
              {
                echo "Sorry, there was an error uploading your file.";
              }
        

              $insertQuery = "INSERT INTO Users (UserType, fName, userEmail,userName,gender,DOB,UserPassword)
              VALUES (". $fname .", ". $lname .", ‘". $email .")";
              

              if($newEntry->SetData($insertQuery)>0)
              {
                echo "new record inserted";
              }
              else
              {
                echo "error occurred";
              }

          }  

//   else
// {
// $username=$_POST['username'];
// $password=$_POST['password'];


// $_SESSION["username"] = $username;
// $_SESSION["password"] = $password;
//    }
   


?>
