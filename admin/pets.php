<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="petTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Rescue Org</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Size</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Sterilization</th>
                    <th scope="col">Personality</th>
                    <th scope="col">Story</th>
                    <th scope="col">Image</th>
                    <th class"border-start" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>0000</th>
                    <th>0000</th>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
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
    <?php include '../admin/modals/petsModals.php'; ?>
    <?php include '../admin/modals/deleteModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#petTable #editBtn").click(function(){
                $("#editPetModal").show();
            });

            $("#editPetModal #closeBtn").click(function(){
                $("#editPetModal").hide();
            });

            $("#petTable #deleteBtn").click(function(){
                $("#deleteModal").show();
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
