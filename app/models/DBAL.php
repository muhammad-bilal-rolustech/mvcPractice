<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);

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

  }
 ?>
