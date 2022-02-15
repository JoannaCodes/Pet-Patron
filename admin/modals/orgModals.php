<div class="modal-container" id="addOrgModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Row</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="mb-3">
                        <label for="org-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="org-name">
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-6 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="org-contact" class="col-form-label">Contact No.</label>
                                <input type="number" class="form-control" id="org-contact">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="org-email" class="col-form-label">Email Address</label>
                                <input type="number" class="form-control" id="org-email">
                            </div>
                        </div>
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

<div class="modal-container" id="editOrgModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Row</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="mb-3">
                        <label for="org-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="org-name">
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-6 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="org-contact" class="col-form-label">Contact No.</label>
                                <input type="number" class="form-control" id="org-contact">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="org-email" class="col-form-label">Email Address</label>
                                <input type="number" class="form-control" id="org-email">
                            </div>
                        </div>
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