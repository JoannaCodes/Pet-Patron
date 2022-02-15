<div class="container p-5">
    <div class="row mt-3 p-3 shadow" id="table">
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="userTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact No.</th>
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
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td>0000</td>
                    <td class"border-start">
                        <button class="btn btn-danger mb-1" id="delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    
    <p class="mt-3"><strong>Total Users: 0</strong></p>

    <!-- Modals -->
    <?php include '../admin/modals/deleteModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#userTable #delete").click(function(){
                $("#deleteModal").show();
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
