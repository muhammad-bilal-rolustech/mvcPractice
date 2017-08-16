<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Teachers extends  Eloquent
 {


   protected $fillable = ['t_id' , 't_name' , 't_address','t_dept'];
   public $timestamp = [];

   public function crud($method)
   {
       $obj = new Dbal();
       //$data = "";
       //echo "this is model <br>";
        if (strpos($method, 'show') !== false) {
            //echo "this is inside model <br>";
          $data =   $obj->showAllRecord(get_called_class(),$method);
          return $data;
        }
        else if (strpos($method, 'create') !== false) {
              $data =   $obj->InsertRecord(get_called_class(),$method);
              return $data ;
        }  else if (strpos($method, 'update') !== false) {
                $data =   $obj->updateRecord(get_called_class(),$method);
                return $data ;
          }  else if (strpos($method, 'delete') !== false) {
                  $data =   $obj->deleteRecord(get_called_class(),$method);
                  return $data ;
            }

       //$data =  $obj->$method();

   }

   public function createTeacher()
   {

      Teachers::create([
          't_id' => $_POST['t_id'] ,
          't_name' => $_POST['t_name'] ,
          't_address' =>$_POST['t_address'] ,
          't_dept'    => $_POST['t_dept']
     ]);
    // $this->view('teacher/createTeacher');

   }

   public function showAllTeacher()
   {
      echo "inside <br>";
      $users = Teachers :: all();
      return $users;
    //  $users = Capsule::table('Teachers')->get();
  //  $this->view('teacher/showAllTeacher',$users);

   }
   public function updateTeacher()
   {
     $users =    Teachers::where('t_id','=', $_POST['t_id'])
                  ->update(['t_name' => $_POST['t_name'],'t_address' => $_POST['t_address'], 't_dept' =>  $_POST['t_dept']] );

    //    $this->view('teacher/updateTeacher');

    //  $this-view('teacher/updateTeacher');
   }
   public function deleteTeacher()
   {

      $user =  Teachers ::where('t_id', $_POST['t_id'])->delete();

      return $user ;
    //  $this->view('teacher/deleteTeacher');

   }
 }
 ?>
