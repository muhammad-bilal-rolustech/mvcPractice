<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);

  class Route
  {
    protected $controller  = 'home';

    protected $method = 'index';

    protected $params = [] ;
     public function __construct()
     {
       echo "echo is the case";
        $url = $this->parseUrl();

        //++

       if($url[0] !='index.php'){
            $obj = new ControllerFactory();

            $ctrl  = $obj->makeController($url[0]);
            $this->controller = $ctrl ;
            unset($url[0]);
         }
         else {
           require_once('../app/controllers/' .$this->controller . '.php');
             $this->controller = new $this->controller ;
         }
         if (isset($url[1]) && $url[1] != 'index') {
                 if(isset($_POST['submit'])){
                     echo "submited <br>";
                  }
                  else {
                       echo "not submit";
                  }
            // if (method_exists($this->controller ,$url[1])) {
                $this->method = 'crud';
                echo "this is method  ".$this->method ."<br>";
                 unset($url[1]);
            // }
         }

        //--




       $this->params = $url ? array_values($url) : [] ;
       call_user_func_array([$this->controller,$this->method],$this->params);
     }
     public function parseUrl()
     {
       if (isset($_GET['url'])) {

          return $url =  explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));
       }
     }

  }
 ?>
