<?php
   include('../control/logincheck.php');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../css/main2.css">
      <link rel="stylesheet" href="../css/login.css">
      <script src="../js/loginvalid.js"></script>
   </head>
   <body>

         <h1 class="head" align=center>Rental Management System</h1>
      
      
      <div class="loginandsignup">

      <div class="logintext">
      <h2>Login</h2>
      </div>
      
         <div class="loginaction">
            <form action="" onsubmit="return loginValid()" method="post" >
               <table>
                  <tr>
                     <td><label for="ChooseStuff">Type Of Account </label></td>
                     <td>
                        : <input type="radio" value="Buyer" name="UserType" id="radio" >Buyer
                        <input type="radio" value="Seller" name="UserType" id="radio" >Seller
                        <input type="radio" value="Admin" name="UserType" id="radio" >Admin
                        <br>
                     </td>
                     <td class="errortext"><?php echo $UserTypeError?></td>
                     
                  </tr>
                  <tr>
                     <td><label for="Username">Enter your username : </label></td>
                     <td><input type="text" name="username" placeholder="User Name" id="username"></td>
                     <td class="errortext"><?php echo $UserNameError?></td>
                  </tr>
                  <tr>
                     <td><label for="Password">Enter your password : </label></td>
                     <td><input type="password" name="password" placeholder="Password" id="pass"></td>
                     <td class="errortext"><?php echo $PasswordError?></td>
                  </tr>
               </table>
               <input name="submit" class="loginbtn" type="submit" value="LOGIN">
               <br><br>

               <a class="forgotpassbtn" href="forgotpass.php">Forgot Password</a>
            </form>
         </div>

         <div class="signupaction">
            <form action="SignUp.php"method="get">
               <label for="SignUp" class="signuptext">Don't Have Account SignUp First. </label>
               <br>
               <input name="SignUpBtn" class="signupbtn" type="submit" value="SignUp">
            </form>
         </div>

         <h4 class="errortext"><?php echo $userError?></h4>


      </div>
      <br>
   </body>
</html>
<?php
   include('MainFooter.php');
   ?>