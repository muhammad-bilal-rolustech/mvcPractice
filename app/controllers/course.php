<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;

/**
*Controller class for Course .
*
*/
 class Course extends Controller
 {
   /**
   *Class attribute to contain its Object .
   *
   */
    protected $Course ;
    /**
    *Class attribute to contain its view info.
    *
    */
    protected $v ;
   

    /**
    *Constructor method for Course .
    *
    */
   public function __construct()
   {

      $this->v = 'course' ;
      $obj = new ModelFactry();
      $this->Course = $this->model("Courses");

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
           $data =  $this->Course->crud($url[1]);
           $this->view($this->v."/".$url[1],$data);


     }
   }

   public function index()
   {

       $this->view('course/index');
   }


 }

 ?>
