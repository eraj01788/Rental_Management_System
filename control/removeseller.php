<?php
include('DataAccess.php');
    $id = $_GET['seller_id'];
    $dltquery="DELETE FROM seller WHERE username ='".$id."'";
    $dltsellerads="DELETE FROM sellerads WHERE Seller_id ='".$id."'";
    $dltCon=new DataAccess();
    
    if($dltCon->SetData($dltquery))
    {
        
        if($dltCon->SetData($dltsellerads))
        {
            header("Refresh:0;url= ../view/manageseller.php");
        }
    }
    else
    {
        //echo $_GET['seller_id'];
    }

?>


