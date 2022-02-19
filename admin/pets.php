<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-info" type="button" id="refreshBtn">Manually Refresh Table</button>
        </div>
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
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../admin/config/connection.php";

                    $sql = "SELECT * FROM tbl_pets 
                            INNER JOIN tbl_rescueorg ON tbl_pets.rescueOrgId = tbl_rescueorg.rescueOrgId";
                    $pets = mysqli_query($conn, $sql);
                    
                    foreach($pets as $row){
                        ?>
                            <tr>
                                <td><?php echo $row['petId']; ?></td>
                                <td><?php echo $row['org_name']; ?></td>
                                <td><?php echo $row['pet_name']; ?></td>
                                <td><?php echo $row['pet_age']; ?></td>
                                <td><?php echo $row['pet_gender']; ?></td>
                                <td><?php echo $row['pet_size']; ?></td>
                                <td><?php echo $row['pet_weight']; ?></td>
                                <td><?php echo $row['pet_sterilization']; ?></td>
                                <td><?php echo $row['pet_description']; ?></td>
                                <td><?php echo $row['pet_image']; ?></td>
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

    <iframe name="content"></iframe>

    <!-- Modals -->
    <?php include '../admin/modals/petsModals.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            //Table Refresh Manual
            $("#refreshBtn").click(function(){
                $('#content').load('../admin/pets.php');
            });
        });
    </script>

    <!-- Edit Row -->
    <script>
        $(document).ready(function(){
            $("#petTable #editBtn").click(function(){
                $("#editPetModal").show();

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#pet_id').val(data[0]);
                $('#pet_org_id').val(data[1]);
                $('#pet_name').val(data[2]);
                $('#pet_age').val(data[3]);
                $('#pet_gender').val(data[4]);
                $('#pet_size').val(data[5]);
                $('#pet_weight').val(data[6]);
                $('#pet_sterilization').val(data[7]);
                $('#pet_description').val(data[8]);
            });

            $("#editPetModal #closeBtn").click(function(){
                $("#editPetModal").hide();
            });

            $("#editPetModal #edit_pet").click(function(){
                $("#editPetModal").hide();
            });
        });
    </script>

    <!-- Delete Row -->
    <script>
        $(document).ready(function(){
            $("#petTable #deleteBtn").click(function(){
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

            $("#deleteModal #delete_pet").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
