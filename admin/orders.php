<div class="container p-5">
    <div class="row">
        <div class="p-3 shadow" id="table">
            <div class="overflow-auto">
                <table class="table table-responsive" id="orderTable">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Id</th>
                        <th scope="col">Date Ordered</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>0000</th>
                        <td>0000</td>
                        <td>0000</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

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