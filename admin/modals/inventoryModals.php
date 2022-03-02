<div class="modal-container" id="addItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/insertData.php" method="post" enctype="multipart/form-data" target="content" class="overflow-auto">
                <div class="modal-body overflow-auto">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="product_name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="product_stocks" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" name="product_stocks">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="product_price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" name="product_price" >
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="product_image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" name="product_image">
                    </div>
                    <div class="mb-3">
                        <label for="product_description" class="col-form-label">Description</label>
                        <textarea class="form-control" name="product_description" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="add_product" id="add_product">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-container" id="editItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/updateData.php" method="post" enctype="multipart/form-data" target="content" class="overflow-auto">
                <div class="modal-body overflow-auto">
                    <input type="hidden" name="product_id" id="product_id">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="product_name" class="col-form-label">Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="product_stocks" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" name="product_stocks" id="product_stocks">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-3">
                                <label for="product_price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" name="product_price" id="product_price">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="product_image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" name="product_image" id="product_image">
                    </div>
                    <div class="mb-3">
                        <label for="product_description" class="col-form-label">Description</label>
                        <textarea class="form-control" name="product_description" id="product_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="edit_product" id="edit_product">Save</button>
                </div>
            </form>
        </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="submit" class="btn btn-success" name="saveBtn" id="saveBtn">Save</button>
            </div> -->
    </div>
</div>

<div class="modal modal-container" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Data</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/deleteData.php" method="post" target="content" class="overflow-auto">
                <div class="modal-body">
                    <input type="hidden" name="delete_id" id="delete_id">
                    <h2 class="text-center">Confirm Deletion</h2>
                    <p class="text-center" style="color: #50D0FF;">This action cannot be undone!</p>

                    <button type="submit" class="btn btn-danger" name="delete_product" id="delete_product">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>