<?php
include('DataAccess.php');
session_start(); 

$username=$password=$UserType="";
$UserTypeError=$UserNameError=$PasswordError=$userError="";

// store session data
if (isset($_POST['submit'])) {

  if(empty($_POST["UserType"]))
  {
    $UserTypeError="Select User Type";
  }
  else
  {
    if($UserType=="Buyer")
    {
      $UserTypeError = "Sorry Another Option isn't availabe right now";
    }
    else
    {
      $UserType=$_POST['UserType'];     
    }
      
  }
              
  if(empty($_POST["username"]))
  {
    $UserNameError="Enter Your UserName";
  }
  else
  {
    $username=$_POST["username"];
  }

  if(empty($_POST["password"]))
  {
    $PasswordError="Enter Your Password";
  }
  else
  {
    $password=$_POST["password"];
  }

  $newConn=new DataAccess();

  $userQuery="SELECT * FROM ".$UserType." WHERE username='". $username."' AND Password='". $password."'";

  $result=$newConn->GetData(($userQuery));

  if (!empty($result->num_rows)) {
  // $_SESSION["username"] = $username;
  // $_SESSION["password"] = $password;

    if($UserType=="Admin")
    {
      $_SESSION["username"] = $username;
      $_SESSION["UserType"] = $UserType;

      $cookie_name = "username";
      $cookie_value =$username;
      setcookie($cookie_name, $cookie_value, time() + (3600), "/");

      header("Refresh:1;url= Home.php"); 
    }
    else if($UserType=="Seller")
    {
      $_SESSION["username"] = $username;
      $_SESSION["UserType"] = $UserType;
      $cookie_name = "username";
      $cookie_value =$username;
      setcookie($cookie_name, $cookie_value, time() + (3600), "/");
      header("Refresh:1;url= Home.php");
    }
  }
  else
    {
      echo '<script >
                alert( "User Not Found" );
                 </script>';
    }
}
?>
