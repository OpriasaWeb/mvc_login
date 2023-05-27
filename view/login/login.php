<?php
//  echo "This is login page\n";

// echo APPROOT."/controller/loginController.php";
// echo APPROOT."/config/config.php";
// include(APPROOT."/config/config.php");
// include(APPROOT."controller/loginController.php");

//  echo md5('admin');
?>

<?php
  include(APPROOT."/view/header.php");
?>

<div class="container-fluid">
  <div class="row">
    <div class="mb-3">
      <label for="exampleInputUsername" class="form-label">Username</label>
      <input type="text" name="username" id="username" class="form-control" id="exampleInputUsername" maxlength="32" minlength="2" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputCPassword1" class="form-label">Confirm Password</label>
      <input type="password" name="c_password" id="c_password" class="form-control" id="exampleInputCPassword1">
    </div>
    
    <button type="submit" name="login" id="login" class="mt-3 btn btn-primary">Submit</button>

  </div>
</div>

<script type="text/javascript">

  <?php
    include(APPROOT."/assets/script.js");
  ?>
  
  // header('../../controller/loginHandler.php');

</script>


<?php
  include(APPROOT."/view/footer.php");
?>

