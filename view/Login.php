<?php
include('../LoginAction/logincheck.php');

if(isset($_SESSION['username'])){
header("location: Home.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form action="" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input name="submit" type="submit" value="LOGIN">
</form>

<form action="SignUp.php"method="get">
    <label for="SignUp">Don't Have Account SignUp First. </label>
    <input name="SignUpBtn" type="submit" value="SignUp">
</form>

<br>
<?php echo $error; ?>

</body>
</html>