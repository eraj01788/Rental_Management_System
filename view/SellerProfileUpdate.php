<?php
include('MainHeader.php');
include ('../control/SellerProfileUpdateControl.php'); 
if(empty($_SESSION["username"])||empty($_SESSION["UserType"])) 
{
  header("Location: Login.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <script src="../js/sellerupdatepass.js"></script>
  </head>
  <body>

    <fieldset style="width:40%">
        <legend><b>Profile Update</b></legend>
        <form method="POST" enctype="multipart/form-data">
            <table>

                <tr>
                    <td><label for="">Contact Number :</label></td>
                    <td><td><input type="text" name="UsellerContact" value=<?php echo $sellerContact; ?>></td></td>
                    <td><?php echo $contactNoError?></td>
                </tr>

                <tr>
                <td><label for="">Address :</label></td>
                    <td><td><input type="text" name="UsellerAddress" value=<?php echo $sellerAddress; ?>></td></td>
                    <td><?php echo $userAddressError?></td>
                </tr>

                <tr>
                    <td><label for="">Update Image</label></td>
                    <td><img src="<?php echo $sellerImage; ?>" alt="Profile Image" width="100" height="100"> </td>
                    <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    <td><?php echo $FileError;?></td>
                </tr>

                <tr>
                <td></td>
                <td><input name="UpdatePro" type="submit" value="Update"></td>
              </tr>

                <tr>
                    <td><br><br></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <button class="updatepassbtn" onclick="sellerupdatepass()">Click Here Update Password</button>

    <div id="uppas">
      <input type="password" id="pass" placeholder="Password"><br><br>
      <input type="password" id="conpass" placeholder="Confirm Password"><br><br>
      <button class="savepass" onclick="savepassvalid()">Save</button>
    </div>

    <p id="mytext"></p>

  </body>
</html>
