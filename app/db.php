<?php

class Db
{
  private $servername = "localhost";
  private $username   = "root";
  private $password   ="123";
  private $dbname     = "Sample";
  static private $conn;

   private function __construct()
   {
     echo "Db constructor <br>";
     self :: $conn = new mysqli($this->servername , $this->username ,$this->password,$this->dbname);

   }
   public function getConn()
   {
     if (!isset(self :: $conn )) {
        // echo "Object already created <br>";
        self :: $conn = new Db();
      // count = 1;

     }
        return self :: $conn ;

   }


}
 ?>
