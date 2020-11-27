<?php
include('../control/logincheck.php');

// if(isset($_SESSION['username'])){
// header("location: Home.php");
// }
?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">

 <table>

      <tr>
         <td><label for="ChooseStuff">Type Of Account </label></td>
                        
            <td>
                : <input type="radio" value="Buyer" name="UserType" id="" >Buyer
                 <input type="radio" value="Seller" name="UserType" id="" >Seller
                 <input type="radio" value="Admin" name="UserType" id="" >Admin
            </td>
            <td><?php echo $UserTypeError?></td>
                        
     </tr>

     <tr>
         <td><label for="Username">Enter your username : </label></td>
         <td><input type="text" name="username" placeholder="User Name"></td>  
         <td><?php echo $UserNameError?></td>
     </tr>

     <tr>
     <td><label for="Password">Enter your password : </label></td>
     <td><input type="password" name="password" placeholder="Password"></td>
     <td><?php echo $PasswordError?></td>
     </tr>

 </table> 

 <input name="submit" type="submit" value="LOGIN">
</form>


<form action="SignUp.php"method="get">
    <label for="SignUp">Don't Have Account SignUp First. </label>
    <input name="SignUpBtn" type="submit" value="SignUp">
</form>

<br>
</body>
</html>