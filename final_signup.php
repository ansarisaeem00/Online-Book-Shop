<?php include('functions.php') ?>
<!DOCTYPE html>
<html >
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="css/reset.min.css">
  <link rel="stylesheet" type="text/css" href="css/signup_font.css">
 <link rel="stylesheet" href="css/style_final.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

</head>
<body>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <form action="login_action.php" method="POST">
      <div class="input-container">
        <input type="#{type}" id="#{label}" name="uname" required="required"/>
        <label for="#{label}">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="#{label}" name="upass" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>




    <form action="final_signup.php" enctype="multipart/form-data"  method="POST">
      <?php echo display_error(); ?>
      <div class="input-container">
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"  required="required"/>
        <label for="#{label}">Name</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="email" id="#{label}" name="email" value="<?php echo $email; ?>" required="required"/>
        <label for="#{label}">E-mail</label>
        <div class="bar"></div>
      </div>

      <div class="input-container">
        <input type="password" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>

      
      <div class="input-container">
        <input type="password" id="#{label}" name="pass" required="required"/>
        <label for="#{label}">Password</label>
        <div class="bar"></div>
      </div>

      <div class="button-container">
        <button type="submit" name="signup_btn"><span>Sign up</span></button>
      </div>
    </form>
  </div>
</div>
  <script src='js/jquery.min.js'></script>

    <script  src="js/index_final.js"></script>


<script type="text/javascript">
$(function() {

  $('#name').keydown(function (e) {
  
    if (e.shiftKey || e.ctrlKey || e.altKey) {
    
      e.preventDefault();
      
    } else {
    
      var key = e.keyCode;
      
      if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90) || (key!=110) )) {
      
        e.preventDefault();
        
      }

    }
    
  });
  
});
</script>

</body>
</html>

