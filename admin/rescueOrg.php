<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addBtn">Create +</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="orgTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th class"border-start" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0000</th>
                    <td>0000</td>
                    <td>0000</td>
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
    
    <p class="mt-3"><strong>Total: 0</strong></p>

    <!-- Modals -->
    <?php include '../admin/modals/orgModals.php'; ?>
    <?php include '../admin/modals/deleteModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#addBtn").click(function(){
                $("#addOrgModal").show();
            });

            $("#addOrgModal #closeBtn").click(function(){
                $("#addOrgModal").hide();
            });

            $("#orgTable #editBtn").click(function(){
                $("#editOrgModal").show();
            });

            $("#editOrgModal #closeBtn").click(function(){
                $("#editOrgModal").hide();
            });

            $("#orgTable #deleteBtn").click(function(){
                $("#deleteModal").show();
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
