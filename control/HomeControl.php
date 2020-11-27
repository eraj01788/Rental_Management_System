<?php 

$field1name;
$field2name;
$field3name;
$field4name;

$id=array();
$resultService=array();
$ErrorResult="";

include ('DataAccess.php');

$newConn = new DataAccess();

$searchText=$searchError="";

if(isset($_POST["searchBtn"]))
{
  if(empty($_POST["searchText"]))
  {
      $searchError="Enter Your Search Data";
  }
  else
  {
    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["searchText"]))
      {
        $searchError = "Only letters allowed";
      }
      else
      {
          $searchText=$_POST["searchText"];
      }
  }
}


$getServiceNamequery="SELECT * FROM SellerAds WHERE Service_approved=1";
$serviceNameResult=$newConn->GetData($getServiceNamequery);
           if (!empty($serviceNameResult->num_rows)&&!empty($searchText))
           {
             // output data of each row
             while($row = $serviceNameResult->fetch_assoc()) 
             {
               $SerName = $row["Service_name"];
               if(strpos(strtoupper($SerName), strtoupper($searchText)) !== false)
               {
                //echo "Word Found!";
                array_push($id,$row["Service_id"]);     
                $ErrorResult="Search Result";   
               } 
             }
           } 
           else
            {
              $ErrorResult="No Data Found";
            }

            $length = count($id);
            for ($i = 0; $i < $length; $i++) {
              //print $id[$i];
              $getServicequery="SELECT * FROM SellerAds WHERE Service_id=".$id[$i]."";
               array_push($resultService,$newConn->GetData($getServicequery));
            }
             


$query = "SELECT * FROM SellerAds WHERE Service_name='.$searchText.'";

$result=$newConn->GetData($query);

if(!empty($result->num_rows))
{
  return $result;
}
else
{
  $result=null;
  return $result;
}
?>