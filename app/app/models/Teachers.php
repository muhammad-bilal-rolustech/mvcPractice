<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);

 use Illuminate\Database\Eloquent\Model  as Eloquent ;
 use app\models\std as std;

 /**
 *Model class for teachers .
 *
 */
 class Teachers extends  Eloquent
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
   protected $fillable = ['id' , 't_name' , 't_address','t_dept'];
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
   *Mothod to pick all  of the data from  database.
   *
   *@return data of student based on reltionship with pivot table.
   */
   public function std()
   {
        //$this->foreign('teacher_id')->references('t_id');
      return $this->belongsToMany('std', 'std_teacher','teacher_id','std_id');

   }
   /**
   *Mothod to pick all  of the data from  database.
   *
   *@return data of student based on reltionship with pivot table
   */
   public function showAll()
   {
       $user = Teachers :: find($_POST['id'])->std()->get();
       return $user;
   }
   /**
   *Mothod to create new record
   *
   *@return $data this parameter tells that row is inserted or not
   */
   public function createTeacher()
   {

      Teachers::create([
          'id' => $_POST['t_id'] ,
          't_name' => $_POST['t_name'] ,
          't_address' =>$_POST['t_address'] ,
          't_dept'    => $_POST['t_dept']
     ]);


   }
   /**
   *Mothod to pick all  of the data from  database
   *
   *@return $users paramaeter having all Teachers info
   */
   public function showAllTeacher()
   {
      echo "inside <br>";
      $users = Teachers :: all();
      return $users;

   }
   /**
   *Mothod to update   data of Teacher in  database.
   *
   *@return $user paramaeter tells that row is updated or not
   */
   public function updateTeacher()
   {
      $users =    Teachers::where('id','=', $_POST['t_id'])
                  ->update(['t_name' => $_POST['t_name'],'t_address' => $_POST['t_address'], 't_dept' =>  $_POST['t_dept']] );


   }
   /**
   *Mothod to delete  data of teacher in  database.
   *
   *@return $user paramaeter tells that row is deleted  or not
   */
   public function deleteTeacher()
   {

      $user =  Teachers ::where('id', $_POST['t_id'])->delete();

      return $user ;


   }
 }
 ?>
