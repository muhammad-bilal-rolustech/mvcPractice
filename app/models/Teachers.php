<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Teachers extends  Eloquent
 {


   protected $fillable = ['t_id' , 't_name' , 't_address','t_dept'];
   public $timestamp = [];


   public function InsertRecord()
   {

      Teachers::create([
          't_id' => $_POST['t_id'] ,
          't_name' => $_POST['t_name'] ,
          't_address' =>$_POST['t_address'] ,
          't_dept'    => $_POST['t_dept']
     ]);
    // $this->view('teacher/createTeacher');

   }

   public function showAllRecord()
   {
      echo "inside <br>";
      $users = Teachers :: all();
      return $users;
    //  $users = Capsule::table('Teachers')->get();
  //  $this->view('teacher/showAllTeacher',$users);

   }
   public function updateRecord()
   {
     $users =    Teachers::where('t_id','=', $_POST['t_id'])
                  ->update(['t_name' => $_POST['t_name'],'t_address' => $_POST['t_address'], 't_dept' =>  $_POST['t_dept']] );

    //    $this->view('teacher/updateTeacher');

    //  $this-view('teacher/updateTeacher');
   }
   public function deleteRecord()
   {

      $user =  Teachers ::where('t_id', $_POST['t_id'])->delete();

      return $user ;
    //  $this->view('teacher/deleteTeacher');

   }
 }
 ?>
