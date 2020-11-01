<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <table style="width:50%">
<tr>
        <th><a href="Home.php"><h1>Home</h1></a></th>
        <th><a href="LoginAction/Rent.php"><h1>Rent</h1></a></th>
        <th><a href="LoginAction/Ah1out.php"><h1>About</h1></a></th>
        <th><a href="LoginAction/Profile.php"><h1>Profile</h1></a></th>
</tr>
        

    </table><br><br><br>


    <table style="width:50%">

    <tr>
      <td><img src="PictureSources/download.jpg" alt=""></td>
      <td>Details</td>
    </tr>

    <tr>
      <td><br></td>
    </tr>

    <tr>
      <td><img src="PictureSources/download.jpg" alt=""></td>
      <td>Details</td>
    </tr>

    <tr>
      <td><br></td>
    </tr>
  
  </table>

  <?php 
  if($_GET["fName"]==""||$_GET["userEmail"]==""||$_GET["UserType"]=="")
  {
    echo "You Need To Login First.";
  }
  else
  {
    echo "UserName : ";
    echo $_GET["fName"];
    echo nl2br("\n");
    echo "Email Address : ";
    echo $_GET["userEmail"];
    echo nl2br("\n");
    echo "User As : ";
    echo $_GET["UserType"];
  }
  
 ?>
 


  </body>
</html>
