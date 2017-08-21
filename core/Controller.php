<?php

 class Controller
 {

   protected function model($model)
   {
      $modelfactory = new ModelFactry();
      $model = $modelfactory->makeModel($model);
       if (isset($model)) {
          // echo $model."in model <br>";
          // require_once "../app/models/".$model.".php";
           return  $model;
       }else {
             echo "Not in ,model <br>";
       }

   }

   protected function view($view ,$data = [])
   {
     //echo $view . "<br>";
             if (file_exists( "../app/views/".$view.".php")) {
               //echo $view ."   in view <br>";
                 require_once  "../app/views/".$view.".php" ;
             }else {
                 echo "NO view Found <br>";
             }



   }
   protected function viewTemplate($view ,$data = [])
   {
     //echo $view . "<br>";
             if (file_exists( "../app/views/templates/".$view.".tpl")) {
               //echo $view ."   in view <br>";
                 require_once  "../app/views/templates/".$view.".tpl" ;
             }else {
                 echo "NO viewTemplate Found <br>";
             }



   }


 }
 ?>
