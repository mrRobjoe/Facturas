<?php
//session_start();

require_once "libs/smarty_4_3_0/config_smarty.php";
require_once 'model/Invoice.php';



class control{

  private $ins_model;
  private $obj_smarty;

  function __construct(){
         //$ins_model
    $this->ins_model  = new Invoice();
    $this->obj_smarty = new config_smarty();

  }

  public function gestionar_procesos(){

    $this->validar_inactividad();

    if(isset($_REQUEST['accion'])){
      $accion = $_REQUEST['accion'];

      switch ($accion) {
        case 'validar_login':
            $this->validar_login();
          break;
        case 'abrir_principal':
            $this->abrir_principal();
          break;
        case 'create_invoice':
            $this->create_invoice();
          break;
        case 'print_invoice':
            $this->print_invoice();
          break;
        case 'edit_invoice':
            $this->edit_invoice();
          break;
        case 'cerrar':
              session_destroy();
              header("Location: index.php");
              exit;
          break;
      }
    }else{
      $this->obj_smarty->setAssign("loginError",'');
      $this->abrir_login();
    }
  }

public function edit_invoice(){
  $this->ins_model->checkLoggedIn();

  if(!empty($_POST['companyName']) && $_POST['companyName'] && !empty($_POST['invoiceId']) && $_POST['invoiceId']) {
  	$this->ins_model->updateInvoice($_POST);
  	header("Location:index.php?accion=abrir_principal");
  }
  if(!empty($_GET['update_id']) && $_GET['update_id']) {
  	$invoiceValues = $this->ins_model->getInvoice($_GET['update_id']);
  	$invoiceItems = $this->ins_model->getInvoiceItems($_GET['update_id']);

    $this->obj_smarty->setAssign("userid",$_SESSION['userid']);
    $this->obj_smarty->setAssign("user",$_SESSION['user']);
    $this->obj_smarty->setAssign("address",$_SESSION['address']);
    $this->obj_smarty->setAssign("mobile",$_SESSION['mobile']);
    $this->obj_smarty->setAssign("email",$_SESSION['email']);

    $this->obj_smarty->setAssign('invoiceValues', $invoiceValues);
    $this->obj_smarty->setAssign('invoiceItems', $invoiceItems);

    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setDisplay("container.tpl");
    $this->obj_smarty->setDisplay("edit_invoice.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }
}

public function print_invoice(){
  $this->ins_model->checkLoggedIn();

  if(!empty($_REQUEST['invoice_id']) && $_REQUEST['invoice_id']) {
  	//echo $_REQUEST['invoice_id'];
    $invoiceValues = $this->ins_model->getInvoice($_REQUEST['invoice_id']);
    $invoiceItems = $this->ins_model->getInvoiceItems($_REQUEST['invoice_id']);
    $this->obj_smarty->setAssign("userid", $_SESSION['userid']);
    $this->obj_smarty->setAssign("user", $_SESSION['user']);

    $this->obj_smarty->setAssign('invoiceValues', $invoiceValues);
    $this->obj_smarty->setAssign('invoiceItems', $invoiceItems);

    $this->obj_smarty->setDisplay("header.tpl");
    $this->obj_smarty->setDisplay("container.tpl");
    $this->obj_smarty->setDisplay("print_invoice.tpl");
    $this->obj_smarty->setDisplay("footer.tpl");
  }
}

public function create_invoice(){
 $this->ins_model->checkLoggedIn();


 $this->obj_smarty->setAssign("userid",$_SESSION['userid']);
 $this->obj_smarty->setAssign("user",$_SESSION['user']);

 $this->obj_smarty->setAssign("address",$_SESSION['address']);
 $this->obj_smarty->setAssign("mobile",$_SESSION['mobile']);
 $this->obj_smarty->setAssign("email",$_SESSION['email']);

//--***************Guarda la factura nueva************************
  if(!empty($_POST['companyName']) && $_POST['companyName']) {
  	$this->ins_model->saveInvoice($_POST);
  	header("Location:index.php?accion=abrir_principal");
    exit;
  }
//****************************************************************

 $this->obj_smarty->setDisplay("header.tpl");
 $this->obj_smarty->setDisplay("create_invoice.tpl");
}

public function abrir_login(){

  $this->obj_smarty->setDisplay("header.tpl");
  $this->obj_smarty->setDisplay("container.tpl");
  $this->obj_smarty->setDisplay("login.tpl");
  $this->obj_smarty->setDisplay("footer.tpl");
}

public function validar_login(){

  $loginError = '';
  if (!empty($_POST['email']) && !empty($_POST['pwd'])) {

  	$user = $this->ins_model->loginUsers($_POST['email'], $_POST['pwd']);
  	if(!empty($user)) {
      /*$sesionUser=$this->ins_model->checkLoggedIn();
      $_SESSION['usuario']=$sesionUser;*/


  		$_SESSION['user']    = $user[0]['first_name']."".$user[0]['last_name'];
  		$_SESSION['userid']  = $user[0]['id'];
  		$_SESSION['email']   = $user[0]['email'];
  		$_SESSION['address'] = $user[0]['address'];
  		$_SESSION['mobile']  = $user[0]['mobile'];
      $this->abrir_principal();

  	} else {
  		$loginError = "Invalid email or password!";
      $this->obj_smarty->setAssign("loginError",$loginError);
      $this->abrir_login();
  	}
  }

}
public function abrir_principal(){

  $this->ins_model->checkLoggedIn();

  $this->obj_smarty->setAssign("userid",$_SESSION['userid']);
  $this->obj_smarty->setAssign("user",$_SESSION['user']);
  $invoiceList = $this->ins_model->getInvoiceList();
  $this->obj_smarty->setAssign("invoiceList", $invoiceList);
  $this->obj_smarty->setDisplay("header.tpl");
  $this->obj_smarty->setDisplay("container.tpl");
  $this->obj_smarty->setDisplay("invoice_list.tpl");
  $this->obj_smarty->setDisplay("footer.tpl");
}

public function validar_inactividad(){
  if (isset($_SESSION['tiempo'])) {
    $inactivo = 1200;

    $vida_session = time()-$_SESSION['tiempo'];

    if ($vida_session>$inactivo) {
      session_unset();
      session_destroy();
      header("Location: index.php");

      exit();
    }else {
      $_SESSION['tiempo'] = time();
    }
  }else {
    $_SESSION['tiempo']=time();
  }
}

}
?>
