<div class="container p-5">
    <div class="row mt-3 p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addBtn">Create +</button>
            <button class="btn btn-info" type="button" id="refreshBtn">Manually Refresh Table</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="adminTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th class"border-start" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../admin/config/connection.php";

                    $sql = "SELECT * FROM tbl_admin";
                    $admin = mysqli_query($conn, $sql);
                    
                    foreach($admin as $row){
                        ?>
                            <tr>
                                <td><?php echo $row['adminId']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><?php echo $row['createdAt']; ?></td>
                                <td><?php echo $row['updatedAt']; ?></td>
                                <td>
                                    <button class="btn btn-warning mb-1" id="editBtn">Edit</button>
                                    <button class="btn btn-danger mb-1" id="deleteBtn">Delete</button>
                                </td>
                            </tr>
                        <?php 
                    }

                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <p class="mt-3">Manually Refresh Table when change is made</p>

    <iframe name="content"></iframe>
    <!-- Modals -->
    <?php include '../admin/modals/adminModals.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            //Table Refresh Manual
            $("#refreshBtn").click(function(){
                $('#content').load('../admin/admin.php');
            });
        });
    </script>

    <!-- Add Row -->
    <script>
        $(document).ready(function(){
            $("#addBtn").click(function(){
                $("#addAdminModal").show();
            });

            $("#addAdminModal #closeBtn").click(function(){
                $("#addAdminModal").hide();
            });

            $('#addAdminModal #add_admin').click(function() {
                $("#addAdminModal").hide();
            });
        });
    </script>

    <!-- Edit Row -->
    <script>
        $(document).ready(function(){
            $("#adminTable #editBtn").click(function(){
                $("#editAdminModal").show();

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#admin_id').val(data[0]);
                $('#admin_username').val(data[1]);
                $('#admin_email').val(data[2]);
                $('#admin_password').val(data[3]);
            });

            $("#editAdminModal #closeBtn").click(function(){
                $("#editAdminModal").hide();
            });

            $('#editAdminModal #edit_admin').click(function() {
                $("#editAdminModal").hide();
            });
        });
    </script>

    <!-- Delete Row -->
    <script>
        $(document).ready(function() {
            $("#adminTable #deleteBtn").click(function(){
                $("#deleteModal").show();

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });

            $('#deleteModal #delete_admin').click(function() {
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
