<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <table style="width:50%">
      <tr>
        <th><a href="../Home.php"><h1>Home</h1></a></th>
        <th><a href="Rent.php"><h1>Rent</h1></a></th>
        <th><a href="About.php"><h1>About</h1></a></th>
        <th><a href="Profile.php"><h1>Profile</h1></a></th>
      </tr>
    </table>
     <br><br>

 <?php
$UserType=$fName=$userEmail=$userName=$gender=$DOB="";
$UserTypeError=$fNameError=$userEmailError=$userNameError=$genderError=$DOBError="";
$variable12="Erajjj";
if($_SERVER["REQUEST_METHOD"] == "POST")
{


  echo "Hello";
  $variable1="Hello World";

  if(empty($_POST["UserType"]))
  {
     $UserTypeError="Select User Type";
  }
  else
  {
    $UserType=$_POST["UserType"];
  }

  if(empty($_POST["fName"]))
  {
     $fNameError="Enter Your Name";
  }
  else
  {
    $fName=$_POST["fName"];
  }

  if(empty($_POST["userEmail"]))
  {
     $userEmailError="Enter Your Email";
  }
  else
  {
    $userEmail=$_POST["userEmail"];
  }

  if(empty($_POST["userName"]))
  {
     $userNameError="Enter Your UserName";
  }
  else
  {
    $userName=$_POST["userName"];
  }

  if(empty($_POST["gender"]))
  {
     $genderError="Select Your Gender";
  }
  else
  {
    $gender=$_POST["gender"];
  }

  if(empty($_POST["DOB"]))
  {
     $DOBError="Enter Your DOB";
  }
  else
  {
    $DOB=$_POST["DOB"];
  }

}

?>
    
     <fieldset style="width:50%">
       <legend>SignUp</legend>
       <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" metdod="POST">
       <table>

         <tr>
         <td><label for="ChooseStuff">Which Type Of Account You Want To Create!</label><td>
         <td><select name="UserType">
                    <option value="Buyer">Buyer</option>
                    <option value="Seller">Seller</option>
             </select> <?php echo $variable1;?>
        </td>
         </tr>
         

         <tr>
           <td><br></td>
         </tr>

            <tr>
            <td><label for="Name">Name</label><td>
            <td>: <input type="text" name="fName" placeholder="Name" ></td><?php echo $fNameError;?>
            </tr>
            <tr>
            <td><label for="Email">Email</label><td>
            <td>: <input type="email" name="userEmail" placeholder="Email" ></td><?php echo $userEmailError;?>
            </tr>
            <tr>
            <td><label for="username">User Name</label></td>
            <td>: <input type="text"placeholder="User Name" name ="userName"></td><?php echo $userNameError;?>
            </tr>
            <tr>
            <td><label for="password">Password</label></td>
            <td>: <input type="password"placeholder="Password" ></td>
            </tr>
            <tr>
            <td><label for="confirm password">Confirm Password</label></td>
            <td>: <input type="password"placeholder="Confirm Password" ></td>
            </tr>
        </table>

        <table>
            <label for="Gender">Gender :</label>
            <tr><input type="radio" name="gender" id="" >Male</tr>
            <tr><input type="radio" name="gender" id="" >Female</tr>
            <tr><input type="radio" name="gender" id="" >Other</tr>
            <?php echo $genderError;?>
        </table>
        <table>
            <label for="DateOfBirth">Date Of Birth :</label>
            <tr><input type="date" name="DOB" id="" ></tr><?php echo $DOBError;?>
        </table>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
     </fieldset>

     <?php echo $variable12;?>
     

  </body>
</html>
