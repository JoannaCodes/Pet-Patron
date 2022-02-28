<div class="modal-container" id="addOrgModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Organization</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/insertData.php" method="post" target="content" class="overflow-auto">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="org-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="org_name">
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-6 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="org-contact" class="col-form-label">Contact No.</label>
                                <input type="phone" class="form-control" name="org_contact">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label for="org-email" class="col-form-label">Email Address</label>
                                <input type="email" class="form-control" name="org_email">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Address</label>
                        <textarea class="form-control" name="org_address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="desc-text" class="col-form-label">Description</label>
                        <textarea class="form-control" name="org_description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="org_process" class="col-form-label">Process</label>
                        <textarea class="form-control" name="org_process"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="add_org" id="add_org">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal-container" id="editOrgModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Organization Info</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <div class="modal-body overflow-auto">
                <form action="../admin/config/updateData.php" method="post" target="content" class="overflow-auto">
                    <div class="modal-body">
                        <input type="hidden" name="org_id" id="org_id">
                        <div class="mb-3">
                            <label for="org-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="org_name" id="org_name">
                        </div>
                        <div class="row mx-md-auto">
                            <div class="col-md-6 ps-md-0 pe-md-2">
                                <div class="mb-3">
                                    <label for="org-contact" class="col-form-label">Contact No.</label>
                                    <input type="phone" class="form-control" name="org_contact" id="org_contact">
                                </div>
                            </div>
                            <div class="col-md-6 ps-md-2 pe-md-0">
                                <div class="mb-3">
                                    <label for="org-email" class="col-form-label">Email Address</label>
                                    <input type="email" class="form-control" name="org_email" id="org_email">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="desc-text" class="col-form-label">Address</label>
                            <textarea class="form-control" name="org_address" id="org_address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc-text" class="col-form-label">Description</label>
                            <textarea class="form-control" name="org_description" id="org_description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="desc-text" class="col-form-label">Process</label>
                            <textarea class="form-control" name="org_process" id="org_process"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="edit_org" id="edit_org">Edit Data</button>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

<div class="modal-container" id="addPetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Pet Data</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/insertData.php" method="post" enctype="multipart/form-data" target="content" class="overflow-auto">
                <div class="modal-body">
                    <input type="hidden" name="pet_org_id" id="pet_org_id">
                    <div class="mb-3">
                        <label for="pet_name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="pet_name">
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-6 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="pet_age" class="col-form-label">Age</label>
                                <input type="text" class="form-control" name="pet_age">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label class="col-form-label">Gender</label>
                                <select class="form-select" name="pet_gender">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-md-auto">
                        <div class="col-md-3 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label class="col-form-label">Size</label>
                                <select class="form-select" name="pet_size">
                                    <option value="Small (Young)">Small (Young)</option>
                                    <option value="Medium (Young)">Medium (Young)</option>
                                    <option value="Large (Young)">Large (Young)</option>
                                    <option value="XLarge (Young)">XLarge (Young)</option>
                                    <option value="Small (Adult)">Small (Adult)</option>
                                    <option value="Medium Small (Adult)">Medium Small (Adult)</option>
                                    <option value="Medium Small Tall (Adult)">Medium Small Tall (Adult)</option>
                                    <option value="Medium (Adult)">Medium (Adult)</option>
                                    <option value="Medium Large (Adult)">Medium Large (Adult)</option>
                                    <option value="Medium Tall (Adult)">Medium Tall (Adult)</option>
                                    <option value="Large (Adult)">Large (Adult)</option>
                                    <option value="XLarge (Adult)">XLarge (Adult)</option>
                                    <option value="XXLarge (Adult)">XXLarge (Adult)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 ps-md-0 pe-md-0">
                            <div class="mb-3">
                                <label for="pet_weight" class="col-form-label">Weight <small>(pounds)</small></label>
                                <input type="number" class="form-control" name="pet_weight">
                            </div>
                        </div>
                        <div class="col-md-6 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label class="col-form-label">Sterilization</label>
                                <select class="form-select" name="pet_sterilization">
                                    <option value="Spayed">Spayed</option>
                                    <option value="Neutered">Neutered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pet_image" class="form-label">Pet Image</label>
                        <input class="form-control" type="file" name="pet_image">
                    </div>
                    <div class="mb-3">
                        <label for="pet_description" class="col-form-label">Description</label>
                        <textarea class="form-control" name="pet_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="add_pet" id="add_pet">Add Data</button>
                </div>
            </form>
        </div>
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

                    <button type="submit" class="btn btn-danger" name="delete_org" id="delete_org">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>