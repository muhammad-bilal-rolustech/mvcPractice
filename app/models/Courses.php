<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;
 /**
 *Model class for Course .
 *
 */
 class Courses extends  Eloquent
 {
   /**
   *Class attribute to contain dbal Object .
   *
   */
   private $obj;
   /**
   *Class attribute to contain fillable table columns .
   *
   */
   protected $fillable = ['c_id' , 'c_name' , 'c_dept'];
   /**
   *Class attribute to contain rows creation and  updation time in database .
   *
   */
   public $timestamp = [];

   /**
   *Mothod for incoming crud requests and render them to dbal.
   *
   *@param $method parameter to validate and call that method
   *@return data after completion of crud opertion
   */
   public function crud($method)
   {
       $obj = new Dbal();
       if (method_exists(get_called_class(),$method)) {

             $data = $obj->crud(get_called_class(),$method);
             return $data;
         }

   }
   /**
   *Mothod to create new record.
   *
   *@return $data this parameter tells that row is inserted or not
   */
   public function createCourse()
   {

       Courses::create([
          'c_id' => $_POST['c_id'] ,
          'c_name' => $_POST['c_name'] ,
          'c_dept'    => $_POST['c_dept']
       ]);

   }
   /**
   *Mothod to pick all  of the data from  database.
   *
   *@return $users paramaeter having all Courses info
   */
   public function showAllCourse()
   {
      echo "inside <br>";
      $users = Courses :: all();
      return $users ;
   }
   /**
   *Mothod to update   data of Course in  database.
   *
   *@return $user paramaeter tells that row is updated or not
   */
   public function updateCourse()
   {
     $users =    Courses::where('c_id','=', $_POST['c_id'])
                  ->update(['c_name' =>  $_POST['c_name'] , 'c_dept' =>  $_POST['c_dept']] );
      return $users;
    //$this->view('course/updateCourse');
   }
   /**
   *Mothod to delete  data of Course in  database.
   *
   *@return $user paramaeter tells that row is deleted  or not
   */
   public function deleteCourse()
   {

      $users =  Courses ::where('c_id',$_POST['c_id'])->delete();
      //$this->view('course/deleteCourse');

   }
 }
 ?>
