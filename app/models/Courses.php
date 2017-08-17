<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class Courses extends  Eloquent
 {


   protected $fillable = ['c_id' , 'c_name' , 'c_dept'];
   public $timestamp = [];
   public function crud($method)
   {
       $obj = new Dbal();
       //$data = "";
       //echo "this is model <br>";

       if (method_exists(get_called_class(),$method)) {

            $data = $obj->crud(get_called_class(),$method);
            return $data;
       }
  /*
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
*/
       //$data =  $obj->$method();

   }
   public function createCourse()
   {

       Courses::create([
          'c_id' => $_POST['c_id'] ,
          'c_name' => $_POST['c_name'] ,
          'c_dept'    => $_POST['c_dept']
     ]);
    // $this->view('course/createCourse');
   }

   public function showAllCourse()
   {
      echo "inside <br>";
      $users = Courses :: all();
      return $users ;
    //  $users = Capsule::table('Teachers')->get();
      //$this->view('course/showAllCourse',$users);
   }
   public function updateCourse()
   {
     $users =    Courses::where('c_id','=', $_POST['c_id'])
                  ->update(['c_name' =>  $_POST['c_name'] , 'c_dept' =>  $_POST['c_dept']] );
      return $users;
    //$this->view('course/updateCourse');
   }
   public function deleteCourse()
   {

      $users =  Courses ::where('c_id',$_POST['c_id'])->delete();
      //$this->view('course/deleteCourse');

   }
 }
 ?>
