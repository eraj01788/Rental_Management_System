<?php
include('DataAccess.php');
session_start();
    $pass=$_POST['pass'];
    $seller_id = $_SESSION['username'];
    $updatepassCon=new DataAccess();
    $updatepassQuery="Update seller Set Password='".$pass."' where username='".$seller_id."'";
    if($updatepassCon->SetData($updatepassQuery))
    {
         echo "Password Updated";
         header("Refresh:0;url= Login.php"); 
    }
    else
    {
        echo "Update Error";
    }
?>