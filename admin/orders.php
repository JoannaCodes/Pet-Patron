<?php
    include "../admin/config/connection.php";

    $sql = "SELECT * FROM tbl_orders";
    $orders = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($orders)
?>
<div class="container p-5">
    <div class="row">
        <small>*Click to View Full Information</small>
        <div class="p-3 shadow" id="table">
            <div class="overflow-auto">
                <table class="table table-responsive" id="orderTable">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Id</th>
                        <th scope="col">Date Ordered</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($orders as $row){
                            ?>
                            <tr>
                                <th><?php echo $row['orderId'] ?></th>
                                <td><?php echo $row['userId'] ?></td>
                                <td><?php echo $row['createdAt'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php mysqli_close($conn); ?>

    <!-- Modals -->
    <?php include '../admin/modals/orderModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#orderTable tbody tr").click(function(){
                $("#orderModal").show();
            });

            $("#orderModal #closeBtn").click(function(){
                $("#orderModal").hide();
            });
        });
    </script>
</div>