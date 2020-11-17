<?php
class DataAccess{
   public $conn;

   function __construct() 
   {
    $this->conn = new mysqli("localhost", "root", "", "RentManagement");
   }

   function GetData($sqlQuery)
   {
      
   }

   // function CheckUser($conn,$table,$username,$password)
   // {
   //    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
   //    return $result;
   // }

   function SetData($sqlQuery)
   {
      if ($this->conn->query($sqlQuery) === TRUE)
       {
         return true;
       } 
       else 
       {
         return false;
       }
   }
   
   function __destruct()
   {
      $this->conn->close();
   }

}
?>