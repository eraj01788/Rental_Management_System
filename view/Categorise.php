<?php
include('MainHeader.php');
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="../css/browse.css">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
  
  <h1 align=center>Please Search Your Interest Here</h1>
  <br>
  <br>
  
  
  <div class="StyleAds">
  <ul id="mytext">
  <form action="" method="POST">  
  <?php
    include('../control/DataAccess.php');
    $query ="SELECT DISTINCT Service_Location FROM sellerads";
    $newConn1=new DataAccess(); //obejct creation into a var

    $value = $newConn1->getdata($query);  //query execution
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name='Location'>"; //start combo
        

        while ($row = $value->fetch_assoc()) //

            echo "<option value='$row[Service_Location]'>$row[Service_Location]</option>";   //combox value from db
           

        echo "</select>";
        echo "<input type='Submit' name='Search' value='Search'>";
    
    if(isset($_POST['Search']))  //form submit btn true
    {
      $location = $_POST['Location'];
      $query = "SELECT * from sellerads where Service_Location='$location'";
      
      $value = $newConn1->getdata($query);
      while ($row = $value->fetch_assoc())
        echo "<br><img src='$row[Service_image]' class='simage' alt=''>
              <br>$row[Service_name]
              <br>$row[Service_price]
              <br>$row[Service_details]
              <br>
              <br><a class='sellerprofilebtn' href='SellerContactPage.php?seller_id=$row[Seller_id]'>Contact With Seller</a>
              </br></br></br></br>
              ";
      
    }

  ?>
  </ul>
  </div>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </body>
</html>
<?php
include('MainFooter.php');
?>