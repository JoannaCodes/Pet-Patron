<?php
    include "../admin/config/connection.php";

    $sql = "SELECT * FROM tbl_rescueorg";
    $admins = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($admins)
?>
<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addOrgBtn">Add Organization +</button>
            <button class="btn btn-info" type="button" id="refreshBtn">Manually Refresh Table</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="orgTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Description</th>
                    <th scope="col">Process</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($admins as $row){
                        ?>
                            <tr>
                                <td><?php echo $row['rescueOrgId']; ?></td>
                                <td><?php echo $row['org_name']; ?></td>
                                <td><?php echo $row['org_contact']; ?></td>
                                <td><?php echo $row['org_email']; ?></td>
                                <td><?php echo $row['org_address']; ?></td>
                                <td><?php echo $row['org_description']; ?></td>
                                <td><?php echo $row['org_process']; ?></td>
                                <td><?php echo $row['createdAt']; ?></td>
                                <td><?php echo $row['updatedAt']; ?></td>
                                <td>
                                    <button class="btn btn-warning mb-1" id="editOrgBtn">Edit Info</button>
                                    <button class="btn btn-danger mb-1" id="deleteBtn">Delete</button>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <p class="mt-3">Manually Refresh Table when change is made</p>
    <p class="mt-3"><strong>Total: <?php echo $rowcount; ?></strong></p>
    <iframe name="content"></iframe>
    <?php mysqli_close($conn); ?>

    <!-- Modals -->
    <?php include '../admin/modals/orgModals.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            //Table Refresh Manual
            $("#refreshBtn").click(function(){
                $('#content').load('../admin/rescueOrg.php');
            });
        });
    </script>

    <!-- Add Row -->
    <script>
        $(document).ready(function(){
            $("#addOrgBtn").click(function(){
                $("#addOrgModal").show();
            });

            $("#addOrgModal #closeBtn").click(function(){
                $("#addOrgModal").hide();
            });

            $("#addOrgModal #add_org").click(function(){
                $("#addOrgModal").hide();
            });
        });
    </script>

    <!-- Edit Row -->
    <script>
        $(document).ready(function(){
            //Edit Row
            $("#orgTable #editOrgBtn").click(function(){
                $("#editOrgModal").show();

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#org_id').val(data[0]);
                $('#org_name').val(data[1]);
                $('#org_contact').val(data[2]);
                $('#org_email').val(data[3]);
                $('#org_address').val(data[4]);
                $('#org_description').val(data[5]);
                $('#org_process').val(data[6]);
            });

            $("#editOrgModal #closeBtn").click(function(){
                $("#editOrgModal").hide();
            });

            $("#editOrgModal #edit_org").click(function(){
                $("#editOrgModal").hide();
            });
        });
    </script>

    <!-- Delete Row -->
    <script>
        $(document).ready(function(){
            $("#orgTable #deleteBtn").click(function(){
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

            $("#deleteModal #delete_org").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
