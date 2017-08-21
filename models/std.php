<?php

ini_set("display_errors" ,true);
error_reporting(E_ALL);
 use Illuminate\Database\Capsule\Manager as Capsule ;

 use Illuminate\Database\Eloquent\Model  as Eloquent ;
 use app\models\Teachers as Teacher;
 /**
 *Model class for student .
 *
 */
 class std extends  Eloquent
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
   protected $fillable = ['id' , 'name' , 'degree' ,'address'];
   /**
   *Class attribute to contain rows creation and  updation time in database .
   *
   */
   public $timestamp = [];

   /**
   *Constructor of Class  .
   *
   */
   public function __construct()
   {
       $this->obj = new Dbal();

   }
   /**
   *Mothod for incoming crud requests and render them to dbal
   *
   *@param $method parameter to validate and call that method
   *@return data after completion of crud opertion
   */
   public function crud($method)
   {

       $data = "";
       //echo "this is model <br>";
       if (method_exists(get_called_class(),$method)) {

            $data = $this->obj->crud(get_called_class(),$method);
            return $data;
       }

   }

   /**
   *Mothod to pick all  of the data from  database
   *
   *@return $users paramaeter having all students info
   */
   public function showAllStudent()
   {

       $users = Capsule::table('stds')->get();
       return $users ;


   }
   /**
   *Mothod to create new record
   *
   *@return $data this parameter tells that row is inserted or not
   */
   public function createStudent()
   {
       $data=  std::create([
       'id' => $_POST['id'] ,
       'name' => $_POST['name'] ,
       'degree' => $_POST['degree'] ,
       'address' =>$_POST['address']
        ]);

        return $data;
   }
   /**
   *Mothod to update   data of student in  database
   *
   *@return $user paramaeter tells that row is updated or not
   */
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
               return $user;

    }
    /**
    *Mothod to delete  data of student in  database
    *
    *@return $user paramaeter tells that row is deleted  or not
    */
    public function deleteStudent()
    {

        $user =  std::find($_POST['id']);
        if(!is_null($user)){
              $user->delete();
           }
              return $user ;

    }


 }
 ?>
