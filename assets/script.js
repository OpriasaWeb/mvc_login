$(document).ready(function(){
  
  $('#login').click(function(e){

    e.preventDefault();

    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var c_password = $('#c_password').val();

    var usernameRegex = /^[A-Za-z0-9_]{3,20}$/;
    var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

    if(username === '' || email === '' || password === '' || c_password === ''){
      console.log("JS - cannot be empty.");
    } else if(!usernameRegex.test(username)){
      console.log("Username is invalid.");
    } else if(!emailRegex.test(email)){
      console.log("Please enter the right email.");
    } else if(password !== c_password){
      console.log("Password and confirm password did not match.");
    } else{
      console.log("Login successfully.");

      if(username !== "" || email !== '' || password !== '' || c_password !== ''){
        $.ajax({
          url: "./controller/loginHandler.php",
          type: 'POST',
          data: {
            adminlogin: true,
            username: username,
            email: email,
            password: password,
            c_password: c_password
          },
          success: function(res){
            console.log(res);
            // window.location.href = "http://localhost/mvc_login/view/login/dashboard.php";
          },
          error: function(err){
            console.log(err);
          }
        })
      }
      
      

    }
    
  })

  

  

})