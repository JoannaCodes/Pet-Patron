<?php 
    //connection
    include_once ("admin/config/connection.php"); 
?>
<?php include 'includes/header.php'; ?>
    <link rel="stylesheet" href="includes/styles.css">
    <?php include 'includes/navbar.php'; ?>
    <style>
        .modal-header{
            background-image: linear-gradient(45deg, #FF5A1D, #FF7F50);
        }
    </style>

    <div class="container">
        <div class="modal-container" id="addPetModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Pet Data</h4>
                    </div>
                    <form action="admin/config/insertData.php" method="post" target="content" enctype="multipart/form-data" class="overflow-auto">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="col-form-label">Rescue Organization</label>
                                <select class="form-select" name="pet_org_id">
                                    <?php
                                        $sql = "SELECT rescueOrgId, org_name FROM tbl_rescueorg";
                                        $org = mysqli_query($conn, $sql);
                                        
                                        foreach($org as $row){
                                            ?>
                                            <option value="<?php echo $row['rescueOrgId'] ?>"><?php echo $row['org_name'] ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pet_name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" name="pet_name">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="pet_age" class="col-form-label">Age</label>
                                        <input type="text" class="form-control" name="pet_age">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="col-form-label">Gender</label>
                                        <select class="form-select" name="pet_gender">
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
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="pet_weight" class="col-form-label">Weight</label>
                                        <input type="number" class="form-control" name="pet_weight" placeholder="lbs (pounds)">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                <label for="pet_image" class="col-form-label">Pet Image</label>
                                <small>*Image must be 500px X 500px</small>
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
    </div>
    <iframe name="content"></iframe>
</body>

<?php
    //close connection
    mysqli_close($conn);
?>
</html>