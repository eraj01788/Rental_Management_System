<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Profile.php"); // Redirecting To Home Page
}
?>