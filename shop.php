<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    
    <?php include 'includes/navbar.php'; ?>

        
                            <!-- When user has logged In -->
                            <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user-log" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-log">
                            <li><a class="dropdown-item" href="/pages/login/user-page.html">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li> -->
                        
                    </div>
                </div>
            </div>
        </nav>
		
		<section id="shop">
			<!--Shopping Section-->
			<div class="container">
				<br>
				<h2><center>Shop</h2>
				<hr>
				<p style="font-size:40px;"><center>You can check some of our pet products with affordable price.</p>
				</center>
			</div>
			
			<div class="row mx-auto body">
				<div>
					<?php
                        include "admin/config/connection.php";

                        $sql = "SELECT productId, product_name, product_image, product_description, product_price FROM tbl_products";
                        $product = mysqli_query($conn, $sql);
                        
                        foreach($product as $row){
                            ?>
                                <div class="col pe-md-3">
                                    <a class="card-pet" href="product-profile.php?productId=<?php echo $row['productId'] ?>">
                                        <div class="card-box shadow mb-3 mh-100">
                                            <div class="card-thumbnail m-2">
                                                <img src="uploads/products/<?php echo $row['product_image'] ?>" class="img-fluid w-100" alt="profile photo"
                                                width="150px" height="150px">
                                            </div>
                                            <div class="card-body px-3 pb-1">
                                                <h3><?php echo $row['product_name'] ?></h3>
                                                <h4><?php echo $row['product_description'] ?></h4>
                                                <h4>Age: <?php echo $row['product_price'] ?></h4>
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
		</section>
<?php include 'includes/footer.php'; ?>