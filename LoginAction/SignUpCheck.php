<?php
include ('DataAccess.php');
session_start(); 




            $newEntry = new DataAccess();
            $UserType=$fName=$userEmail=$userName=$gender=$DOB=$Password="";
            $UserTypeError=$fNameError=$userEmailError=$userNameError=$genderError=$DOBError=$PassError="";
            $res="";
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

              if(empty($_POST["Password"]))
              {
                $PassError="Enter Your Password";
              }
              else
              {
                $Password=$_POST["Password"];
              }

              $target_dir = "../files/";
              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
              {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              } 
              else 
              {
                echo "Sorry, there was an error uploading your file.";
              }
        


            if(!empty($_POST["UserType"])&&!empty($_POST["fName"])&&!empty($_POST["userEmail"])&&!empty($_POST["userName"])&&!empty($_POST["gender"])&&!empty($_POST["DOB"])&&!empty($_POST["Password"]))
            {
                $insertQuery = "INSERT INTO Users (UserType, fName, userEmail,userName,gender,DOB,UserPassword) VALUES ('".$UserType."','".$fName."','".$userEmail."','".$userName."','".$gender."','".$DOB."','".$Password."')";
              

              if($newEntry->SetData($insertQuery))
              {
                $res="User Created Redirecting to Login Page";
                header("Refresh:5;url= Login.php"); 
              }
              else
              {
                $res="User not Created";
              }
            }
            else
            {
              $res="Must Fill All The Field";
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
