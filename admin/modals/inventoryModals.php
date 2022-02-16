<div class="modal-container" id="addItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="row mx-md-auto">
                        <div class="col-md-8 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="item-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="item-name">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="item-stock" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" id="item-stock">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="item-price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" id="item-price">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="item-image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" id="item-image" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="desc-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="button" class="btn btn-success" id="saveBtn">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal-container" id="editItemModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="row mx-md-auto">
                        <div class="col-md-8 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="item-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="item-name">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="item-stock" class="col-form-label">Stock</label>
                                <input type="number" class="form-control" id="item-stock">
                            </div>
                        </div>
                        <div class="col-md-2 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="item-price" class="col-form-label">Price</label>
                                <input type="number" class="form-control" id="item-price">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="item-image" class="form-label">Item Image</label>
                        <input class="form-control" type="file" id="item-image" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Description</label>
                        <textarea class="form-control" id="desc-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="closeBtn">Cancel</button>
                <button type="button" class="btn btn-success" id="saveBtn">Save</button>
            </div>
        </div>
    </div>
</div>