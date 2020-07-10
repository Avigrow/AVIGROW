<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <meta charset="utf-8" lang="en">
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div id="bg">
  <div class="module">  
    <form class="form" action="process.php" method="POST">
      <input type="text" placeholder="First Name" class="textbox" name="Fname" />
      <input type="text" placeholder="Last Name" class="textbox" name="Lname"/>
      <input type="text" placeholder="Phone number" class="textbox" name="Phone"/>
      <input type="text" placeholder="Email Address" class="textbox" name="Email"/>
      <input type="password" placeholder="Password" class="textbox" name="Password"/>
      <input type="submit" value="Register" class="button" name="btn-save" />
    </form>
  </div>
</div>
</body>
</html>