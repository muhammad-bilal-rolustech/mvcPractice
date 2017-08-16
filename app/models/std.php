<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);
use Illuminate\Database\Capsule\Manager as Capsule ;

 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class std extends  Eloquent
 {


   protected $fillable = ['id' , 'name' , 'degree' ,'address'];
   public $timestamp = [];




   public function crud($method)
   {
       $obj = new Dbal();
       $data = "";
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
   public function showAllStudent()
   {
      //  echo "inside is is <br>";
    //  dd(std::where('id','=' , 10)->first()->name);
      //dd(std::find(20)->name);
      $users = Capsule::table('stds')->get();
      return $users ;
    // $this->view('student/showAllStudent',$users);

   }
           public function createStudent()
           {
             $data=  std::create([
                  'id' => $_POST['id'] ,
                  'name' => $_POST['name'] ,
                  'degree' => $_POST['degree'] ,
                  'address' =>$_POST['address']
             ]);
          //   $this->view('student/createStudent');
               return $data;
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
           //  $this->view('student/updateStudent');
              return $user;

          }
          public function deleteStudent()
          {
           // echo "in delete";
            $user =  std::find($_POST['id']);
            if(!is_null($user))
            {
              $user->delete();
            }
            return $user ;
           // $this->view('student/deleteStudent');

          }
/*
   public function InsertRecord()
   {
      std::create([
          'id' => $_POST['id'] ,
          'name' => $_POST['name'] ,
          'degree' => $_POST['degree'] ,
          'address' =>$_POST['address']
     ]);
  //   $this->view('student/createStudent');

  }

   public function showAllStudent()
   {
      echo "inside <br>";
    //  dd(std::where('id','=' , 10)->first()->name);
      //dd(std::find(20)->name);
    //  $users = Capsule::table('stds')->get();
      //return $users ;
    // $this->view('student/showAllStudent',$users);

   }
   public function updateRecord()
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
    //  $this->view('student/updateStudent');


   }
   public function deleteRecord()
   {
     echo "in delete";
     $user =  std::find($_POST['id']);
     if(!is_null($user))
     {
       $user->delete();
     }
     return $user ;
    // $this->view('student/deleteStudent');

   }
*/

 }
 ?>
