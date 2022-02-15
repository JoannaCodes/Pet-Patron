<div class="container p-5">
    <div class="row mt-3 p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addBtn">Create +</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="adminTable">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th class"border-start" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0000</th>
                    <td>0000</td>
                    <td>0000</td>
                    <td class"border-start">
                        <button class="btn btn-warning mb-1" id="editBtn">Edit</button>
                        <button class="btn btn-danger mb-1" id="deleteBtn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    
    <p class="mt-3"><strong>Total Users: 0</strong></p>

    <!-- Modals -->
    <?php include '../admin/modals/adminModals.php'; ?>
    <?php include '../admin/modals/deleteModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#addBtn").click(function(){
                $("#addAdminModal").show();
            });

            $("#addAdminModal #closeBtn").click(function(){
                $("#addAdminModal").hide();
            });

            $("#adminTable #editBtn").click(function(){
                $("#editAdminModal").show();
            });

            $("#editAdminModal #closeBtn").click(function(){
                $("#editAdminModal").hide();
            });

            $("#adminTable #deleteBtn").click(function(){
                $("#deleteModal").show();
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
