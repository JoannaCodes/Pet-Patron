<?php
    include "../admin/config/connection.php";

    $sql = "SELECT * FROM tbl_users";
    $users = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($users)
?>
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach($users as $row){ 
                            ?>
                            <th><?php echo $row['userId'] ?></th>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['user_age'] ?></td>
                            <td><?php echo $row['user_gender'] ?></td>
                            <td><?php echo $row['user_address'] ?></td>
                            <td><?php echo $row['user_contact'] ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td><?php echo $row['user_password'] ?></td>
                            <?php
                        }
                    ?>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    
    <p class="mt-3"><strong>Total Users: <?php echo $rowcount; ?></strong></p>
    <?php mysqli_close($conn); ?>

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
