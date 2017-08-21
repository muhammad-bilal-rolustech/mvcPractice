
<?php
class smartyHeader
{
  public $smarty;
  public function __construct()
  {
    require_once('../app/smarty-3.1.30/libs/Smarty.class.php');
    $this->smarty = new Smarty();
    $this->smarty->template_dir = '../app/views/templates';
    $this->smarty->compile_dir  = '../app/views/templates_c';


  }
}


 //$arr =array('jesse' =>25 , 'a',10);
 //$smarty->assign('people',$arr);
 //$smarty->display('inndex.tpl');

 ?>
