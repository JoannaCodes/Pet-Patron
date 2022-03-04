<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="admin/config/insertData.php" method="post" target="content" class="overflow-auto">
            <div class="modal-body">
                <input type="hidden" name="orderId" id="orderId" value="<?php echo uniqid(); ?>">
                <p>Payment Method: Cash on Delivery</p>
                <div class="mb-3">
                    <label for="user-name" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="user_name" id="user_name">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="user-contact" class="col-form-label">Contact No.</label>
                            <input type="phone" class="form-control" name="user_contact" id="user_contact">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="user-email" class="col-form-label">Email Address</label>
                            <input type="email" class="form-control" name="user_email" id="user_email">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="user_address" class="col-form-label">Address</label>
                    <textarea class="form-control" name="user_address" id="user_address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="additional" class="col-form-label">Additional Info (Optional)</label>
                    <textarea class="form-control" name="additional" id="additional" placeholder="Address Landmark, Package Instructions, etc.."></textarea>
                </div>
                <div>
                    <h4>Product Details </h4>
                    <div id="product overflow auto">
                        <table class="table table-bordered table-striped bg-white">
                            <thead>
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
                                            <input type="hidden" name="item_id">
                                            <td><?php echo $values["item_name"]; ?></td>  
                                            <td><?php echo $values["item_quantity"]; ?></td>
                                            <td>Php <?php echo $values["item_price"]; ?></td>
                                            <td>Php <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                                        </tr>  
                                        <?php  
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                    }  
                                    ?>  
                                    <tr>  
                                        <td colspan="3" align="right">Total</td>  
                                        <td align="right">Php <?php echo number_format($total, 2); ?></td>
                                        <input type="hidden" name="orderId" id="orderId" value="<?php echo uniqid(); ?>">
                                        <input type="hidden" name="total" id="total" value="<?php echo $total ?>">
                                    </tr>  
                                    <?php  
                                } 
                                ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="add_order" id="add_order" data-bs-dismiss="modal">Proceed</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>