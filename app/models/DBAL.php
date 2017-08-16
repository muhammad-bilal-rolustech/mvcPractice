<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);
use Illuminate\Database\Capsule\Manager as Capsule ;
  class Dbal
  {
      private $model,$obj;
      public function __construct()
      {
        $this->obj = new ModelFactry();

      }
      public function InsertRecord($model3)
      {
             $this->model = $this->obj->makeModel($model3);
              $this->model->InsertRecord();

      }
      public function updateRecord($model1)
      {
         $this->model = $this->obj->makeModel($model1);
          $this->model->updateRecord();
      }

        public function showAllRecord($model2)
        {
            $this->model = $this->obj->makeModel($model2);
            $users = $this->model->showAllRecord();
            return $users;
        }
        public function deleteRecord($model4)
        {
            $this->model = $this->obj->makeModel($model4);
            $users = $this->model->deleteRecord();
            return $users;
        }
        public function crud()
        {
          echo "Dbal";
        }

        public function showAllStudent()
        {
             echo "inside is is <br>";
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

  }
 ?>
