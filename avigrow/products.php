<?php include 'inc/userheader.php'; ?>
<?php include 'cartpro.php'; ?>
<HTML>
	<HEAD>
		<TITLE>Avigrow</TITLE>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</HEAD>
	<BODY>
		<div id="product-grid">
			<div class="txt-heading"><h2>Products</h2></div>
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
			if (!empty($product_array)) { 
				foreach($product_array as $key=>$value){
			?>
				<div class="product-item">
					<form method="post" action="products.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
					<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" width="250px" height="155px"></div>
					<div class="product-tile-footer">
					<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
					<div class="product-title"><?php echo "Amount available: ".$product_array[$key]["amount"]; ?></div>
					<div class="product-price"><?php echo "Tsh".$product_array[$key]["price"]; ?></div>
					<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
					</div>
					</form>
				</div>
			<?php
				}
			}
			?>
		</div>
	</BODY>
</HTML>