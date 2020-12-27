<?php 
include ('DataAccess.php');

class BrowseAdsControl
{
  public $newConn;
  private $query;
  public $filterWord;
  function __construct()
  {
    $this->newConn = new DataAccess();
    $this->query = "SELECT * FROM SellerAds WHERE Service_approved=1";
    
  }

function GetAllAds()
{
  $Allresult=$this->newConn->GetData($this->query);
  return $Allresult;
}
function FilterAds($fq)
{
  $Allresult=$this->newConn->GetData($fq);
  return $Allresult;
}

}


$allAds=new BrowseAdsControl();


if (isset($_POST['searchBtn'])&&!empty($_POST["searchtext"]))
{
  $filterQuery="SELECT * FROM `sellerads` WHERE CONCAT(`Service_name`, `Service_price`, `Service_details`)LIKE '%".$_POST['searchtext']."%'";
  $result = $allAds->FilterAds($filterQuery);
}
else
{
  $result = $allAds->GetAllAds();
}
        
?>