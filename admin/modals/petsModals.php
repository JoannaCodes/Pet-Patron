<div class="modal-container" id="editPetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Pet Information</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/updateData.php" method="post" enctype="multipart/form-data" target="content" class="overflow-auto">
                <div class="modal-body">
                    <input type="hidden" name="pet_id" id="pet_id">
                    <input type="hidden" name="pet_org_id" id="pet_org_id">
                    <div class="mb-3">
                        <label for="pet_name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="pet_name" id="pet_name">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pet_age" class="col-form-label">Age</label>
                                <input type="text" class="form-control" name="pet_age" id="pet_age">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Gender</label>
                                <select class="form-select" name="pet_gender" id="pet_gender">
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="col-form-label">Size</label>
                                <select class="form-select" name="pet_size" id="pet_size">
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
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="pet_weight" class="col-form-label">Weight <small>(pounds)</small></label>
                                <input type="number" class="form-control" name="pet_weight" id="pet_weight">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Sterilization</label>
                                <select class="form-select" name="pet_sterilization" id="pet_sterilization">
                                    <option value="Spayed">Spayed</option>
                                    <option value="Neutered">Neutered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pet-image" class="form-label">Pet Image</label>
                        <input class="form-control" type="file" name="pet_image" id="pet_image">
                    </div>
                    <div class="mb-3">
                        <label for="pet_description" class="col-form-label">Description</label>
                        <textarea class="form-control" name="pet_description" id="pet_description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success" name="edit_pet" id="edit_pet">Save Data</button>
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

                    <button type="submit" class="btn btn-danger" name="delete_pet" id="delete_pet">Delete Data</button>
                </div>
            </form>
        </div>
    </div>
</div>