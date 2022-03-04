<?php
    include "../admin/config/connection.php";

    $sql = "SELECT * FROM tbl_orders ORDER BY createdAt DESC";
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
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Contact Info</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Address</th>
                            <th scope="col">Additional Info</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date Ordered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($orders as $row){
                                ?>
                                    <tr>
                                        <td><?php echo $row['orderId']; ?></th>
                                        <td><?php echo $row['user_name']; ?></td>
                                        <td><?php echo $row['user_contact']; ?></td>
                                        <td><?php echo $row['user_email']; ?></td>
                                        <td><?php echo $row['user_address']; ?></td>
                                        <td><?php echo $row['additional']; ?></td>
                                        <td><?php echo $row['total_price']; ?></td>
                                        <td><?php echo $row['createdAt']; ?></td>
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

            $("#orderModal #closeBtn").click(function(){
                $("#orderModal").hide();
            });
        });
    </script>
</div>