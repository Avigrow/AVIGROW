<?php include 'inc/adminheader.php'; ?>
<?php include 'cartpro.php'; ?>
<HTML>
	<HEAD>
		<TITLE>Avigrow</TITLE>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</HEAD>
	<BODY>
		<div id="product-grid">
			<div class="txt-heading"><h2>Products</h2><a href="addproduct.php" style="float:right;">Add product</a></div>
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
			if (!empty($product_array)) { 
				foreach($product_array as $key=>$value){
			?>
				<div class="product-item">
					<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" width="250px" height="155px"></div>
					<div class="product-tile-footer">
					<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
					<div class="product-title"><?php echo "Amount available: ".$product_array[$key]["amount"]; ?></div>
					<div class="product-price"><?php echo "Tsh".$product_array[$key]["price"]; ?></div>
					<div class="cart-action"><a href="editproduct.php?id=<?php echo $product_array[$key]["id"]; ?>">Edit product</a></div>
					</div>
				</div>
			<?php
				}
			}
			?>
		</div>
	</BODY>
</HTML>