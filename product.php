<?php
	include "admin/config/connection.php";

	$product_id = $_GET['product-id'];

	$sql = "SELECT * FROM tbl_products";
	$product = mysqli_query($conn, $sql);

	$sql2 = "SELECT * FROM tbl_products WHERE productId=$product_id";
	$product_profile = mysqli_query($conn, $sql2);

	$product_info = mysqli_fetch_assoc($product_profile);
?>
<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/shop.css">
    
    <?php include 'includes/navbar.php'; ?>
	<div class="container sproduct my-2 pt-5">
		<div class="row mt-5">
			<div class="col-lg-5 col-md-12 col-12">
				<img class="img-fluid w-100" src="uploads/products/<?php echo $product_info['product_image'] ?>" alt="">
			</div>
			<div class="col-lg-6 col-md-12 col-12">
				<h6>Home / Shop </h6>
				<h2 class="py-4"><?php echo $product_info['product_name'] ?></h2>
				<h3>Php <?php echo $product_info['product_price'] ?></h3>
				<select class="form-select my-3 w-50">
					<option>Select quantity</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
				<h6>Stocks: <?php echo $product_info['product_stocks'] ?></h6>
				<h3 class="mt-4 mb-4">Product Details</h3>
				<span><?php echo $product_info['product_description'] ?></span>
				<br>
				<br>
				<button class="btn btn-custom">Add to Cart</button>
			</div>
		</div>
		<div class="row mt-5">
			<h3>Related Products</h3>
			<hr class="mx-auto">
			<div class="product-gallery col-md-12 pe-lg-5 mt-5">
                    <div class="row row-cols-2 row-cols-md-4 mb-5 g-4">
                        <?php
                            foreach($product as $row){
                                ?>
                                    <div class="col pe-md-3">
                                        <div class="card-box shadow mb-3 mh-100">
                                            <div class="card-thumbnail m-2">
                                                <img class="img-fluid mb-3" img src="uploads/products/<?php echo $row['product_image'] ?>" alt="cat-food">
                                            </div>
                                            <div class="card-body px-3 pb-1 mb-3">
                                                <div class="star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h4><?php echo $row['product_name'] ?></h4>
                                                <h6>Php <?php echo $row['product_price'] ?></h6>
                                                <a href="pet-page.php?product-id=<?php echo $row['productId'] ?>" type="button" class="btn btn-info">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }

                            mysqli_close($conn);
                        ?>
                    </div>
                </div>
		</div>
	</div>
				
</div>

<?php include 'includes/footer.php'; ?>
