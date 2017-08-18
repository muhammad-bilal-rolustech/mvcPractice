<?php

 class Home extends Controller
 {


   public function index($firstName = '',$lastName = 'd')
   {
      // echo $firstName. "   ss  ".$lastName . "<br>";
       $this->view('home/index');
   }
   public function test()
   {

     echo "test";
   }

 }
 ?>
