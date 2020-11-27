<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SignUp</title>
    </head>
    <body>


        <?php
        include('../control/SignUpCheck.php');
        

        if(isset($_SESSION['userName'])||isset($_SESSION['userEmail']))
        {
            //header("location: Login.php");
        }
        else
        {
          //echo " Need SignUp. ";
        }
        ?>

        <fieldset style="width:50%">
            <legend>SignUp</legend>
            <form action="" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="ChooseStuff">Type Of Account </label></td>
                        
                        <td>
                        : <input type="radio" value="Buyer" name="UserType" id="" >Buyer
                            <input type="radio" value="Seller" name="UserType" id="" >Seller
                        </td>
                        <td><?php echo $UserTypeError?></td>
                        
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <td><label for="ChooseProfile">Choose Profile Image</label></td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        <td><?php echo $FileError;?></td>
                    </tr>


                    <tr>
                        <td><label for="Name">Name</label></td>
                        
                        <td>: <input type="text" name="fName" placeholder="Name" ></td>
                        <td><?php echo $fNameError?></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>                        
                        <td>: <input type="text" name="userEmail" placeholder="Email" ></td>
                        <td><?php echo $userEmailError?></td>
                    </tr>
                    <tr>
                        <td><label for="username">User Name</label></td>
                        <td>: <input type="text"placeholder="User Name" name ="userName"></td>
                        <td><?php echo $userNameError?></td>
                    </tr>


                    <tr>
                        <td><label for="contact">Contact</label></td>
                        <td>: <input type="text"placeholder="Contact" name ="contactNo"></td>
                        <td><?php echo $contactNoError?></td>
                    </tr>

                    <tr>
                        <td><label for="Useraddress">Useraddress</label></td>
                        <td>: <input type="text"placeholder="User Address" name ="userAddress"></td>
                        <td><?php echo $userAddressError?></td>
                    </tr>


                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>: <input type="password"name="Password" placeholder="Password" ></td>
                        <td><?php echo $PassError?></td>
                    </tr>
                    <tr>
                        <td><label for="confirm password">Confirm Password</label></td>
                        <td>: <input type="password" name="Password" placeholder="Confirm Password" ></td>
                        <td><?php echo $PassError?></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <label for="Gender">Gender  </label>
                        </td>
                        <td>
                            : <input type="radio" value="Male" name="gender" id="" >Male
                            <input type="radio" value="Female" name="gender" id="" >Female
                            <input type="radio" value="Others" name="gender" id="" >Other
                            
                        </td>
                        <td><?php echo $genderError?></td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
            </form>
        </fieldset>
        
        <br><br>
    </body>
</html>