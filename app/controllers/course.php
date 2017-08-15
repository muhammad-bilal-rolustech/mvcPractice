<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Course extends Controller
 {
   protected $Course ;
   public function __construct()
   {

      $this->Course = $this->model("Courses");
      //   echo $this->std1->name." is called <br>";
   }
   public function index()
   {

       $this->view('course/index');
   }
   public function createCourse()
   {

       Courses::create([
          'c_id' => $_POST['c_id'] ,
          'c_name' => $_POST['c_name'] ,
          'c_dept'    => $_POST['c_dept']
     ]);
     $this->view('course/createCourse');
   }

   public function showAllcourse()
   {
      echo "inside <br>";
      $users = Courses :: all();
    //  $users = Capsule::table('Teachers')->get();
      $this->view('course/showAllCourse',$users);
   }
   public function updateCourse()
   {
     $users =    Courses::where('c_id','=', $_POST['c_id'])
                  ->update(['c_name' =>  $_POST['c_name'] , 'c_dept' =>  $_POST['c_dept']] );

$this->view('course/updateCourse');
   }
   public function deleteCourse()
   {

      $users =  Courses ::where('c_id',$_POST['c_id'])->delete();
      $this->view('course/deleteCourse');

   }

 }

 ?>
