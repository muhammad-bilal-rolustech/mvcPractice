<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Teacher extends Controller
 {
   protected $teacher ;
   public function __construct()
   {

      $this->std1 = $this->model("Teachers");
      //   echo $this->std1->name." is called <br>";
   }
   public function index()
   {

       $this->view('teacher/index');
   }

   public function createTeacher()
   {

      Teachers::create([
          't_id' => $_POST['t_id'] ,
          't_name' => $_POST['t_name'] ,
          't_address' =>$_POST['t_address'] ,
          't_dept'    => $_POST['t_dept']
     ]);
     $this->view('teacher/createTeacher');

   }

   public function showAllTeacher()
   {
      echo "inside <br>";
      $users = Teachers :: all();
    //  $users = Capsule::table('Teachers')->get();
    $this->view('teacher/showAllTeacher',$users);

   }
   public function updateTeacher()
   {
     $users =    Teachers::where('t_id','=', $_POST['t_id'])
                  ->update(['t_name' => $_POST['t_name'],'t_address' => $_POST['t_address'], 't_dept' =>  $_POST['t_dept']] );

        $this->view('teacher/updateTeacher');

    //  $this-view('teacher/updateTeacher');
   }
   public function deleteTeacher()
   {

      $users =  Teachers ::where('t_id', $_POST['t_id'])->delete();
      $this->view('teacher/deleteTeacher');

   }

 }

 ?>
