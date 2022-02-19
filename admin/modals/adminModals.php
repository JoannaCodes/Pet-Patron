<div class="modal modal-container" id="addAdminModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Admin</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/insertData.php" method="post" target="content" class="overflow-auto" id="add_admin_form">
                <div class="modal-body">
                    <div class="mb-3 form-group">
                        <label for="admin_username" class="col-form-label">Username</label>
                        <input type="text" class="form-control" name="admin_username">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="admin_email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="admin_email">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="admin_email" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="admin_password">
                    </div>
                    <button type="submit" class="btn btn-success" name="add_admin" id="add_admin">Add Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal modal-container" id="editAdminModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Admin Info</h4>
                <button type="button" class="btn-close" id="closeBtn"></button>
            </div>
            <form action="../admin/config/updateData.php" method="post" target="content" class="overflow-auto">
                <div class="modal-body">
                    <input type="hidden" name="admin_id" id="admin_id">
                    <div class="mb-3 form-group">
                        <label for="admin_username" class="col-form-label">Username</label>
                        <input type="text" class="form-control" name="admin_username" id="admin_username">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="admin_email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="admin_email" id="admin_email">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="admin_email" class="col-form-label">Password</label>
                        <input type="password" class="form-control" name="admin_password" id="admin_password">
                    </div>
                    <button type="submit" class="btn btn-success" name="edit_admin" id="edit_admin">Save Data</button>
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

                    <button type="submit" class="btn btn-danger" name="delete_admin" id="delete_admin">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>