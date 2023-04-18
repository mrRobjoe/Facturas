<?php

require_once 'libs/smarty_4_3_0/Smarty.class.php';


class config_smarty{
  private $ins_smarty;

  function __construct(){
      $this->ins_smarty = new Smarty();
      $this->setParametros();
  }


  private function setParametros(){
    $this->ins_smarty->template_dir ="view/template";
    $this->ins_smarty->compile_dir  ="view/template_c";
    $this->ins_smarty->cache_dir    ="control/cache";
    $this->ins_smarty->config_dir   ="control/configs";
  }

  public function setAssign($variable,$valor){
      $this->ins_smarty->assign($variable,$valor);
  }

  public function setDisplay($archivo){
    $this->ins_smarty->display($archivo);
  }

}
?>
