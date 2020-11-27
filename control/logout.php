<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../view/Login.php"); // Redirecting To Login Page
}
?>