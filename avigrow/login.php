

<?php include 'inc/header.php'; ?>
  <div class="container">
    <section id="main">
      <h2>Login</h2>
      <div class="login-page">
        <div class="form">
          <form class="login-form" method="POST" action="login1.php">
            <input type="text" placeholder="email" class="textbox" name="Email" />
            <input type="password" placeholder="password" class="textbox" name="Password" />
            <button type="submit"name="submit" value="submit">login</button>
            <p class="message">Not registered? <a href="register.php">Create an account</a></p>
          </form>
        </div>
      </div>

      <script type="text/javascript">
        $('.message a').click(function(){
          $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
      </script>
    </section>
  </div>
<?php include 'inc/footer.php'; ?>