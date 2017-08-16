<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Student extends Controller
 {
   protected $std ;
   protected $dbal ;
   public function __construct()
   {

    //  $this->std1 = $this->model("std");
      $this->dbal = new Dbal();
      $obj = new ModelFactry();

      $this->std = $obj->makeModel('std');

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
    //  $this->std->createStudent();
    $users = $this->dbal->InsertRecord("std");
     $this->view('student/createStudent');

  }

   public function showAllStudent()
   {
      //$users =  $this->std->showAllStudent();
      echo "echo here";
      $users = $this->dbal->showAllRecord("std");
     $this->view('student/showAllStudent',$users);

   }
   public function updateStudent()
   {
      $this->dbal->updateRecord("std");
      $this->view('student/updateStudent');


   }
   public function deleteStudent()
   {
     $user =  $this->dbal->deleteRecord("std");
     if(!is_null($user))
     {
       $this->view('student/deleteStudent');

     }

   }

 }

 ?>
