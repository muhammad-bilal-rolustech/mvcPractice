<?php

  class ControllerFactory
  {

    public function makeController($contr)
    {

      if (file_exists('../app/controllers/' .$contr. '.php') ) {
          require_once '../app/controllers/' .$contr. '.php';
          return new $contr();
      }else {

           echo  $contr."  unknown controller <br>";
      }

    //  throw new Exception('Unknown Controller');

    }
  }
 ?>
