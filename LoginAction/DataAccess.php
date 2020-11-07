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

   function SetData($sqlQuery)
   {
    $res = $this->conn->query($sqlQuery);
    return $res;
   }

}
?>