<div class="modal-container" id="addItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            
            <form action="../admin/config/insertData.php" method="post" target="content" class="overflow-auto">
                <div class="modal-body overflow-auto">
                    <div class="row mx-md-auto">
                        <div class="col-md-8 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="item-name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name" >
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="item-stock" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" name="product_stocks">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="item-price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" name="product_price" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="item-image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" name="item_img" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Description</label>
                        <textarea class="form-control" name="product_description" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="saveBtn" id="saveBtn">Save</button>
                </div>
            </form>
        </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="submit" class="btn btn-success" name="saveBtn" id="saveBtn">Save</button>
            </div> -->
    </div>
</div>

<div class="modal-container" id="editItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            
            <form action="../admin/config/updateData.php" method="post" target="content" class="overflow-auto">
                <div class="modal-body overflow-auto">
                    <div class="row mx-md-auto">
                        <div class="col-md-8 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="item-name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" >
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="item-stock" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" name="product_stocks" id="product_stocks">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="item-price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" name="product_price" id="product_price">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="item-image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" name="product_image" id="product_image" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Description</label>
                        <textarea class="form-control" name="product_description" id="product_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="editBtn" id="editBtn">Save</button>
                </div>
            </form>
        </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="submit" class="btn btn-success" name="saveBtn" id="saveBtn">Save</button>
            </div> -->
    </div>
</div>