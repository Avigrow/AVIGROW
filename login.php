<?php

require_once('connection.php');

if(isset($_POST['Email'])) {

  $email = $_POST['Email'];
  $password = $_POST['Password'];

  $sql = "select Email,Password from users where Email = '".$email."' AND password = '".$password."' limit 1 ";

  $result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result) == 1) {
    echo "You have successfully login";
    exit();
  }
  else {
    echo "You have entered incorrect Password";
    exit();
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="login-page">
  <div class="form">
   <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>-->
    <form class="login-form" method="POST" action="#">
      <input type="text" placeholder="email" name="Email" />
      <input type="password" placeholder="password" name="Password" />
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>

<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>