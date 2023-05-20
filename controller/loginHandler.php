<?php

include(APPROOT."/controller/loginController.php");

$loginHandler = new loginController();

if(isset($_POST['login'])){
  
  try{
    
    if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['c_password']))
    {
      echo "Cannot be empty. Please fill-in everything first.";
    }
    else{
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $c_password = $_POST['c_password'];

      // Debug
      print_r($_POST);

      // From controller
      $loginAdmit = $loginHandler->loginAccount($username, $password, $c_password);

      echo json_encode($loginAdmit);

      return;
    }

  } catch(PDOException $e){
    throw $e;
  }

  

}

?>