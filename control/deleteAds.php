<?php
include('DataAccess.php');
$service_id=$_GET['service_id'];
    $dltadsconn=new DataAccess();
    $dltquery="DELETE FROM sellerads WHERE Service_id='".$service_id."'";
    if($dltadsconn->SetData($dltquery))
    {
      echo '<script >
      alert( "Deleted Service : ' . $service_id . '" );
       </script>';
      header("Refresh:0;url=../view/manageads.php");
    }
?>