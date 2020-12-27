<?php
include('DataAccess.php');
    $id = $_GET['seller_id'];
    $dltquery="DELETE FROM seller WHERE username ='".$id."'";
    $dltCon=new DataAccess();
    
    if($dltCon->SetData($dltquery))
    {
        header("Refresh:0;url= ../view/manageseller.php");
    }
    else
    {
        echo $_GET['seller_id'];
    }

?>


