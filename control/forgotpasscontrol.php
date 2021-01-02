<?php
include('DataAccess.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
$userType=$_POST['userType'];
$findEmail="";
$cngPassquery="";

$cngpassCon=new DataAccess();

if($userType=="Seller")
{
    $findEmail="Select * from ".$userType." where Seller_email='".$email."'";
    $cngPassquery="Update ".$userType." set Password='".$pass."' where Seller_email='".$email."' ";
}
else
{
    $findEmail="Select * from ".$userType." where Admin_email='".$email."'";
    $cngPassquery="Update ".$userType." set Password='".$pass."' where Admin_email='".$email."' ";
}


$result=$cngpassCon->GetData($findEmail);

if (!empty($result->num_rows))
{
    if($cngpassCon->SetData($cngPassquery))
        {  
            echo "Password Changed Successfully.";
            ?>
                <a class="backtologin" href="Login.php"><b>Back To Login Page</b></a>
            <?php
        }
        else
        {
            $AddServiceError= "Error While Posting";
        }
}
else
{
    echo "Email Not found";
}
 

?>

<style>
    a.backtologin {
    text-decoration: none;
    font-size: 21px;
    font-family: emoji;
}
a.backtologin:hover {
    color: black;
}
</style>