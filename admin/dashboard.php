<?php
    include "../admin/config/connection.php";

    $sql = "SELECT petId, org_name, pet_name, pet_age, pet_gender FROM tbl_pets
            INNER JOIN tbl_rescueorg ON tbl_pets.rescueOrgId = tbl_rescueorg.rescueOrgId
            ORDER BY petId DESC LIMIT 5";
    $pets = mysqli_query($conn, $sql);
    $petcount = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_pets"));

    $sql2 = "SELECT * FROM tbl_orders ORDER BY createdAt DESC LIMIT 5";
    $orders = mysqli_query($conn, $sql2);
    $ordercount = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_orders"));
?>
<div class="container p-5">
    <div class="row" id="summary-stats">
        <div class="col-md-6">
            <div class="p-4 shadow" id="stats">
                <p>Pets for Adoption</p>
                <h2><?php echo $petcount; ?></h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 shadow" id="stats">
                <p>Orders</p>
                <h2><?php echo $ordercount; ?></h2>
            </div>
        </div>
    </div>

    <div class="row mt-4 mt-md-5 p-3 shadow" id="table">
        <h4 class="mb-3">Recently Added Pets for Adoption</h4>
        <small>*Check Full Information of Pet in Pets for Adoption Tab</small>
        <div class="overflow-auto">
            <table class="table table-responsive" id="petSummary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Rescue Org</th>
                </tr>
            </thead>
            <tbody>    
                    <?php 
                        foreach($pets as $row){
                    ?>
                        <tr>
                            <td><?php echo $row['pet_name']; ?></td>
                            <td><?php echo $row['pet_age']; ?></td>
                            <td><?php echo $row['pet_gender']; ?></td>
                            <td><?php echo $row['org_name']; ?></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
        </div>
    </div>

    <div class="row mt-4 mt-md-5">
        <div class="p-3 shadow" id="table">
            <h4 class="mb-3">Recent Orders</h4>
            <small>*Click to View Full Information</small>
            <div class="overflow-auto">
                <table class="table table-responsive" id="orderSummary">
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
    <?php include '../admin/modals/userModal.php'; ?>
    <?php include '../admin/modals/orderModal.php'; ?>
    <!-- Modal -->

    <script>
        $(document).ready(function(){
            $("#orderSummary tbody tr").click(function(){
                $("#orderModal").show();
            });

            $("#orderModal #closeBtn").click(function(){
                $("#orderModal").hide();
            });

            $("#userSummary tbody tr").click(function(){
                $("#userModal").show();
            });

            $("#userModal #closeBtn").click(function(){
                $("#userModal").hide();
            });
        });
    </script>
</div>
