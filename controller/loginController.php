<?php

class loginController{
  public $adminLogin;

  function __construct()
  {
    include(APPROOT."/model/login.class.php");
    $this->adminLogin = new login();
  }

  public function login(){
    include(APPROOT."/view/login/login.php");
  }

  public function dashboard(){
    include(APPROOT."/view/login/dashboard.php");
  }

  public function loginAccount($username, $password, $c_password){
    $loginAdminAccount = $this->adminLogin->loginAccount($username, $password, $c_password);
    return $loginAdminAccount;
  }

  


}



?>