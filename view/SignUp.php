
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>SignUp</title>
        <link rel="stylesheet" href="../css/main2.css">
        <link rel="stylesheet" href="../css/signup.css">
        <script src="../js/signupvalid.js"></script>
    </head>
    <body>



    <div class="header">
  <h1>Rental Management System</h1>
  </div>

  <div class="topnav">
  <a href="#"><h2>Home</h2></a>
  <a href="#"><h2>BrowseAds</h2></a>
  <a href="#"><h2>Categorise</h2></a>
  <a href="#"><h2>Profile</h2></a>

  </div>


        <?php
        include('../control/SignUpCheck.php');
        ?>

            <div class="mainsign">
                <h2 class="signhead">Sign Up</h2>
            <form action="" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="ChooseStuff">Type Of Account </label></td>
                        
                        <td>
                        : <input type="radio" value="Buyer" name="UserType" id="radio" >Buyer
                            <input type="radio" value="Seller" name="UserType" id="radio" >Seller
                        </td>
                        <td class="errortext"><?php echo $UserTypeError?></td>
                        
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>

                    <tr>
                        <td><label for="ChooseProfile">Choose Profile Image</label></td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                        <td class="errortext"><?php echo $FileError;?></td>
                    </tr>


                    <tr>
                        <td><label for="Name">Name</label></td>
                        
                        <td>: <input type="text" name="fName" placeholder="Name" id="fname" ></td>
                        <td class="errortext"><?php echo $fNameError?></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>                        
                        <td>: <input type="text" name="userEmail" placeholder="Email" id="email"></td>
                        <td class="errortext"><?php echo $userEmailError?></td>
                    </tr>
                    <tr>
                        <td><label for="username">User Name</label></td>
                        <td>: <input type="text"placeholder="User Name" name ="userName" id="username"></td>
                        <td class="errortext"><?php echo $userNameError?></td>
                    </tr>


                    <tr>
                        <td><label for="contact">Contact</label></td>
                        <td>: <input type="text"placeholder="Contact" name ="contactNo" id="contactnumber"></td>
                        <td class="errortext"><?php echo $contactNoError?></td>
                    </tr>

                    <tr>
                        <td><label for="Useraddress">Useraddress</label></td>
                        <td>: <input type="text"placeholder="User Address" name ="userAddress" id="useraddress"></td>
                        <td class="errortext"><?php echo $userAddressError?></td>
                    </tr>


                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>: <input type="password" id="pass" name="Password" placeholder="Password" ></td>
                        <td class="errortext"><?php echo $PassError?></td>
                    </tr>
                    <tr>
                        <td><label for="confirm password">Confirm Password</label></td>
                        <td>: <input type="password" id="conPass" name="Password" placeholder="Confirm Password" ></td>
                        <td class="errortext"><?php echo $PassError?></td>
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
                        <td class="errortext"><?php echo $genderError?></td>
                    </tr>
                </table>
                
                <input class="signupbtn" type="submit" name="submit" value="Submit">
                <input class="resetbtn" type="reset" name="reset" value="Reset">
            </form>
            </div>
        
        <br><br>
    </body>
</html>
<?php 
include('MainFooter.php');
?>