<?php
include('MainHeader.php');
include ('../control/AdminProfileUpdateControl.php'); 
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
  </head>
  <body>

    <fieldset style="width:40%">
        <legend><b>Profile Update</b></legend>
        <form method="POST" enctype="multipart/form-data">
            <table>

                <tr>
                    <td><label for="">Contact Number :</label></td>
                    <td><td><input type="text" name="UadminContact" value=<?php echo $adminContact; ?>></td></td>
                    <td><?php echo $contactNoError?></td>
                </tr>

                <tr>
                <td><label for="">Address :</label></td>
                    <td><td><input type="text" name="UadminAddress" value=<?php echo $adminAddress; ?>></td></td>
                    <td><?php echo $userAddressError?></td>
                </tr>

                <tr>
                    <td><label for="">Update Image</label></td>
                    <td><img src="<?php echo $adminImage; ?>" alt="Profile Image" width="100" height="100"> </td>
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


  </body>
</html>
