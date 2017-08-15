<?php

  class ModelFactry
  {
     public function makeModel($model)
     {
        if (file_exists("../app/models/".$model.".php")) {
            require_once "../app/models/".$model.".php" ;
            return new $model();

        }
        throw new  Esxception("Unknown Model");

     }

  }

 ?>
