<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Course extends Controller
 {
   protected $Course ;
    protected $dbal ;

   public function __construct()
   {
      $this->dbal = new Dbal();
    //  $obj = new ModelFactry();
      //$this->Course = $this->model("Courses");

    //  $this->Course = $obj->makeModel('Courses');


   }

   public function index()
   {

       $this->view('course/index');
   }
  
   public function createCourse()
   {
    //  $this->Course->createCourse();
      $users = $this->dbal->InsertRecord("Courses");
      $this->view('course/createCourse');
   }

   public function showAllcourse()
   {
      $users = $this->dbal->showAllRecord("Courses");
      $this->view('course/showAllCourse',$users);

    //$this->modelc('Courses/showAllcourse');

   }
   public function updateCourse()
   {
     $this->dbal->updateRecord("Courses");
     $this->view('course/updateCourse');
   }
   public function deleteCourse()
   {

      $users =  $this->dbal->deleteRecord("Courses");
      $this->view('course/deleteCourse');

   }

 }

 ?>
