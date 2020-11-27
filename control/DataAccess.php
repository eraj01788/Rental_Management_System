<?php
class DataAccess{
   public $conn;

   function __construct() 
   {
    $this->conn = new mysqli("localhost", "root", "", "RentManagement");
   }

   function GetData($sqlQuery)
   {
      $result=$this->conn->query($sqlQuery);
      if(!empty($result->num_rows))
      {
         return $result;         
      }
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