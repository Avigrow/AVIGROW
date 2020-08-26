<?php include 'inc/header.php'; ?>
  <div class="container">
    <section id="main">
        <h2>Register</h2>
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
    </section>
  </div>
<?php include 'inc/footer.php'; ?>