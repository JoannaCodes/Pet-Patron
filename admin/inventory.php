<div class="container p-5">
    <div class="row p-3 shadow" id="table">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="button" id="addBtn">Create +</button>
        </div>
        <div class="mt-3 overflow-auto">
            <table class="table table-responsive" id="itemTable">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stocks</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    include "../admin/config/connection.php";

                    $sql = "SELECT * FROM tbl_products";
                    $product = mysqli_query($conn, $sql);

                    foreach($product as $row){
                        ?>
                            <tr>
                                <td><?php echo $row['product_id']; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['product_description']; ?></td>
                                <td><?php echo $row['product_price']; ?></td>
                                <td><?php echo $row['product_stocks']; ?></td>
                                <td>
                                    <button class="btn btn-warning mb-1" id="editItemBtn">Edit Info</button>
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
    
    <p class="mt-3"><strong>Total: 0</strong></p>

    <!-- Modals -->
    <?php include '../admin/modals/inventoryModals.php'; ?>
    <!-- Modal -->

    <!-- Add Row -->
    <script>
        $(document).ready(function(){
            $("#addBtn").click(function(){
                $("#addItemModal").show();
            });

            $("#addItemModal #closeBtn").click(function(){
                $("#addItemModal").hide();
            });

            $("#addItemModal #saveBtn").click(function(){
                $("#addItemModal").hide();
            });
        });
    </script>

    <!-- Edit Row -->
    <script>
        $(document).ready(function(){
            //Edit Row
            $("#itemTable #editItemBtn").click(function(){
                $("#editItemModal").show();

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                
                $('#product_id').val(data[0]);
                $('#product_name').val(data[1]);
                $('#product_description').val(data[2]);
                $('#product_image').val(data[3]);
                $('#product_price').val(data[4]);
                $('#product_stocks').val(data[5]);

            });

            $("#editItemModal #closeBtn").click(function(){
                $("#editItemModal").hide();
            });

            $("#editItemModal #editItemBtn").click(function(){
                $("#editItemModal").hide();
            });
        });
    </script>
    <!-- Delete Row -->
    <script>
        $(document).ready(function(){
            $("#itemTable #deleteBtn").click(function(){
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

            $("#deleteModal #deleteBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#addBtn").click(function(){
                $("#addItemModal").show();
            });

            $("#addItemModal #closeBtn").click(function(){
                $("#addItemModal").hide();
            });

            $("#itemTable #editBtn").click(function(){
                $("#editItemModal").show();
            });

            $("#editItemModal #closeBtn").click(function(){
                $("#editItemModal").hide();
            });

            $("#itemTable #deleteBtn").click(function(){
                $("#deleteModal").show();
            });

            $("#deleteModal #closeBtn").click(function(){
                $("#deleteModal").hide();
            });
        });
    </script>
</div>
