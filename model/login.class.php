<?php

class login{
  public $login;

  public function __construct()
  {
    include(APPROOT."/config/config.php");
    $this->login = new PDO(DSN, DBUSER, DBPASS);

    if($this->login->errorCode()){
      die("Something went wrong connecting to local database.");
    } else{
      echo "Connected to the local database";
    }
  }

  public function loginAccount($username, $email, $password, $c_password){
    try{
      $query = "SELECT * FROM admin WHERE username = $username AND email = $email AND password = $password AND c_password = $c_password";
      $statement = $this->login->prepare($query);
      $statement->execute();
      $dataLogin = $statement->fetch(PDO::FETCH_ASSOC);
      return $dataLogin;
    } catch(PDOException $e){
      throw $e;
    }
  }

}



?>