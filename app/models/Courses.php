<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Courses extends  Eloquent
 {


   protected $fillable = ['c_id' , 'c_name' , 'c_dept'];
   public $timestamp = [];
   public function InsertRecord()
   {

       Courses::create([
          'c_id' => $_POST['c_id'] ,
          'c_name' => $_POST['c_name'] ,
          'c_dept'    => $_POST['c_dept']
     ]);
    // $this->view('course/createCourse');
   }

   public function showAllRecord()
   {
      echo "inside <br>";
      $users = Courses :: all();
      return $users ;
    //  $users = Capsule::table('Teachers')->get();
      //$this->view('course/showAllCourse',$users);
   }
   public function updateRecord()
   {
     $users =    Courses::where('c_id','=', $_POST['c_id'])
                  ->update(['c_name' =>  $_POST['c_name'] , 'c_dept' =>  $_POST['c_dept']] );
      return $users;
    //$this->view('course/updateCourse');
   }
   public function deleteRecord()
   {

      $users =  Courses ::where('c_id',$_POST['c_id'])->delete();
      //$this->view('course/deleteCourse');

   }
 }
 ?>
