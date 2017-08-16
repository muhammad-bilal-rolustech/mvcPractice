<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Teacher extends Controller
 {
   protected $teacher ;
   protected $dbal ;
   public function __construct()
   {

    //  $this->teacher = $this->model("Teachers");
      $this->dbal = new Dbal();
    //  $obj = new ModelFactry();
    //$this->Course = $this->model("Courses");
      //$this->teacher = $obj->makeModel('Teachers');

   }
   public function index()
   {

       $this->view('teacher/index');
   }

   public function createTeacher()
   {

     $this->dbal->InsertRecord("Teachers");
     $this->view('teacher/createTeacher');

   }

   public function showAllTeacher()
   {
      echo "inside <br>";
        $users = $this->dbal->showAllRecord("Teachers");
    //  $users = Capsule::table('Teachers')->get();
    $this->view('teacher/showAllTeacher',$users);

   }
   public function updateTeacher()
   {
       $this->dbal->updateRecord("Teachers");
        $this->view('teacher/updateTeacher');

    //  $this-view('teacher/updateTeacher');
   }
   public function deleteTeacher()
   {

      $user =   $this->dbal->deleteRecord("Teachers");
      $this->view('teacher/deleteTeacher');

   }

 }

 ?>
