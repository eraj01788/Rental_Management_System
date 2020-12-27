<?php
include('DataAccess.php');
if($_POST["uname"]!="")
{
    $searchData = new DataAccess();

    $searchSellerQuery="SELECT * FROM `seller` WHERE CONCAT(`username`, `Seller_name`, `Seller_contact`, `Seller_address`) LIKE '%".$_POST["uname"]."%'";

    $result=$searchData->GetData($searchSellerQuery);


             

    if(!empty($result->num_rows))
    {
        while($row = $result->fetch_assoc()) 
        {
             ?>
              <div class="sellermng">

                    <ul>
                      <li><img class="simage" src="<?php echo $row["Seller_image"]; ?>" alt="No Image" width="100" height="80"></li>
                      <li><h4><?php echo $row["Seller_name"];?></h4></li>
                      <li><a class="sellerprofilebtn" href="SellerContactPage.php?seller_id=<?php echo $row["username"]; ?>">Contact With Seller</a><br><br></li>
                      <li><a class="sellerprofilebtn" href="../control/removeseller.php?seller_id=<?php echo $row["username"]; ?>">Remove This Seller</a></li>
                    </ul>
              </div>

             <?php
        }
    }

}
else
{
    echo "No Seller Found";
}



?>
<style>
    a.sellerprofilebtn {
  background: #6b62f9;
  padding: 5px 20px;
  border-radius: 20px;
  margin: 10px 0px;
  text-decoration: none;
  color: #fff;
}

.sellerprofilebtn:hover {
  background: rgb(134, 123, 231);
  color: #000;
}


ul {
    list-style-type: none;
    margin: 20px 38%;
    padding: 8px;
    border: 2px solid;
}

</style>