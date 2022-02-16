<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addOrgBtn">Add Organization +</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="orgTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Process</th>
                    <th scope="col">Description</th>
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
                    <td>0000</td>
                    <td>0000</td>
                    <td class"border-start">
                        <button class="btn btn-warning mb-1" id="editOrgBtn">Edit Info</button>
                        <button class="btn btn-info mb-1" id="addPetBtn">Add Pets Data</button>
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
            $("#addOrgBtn").click(function(){
                $("#addOrgModal").show();
            });

            $("#addOrgModal #closeBtn").click(function(){
                $("#addOrgModal").hide();
            });

            $("#orgTable #editOrgBtn").click(function(){
                $("#editOrgModal").show();
            });

            $("#editOrgModal #closeBtn").click(function(){
                $("#editOrgModal").hide();
            });

            $("#addPetBtn").click(function(){
                $("#addPetModal").show();
            });

            $("#addPetModal #closeBtn").click(function(){
                $("#addPetModal").hide();
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
