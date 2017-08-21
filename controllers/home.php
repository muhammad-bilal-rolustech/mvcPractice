<?php

 class Home extends Controller
 {


   public function index($firstName = '',$lastName = 'd')
   {
      // echo $firstName. "   ss  ".$lastName . "<br>";

    //   $s = new SmartyHeader();
    //   $arr =array('jesse' =>25 , 'a',10);
      // $s->smarty->assign('people',$arr);
    //   $s->smarty->display('../app/views/templates/index.tpl');

       $this->view('home/index');
   }
   public function test()
   {

     echo "test";
   }

 }
 ?>
