<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Student extends Controller
 {
   protected $std1 ;
   public function __construct()
   {

      $this->std1 = $this->model("std");
      //   echo $this->std1->name." is called <br>";
   }
   public function index()
   {
      // echo $firstName. "   ss  ".$lastName . "<br>";
       $this->view('student/index');
   }
   public function addStudent($id =0 , $name = '' ,$degree = '' , $address = '')
   {

       $std1->name = $name ;
       $std1->id = $id ;
       $std1->degree = $degree ;
       $std1->address = $address ;
       echo $std1->id."br";
       echo "in Student Controller <br>";

       $this->view("student/addStudent",['name' => $std1->name] );
   }
   public function createStudent()
   {
      std::create([
          'id' => $_POST['id'] ,
          'name' => $_POST['name'] ,
          'degree' => $_POST['degree'] ,
          'address' =>$_POST['address']
     ]);
     $this->view('student/createStudent');

  }

   public function showAllStudent()
   {
      echo "inside <br>";
    //  dd(std::where('id','=' , 10)->first()->name);
      //dd(std::find(20)->name);
      $users = Capsule::table('stds')->get();

     $this->view('student/showAllStudent',$users);

   }
   public function updateStudent()
   {
      $user =  std::find($_POST['id']);

      if ($_POST['name']!= '') {
        $user->name = $_POST['name'] ;


      }
      if ($_POST['degree'] != '') {
          $user->degree = $_POST['degree'];

      }
      if ($_POST['address']  != '') {
          $user->address = $_POST['address'] ;
      }

      $user->save();
      $this->view('student/updateStudent');


   }
   public function deleteStudent()
   {
     $user =  std::find($_POST['id']);
     if(!is_null($user))
     {
       $user->delete();
     }
     $this->view('student/deleteStudent');

   }

 }

 ?>
