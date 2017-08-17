<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;

/**
*Controller class for Teacher .
*
*/
 class Teacher extends Controller
 {
   /**
   *Class attribute to contain its Object .
   *
   */
   protected $teacher ;
   /**
   *Class attribute to contain its view .
   *
   */
   protected $v ;
   /**
   *Constructor method for Teacher .
   *
   */
   public function __construct()
   {

      $this->v = 'teacher' ;
      $obj = new ModelFactry();
      $this->teacher = $obj->makeModel('Teachers');

   }


   /**
   *Mothod for incoming crud requests and render them to model
   *recieves data from model and send it to the corresponding view.
   *
   */
   public function crud()
   {
     if (isset($_GET['url'])) {

          $url =  explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));
          $data =  $this->teacher->crud($url[1]);
          $this->view($this->v."/".$url[1],$data);
     }
   }
   public function index()
   {

       $this->view('teacher/index');
   }




 }

 ?>
