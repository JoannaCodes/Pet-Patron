<div class="modal-container" id="addPetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Row</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="mb-3">
                        <label for="pet-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="pet-name">
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="mb-3">
                                <label for="pet-age" class="col-form-label">Age</label>
                                <input type="number" class="form-control" id="pet-age">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Gender</label>
                                <select class="form-select" id="pet-gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-3">
                            <div class="mb-3">
                                <label for="pet-size" class="col-form-label">Size</label>
                                <input type="number" class="form-control" id="pet-size">
                            </div>
                        </div>
                        <div class="col col-md-3">
                            <div class="mb-3">
                                <label for="pet-weight" class="col-form-label">Weight</label>
                                <input type="number" class="form-control" id="pet-weight">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Sterilization</label>
                                <select class="form-select" id="sterilization">
                                    <option value="1">Spayed</option>
                                    <option value="2">Neutered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pet-image" class="form-label">Pet Image</label>
                        <input class="form-control" type="file" id="pet-image" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="personality-text" class="col-form-label">Personality</label>
                        <textarea class="form-control" id="personality-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="story-text" class="col-form-label">Story</label>
                        <textarea class="form-control" id="story-text"></textarea>
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

<div class="modal-container" id="editPetModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Row</h4>
            </div>
            <div class="modal-body overflow-auto">
                <form>
                    <div class="mb-3">
                        <label for="pet-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" id="pet-name">
                    </div>
                    <div class="row">
                        <div class="col col-md-6 px-0 ps-md-0 pe-md-2">
                            <div class="mb-3">
                                <label for="pet-age" class="col-form-label">Age</label>
                                <input type="number" class="form-control" id="pet-age">
                            </div>
                        </div>
                        <div class="col col-md-6 px-0 ps-md-2 pe-md-0">
                            <div class="mb-3">
                                <label class="col-form-label">Gender</label>
                                <select class="form-select" id="pet-gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-3">
                            <div class="mb-3">
                                <label for="pet-size" class="col-form-label">Size</label>
                                <input type="number" class="form-control" id="pet-size">
                            </div>
                        </div>
                        <div class="col col-md-3">
                            <div class="mb-3">
                                <label for="pet-weight" class="col-form-label">Weight</label>
                                <input type="number" class="form-control" id="pet-weight">
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Sterilization</label>
                                <select class="form-select" id="sterilization">
                                    <option value="1">Spayed</option>
                                    <option value="2">Neutered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pet-image" class="form-label">Pet Image</label>
                        <input class="form-control" type="file" id="pet-image" placeholder="Choose Image">
                    </div>
                    <div class="mb-3">
                        <label for="personality-text" class="col-form-label">Personality</label>
                        <textarea class="form-control" id="personality-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="story-text" class="col-form-label">Story</label>
                        <textarea class="form-control" id="story-text"></textarea>
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