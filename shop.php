<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/shop.css">
    
    <?php include 'includes/navbar-login.php'; ?>
		
		<div class="container">
            <div class="gallery row mt-5 mb-5 mx-0" id="shop">
                <!--Shopping Section-->
                <div class="header">
                    <h1>Shop</h1>
                    <hr>
                    <h3>You can check some of our pet products with affordable price.</h3>
                </div>
                
                <div class="product-gallery col-md-12 pe-lg-5 mt-5">
                    <div class="row row-cols-2 row-cols-md-4 mb-5 g-4">
                        <?php
                            include "admin/config/connection.php";

                            $sql = "SELECT * FROM tbl_products";
                            $product = mysqli_query($conn, $sql);
                            
                            foreach($product as $row){
                                ?>
                                    <div class="col-md-3">
                                        <a class="card-product" href="product.php?product-id=<?php echo $row['productId'] ?>">
                                            <div class="card-box shadow">
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
                                                    <h6>Php <?php echo $row['product_price'] ?>.00</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                            }

                            mysqli_close($conn);
                        ?>
                    </div>
                </div>		
            </div>
        </div>
<?php include 'includes/footer.php'; ?>
