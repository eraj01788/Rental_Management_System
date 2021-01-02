<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../css/main2.css">
      <link rel="stylesheet" href="../css/login.css">
      <script src="../js/forgotpass.js"></script>
   </head>
   <body>
      <div class="header">
         <h1>Rental Management System</h1>
      </div>
      <div class="topnav">
         <a href="#">
            <h2>Home</h2>
         </a>
         <a href="#">
            <h2>BrowseAds</h2>
         </a>
         <a href="#">
            <h2>Categorise</h2>
         </a>
         <a href="#">
            <h2>Profile</h2>
         </a>
      </div>

      <div class="forgotpassfield">
          <p id="mytext"></p>

          <div class="cngpass">
          <table>
                   <tr>
                     <td><label for="ChooseStuff">Type Of Account </label></td>
                     <td>
                        : <input type="radio" value="Buyer" name="UserType" id="radio" >Buyer
                        <input type="radio" value="Seller" name="UserType" id="radio" >Seller
                        <input type="radio" value="Admin" name="UserType" id="radio" >Admin
                        <br>
                     </td> 
                  </tr>
              <tr>
                  <td><label for="">Email Address</label></td>
                  <td><input id="emailtxt" type="text"></td>
              </tr>
              <tr>
                  <td><label for="">Password</label></td>
                  <td><input id="passtxt" type="password"></td>
              </tr>
              <tr>
                  <td><label for="">Confirm Password</label></td>
                  <td><input id="conpasstxt" type="password"></td>
              </tr>
              <tr>
                  <td></td>
                  <td><button class="cngpassbtn" onclick="cngPass()">Save</button></td>
              </tr>
          </table>
          </div>
          

      </div>

</html>