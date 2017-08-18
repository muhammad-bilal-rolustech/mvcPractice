<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);
use Illuminate\Database\Capsule\Manager as Capsule ;
  class Dbal
  {
     /**
     *Class attribute to contain model  Object and its method  .
     *
     */
      private $model,$obj;

      /**
      *Class Constructor. .
      *
      */
      public function __construct()
      {
        $this->obj = new ModelFactry();

      }
      /**
      *Mothod for incoming crud requests and render them to dbal.
      *
      *@param $method parameter to validate and call that method
      *@param $model4 for model object
      *@return data after completion of crud opertion
      */
      public function crud($model4,$method4)
      {
          $this->model = $this->obj->makeModel($model4);
          $users = $this->model->$method4();
          return $users;
      }


/*
        public function InsertRecord($model3,$method3)
        {
               $this->model = $this->obj->makeModel($model3);
                $this->model->$method3();

        }
        public function updateRecord($model1,$method1)
        {
           $this->model = $this->obj->makeModel($model1);
            $this->model->$method1();
        }

          public function showAllRecord($model2 ,$method2)
          {
              $this->model = $this->obj->makeModel($model2);
              $users = $this->model->$method2();
              return $users;
          }
          public function deleteRecord($model4,$method4)
          {
              $this->model = $this->obj->makeModel($model4);
              $users = $this->model->$method4();
              return $users;
          }
          */




  }
 ?>
