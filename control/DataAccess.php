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