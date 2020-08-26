<?php include 'inc/adminheader.php'; ?>
  <div class="container">
    <section id="main">
        <h2>Edit Products</h2>
      <div id="bg">
        <div class="module">  
          <form class="form" action="tbleditproduct.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <input type="text" placeholder="Name of the Product" class="textbox" name="name"/>
            <input type="text" placeholder="Amount of Product available" class="textbox" name="amount"/>
            <input type="text" placeholder="Code of the Product" class="textbox" name="code"/>
            <input type="text" placeholder="Name of the Image" class="textbox" name="image"/>
            <input type="text" placeholder="Price of the Product" class="textbox" name="price"/>
            <input type="submit" value="Save" class="button" name="save" />
          </form>
        </div>
      </div>
    </section>
  </div>
<?php include 'inc/footer.php'; ?>