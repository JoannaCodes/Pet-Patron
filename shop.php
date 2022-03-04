<?php
    include "admin/config/connection.php";

    session_start();

    if(isset($_POST["add_to_cart"]))  
    {  
        if(isset($_SESSION["shopping_cart"]))  
        {  
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
            if(!in_array($_GET["id"], $item_array_id))  
            {  
                    $count = count($_SESSION["shopping_cart"]);  
                    $item_array = array(  
                        'item_id' => $_GET["id"],  
                        'item_name' => $_POST["hidden_name"],  
                        'item_price' => $_POST["hidden_price"],  
                        'item_quantity' => $_POST["quantity"]  
                    );  
                    $_SESSION["shopping_cart"][$count] = $item_array;  
            }  
            else  
            {  
                    echo '<script>alert("Item Already Added")</script>';  
                    echo '<script>window.location="shop.php"</script>';  
            }  
        }  
        else  
        {  
            $item_array = array(  
                'item_id' => $_GET["id"],  
                'item_name' => $_POST["hidden_name"],  
                'item_price' => $_POST["hidden_price"],  
                'item_quantity' => $_POST["quantity"] 
            );  
            $_SESSION["shopping_cart"][0] = $item_array;  
        }  
    }  
    if(isset($_GET["action"]))  
    {  
        if($_GET["action"] == "delete")  
        {  
            foreach($_SESSION["shopping_cart"] as $keys => $values)  
            {  
                    if($values["item_id"] == $_GET["id"])  
                    {  
                        unset($_SESSION["shopping_cart"][$keys]);  
                        echo '<script>alert("Item Removed")</script>';  
                        echo '<script>window.location="shop.php"</script>';  
                    }  
            }  
        }  
    }
?>

<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/shop.css">
    
    <?php include 'includes/navbar.php'; ?>
		<div class="container">
            <div class="gallery row mt-5 mb-5 mx-0" id="shop">
                <!--Shopping Section-->
                <div class="header">
                    <h1>Shop</h1>
                    <hr>
                    <h3>You can check some of our pet products with affordable price.</h3>
                </div>
                
                <div class="product-gallery col-md-12 pe-lg-5 mt-5">
                    <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-shopping-cart me-2"></i>Cart
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="cart row mt-5 mx-0" id="cart">
                                <div class="">
                                    <h2>Your Cart</h2>
                                    <hr>
                                </div>
                                <table class="table table-bordered table-striped bg-white">
                                    <thead>
                                        <th>Actions</th>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </thead>
                                    <tbody>
                                        <?php   
                                        if(!empty($_SESSION["shopping_cart"]))  
                                        {  
                                            $total = 0;  
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                            {  
                                                ?>  
                                                <tr>
                                                    <td>
                                                        <a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash-alt"></span></a>
                                                    </td>
                                                    <td><?php echo $values["item_name"]; ?></td>  
                                                    <td><?php echo $values["item_quantity"]; ?></td>  
                                                    <td>$ <?php echo $values["item_price"]; ?></td>  
                                                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                                </tr>  
                                                <?php  
                                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                                
                                            }  
                                            ?>  
                                            <tr>  
                                                <td colspan="4" align="right">Total</td>  
                                                <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                            </tr>  
                                            <?php  
                                        }
                                        else{
                                            $total = 0;
                                            ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">No Items in Cart</td> 
                                                </tr>  
                                                <tr>  
                                                    <td colspan="4" align="right">Total</td>  
                                                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                                </tr> 
                                            <?php
                                        }  
                                        ?>  
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-block">
                                    <?php
                                        if(!empty($_SESSION["shopping_cart"])){ 
                                            ?>
                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutModal" id="chk_order"><i class="fa fa-shopping-cart me-2"></i>Checkout</button>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <button class="btn btn-success disabled" id="chk_order"><i class="fa fa-shopping-cart me-2"></i>Checkout</button>
                                            <?php
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-4 mb-5 g-4">
                        <?php
                            $sql = "SELECT * FROM tbl_products";
                            $product = mysqli_query($conn, $sql);
                            
                            foreach($product as $row){
                                ?>
                                    <div class="col-md-3">
                                        <form action="shop.php?action=add&id=<?php echo $row['productId'] ?>" method="post">
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
                                                    <input type="hidden" name="hidden_name" value="<?php echo $row['product_name'] ?>">
                                                    <h6>Php <?php echo number_format($row['product_price'], 2) ?></h6>
                                                    <input type="hidden" name="hidden_price" value="<?php echo $row['product_price'] ?>">
                                                    <div class="row my-3">
                                                        <div class="col-md-4">
                                                            <input type="number" class="form-control" name="quantity" value="1">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <input type="submit" class="btn btn-custom" name="add_to_cart" value="Add to Cart">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <?php
                            }

                            mysqli_close($conn);
                        ?>
                    </div>
                </div>		
            </div>
        </div>

        <iframe name="content"></iframe>

        <!-- Modals -->
        <?php include 'checkout.php'; ?>
        <!-- Modal -->
<?php include 'includes/footer.php'; ?>
