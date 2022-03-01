<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/user.css">
    
    <?php include 'includes/navbar.php'; ?>

    <div class="user container mt-5 px-0 vh-100 shadow">
			<div class="tab">
				<button class="tablinks" onclick="openTab(event, 'profile')" id="defaultOpen">Profile</button>
				<button class="tablinks" onclick="openTab(event, 'purchase')">Purhase</button>
				<button class="tablinks" onclick="openTab(event, 'account')">Account</button>
			</div>
			
			<div id="profile" class="tabcontent p-5">
				<h3>Manage Profile</h3>
				<form action="../admin/config/updateData.php" method="post" class="overflow-auto">
					<div class="modal-body">
						<input type="hidden" name="user_id" id="user_id">
						<div class="mb-3">
							<label for="user_name" class="col-form-label">Name</label>
							<input type="text" class="form-control" name="user_name" id="user_name">
						</div>
						<div class="row mx-md-auto">
							<div class="col-md-6 ps-md-0 pe-md-2">
								<div class="mb-3">
									<label for="user_age" class="col-form-label">Age</label>
									<input type="text" class="form-control" name="user_age" id="user_age">
								</div>
							</div>
							<div class="col-md-6 ps-md-2 pe-md-0">
								<div class="mb-3">
									<label class="col-form-label">Gender</label>
									<select class="form-select" name="user_gender" id="user_gender">
										<option value="Female">Female</option>
										<option value="Male">Male</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row mx-md-auto">
							<div class="col-md-6 ps-md-0 pe-md-2">
								<div class="mb-3">
									<label for="user_email" class="col-form-label">Email Address</label>
									<input type="text" class="form-control" name="user_email" id="user_email">
								</div>
							</div>
							<div class="col-md-6 ps-md-2 pe-md-0">
								<div class="mb-3">
									<label for="user_contact" class="col-form-label">Contact No.</label>
									<input type="text" class="form-control" name="user_email" id="user_contact">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<label for="user_address" class="col-form-label">Address</label>
							<textarea class="form-control" name="user_address"></textarea>
						</div>
						<button type="submit" class="btn btn-lg btn-custom" name="update_user" id="update_user">Save</button>
					</div>
				</form>
			</div>
			
			<div id="purchase" class="tabcontent p-5">
				<h3>Track Your Purchase History</h3>
				<div class="tab2">
					<button class="tablinks2" onclick="openPurchase(event, 'cart')" id="default">Cart</button>
					<button class="tablinks2" onclick="openPurchase(event, 'orders')">Orders</button>
				</div>
			
				<div id="cart" class="tabcontent2 p-3 overflow-auto">
					<table class="table table-bordered" id="orderTable">
						<thead>
							<tr>
								<th scope="col">Product Name</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>000</td>
								<td>000</td>
								<td>000</td>
								<td><button class="btn btn-danger mb-1" id="deleteBtn">Delete</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			
				<div id="orders" class="tabcontent2 p-3 overflow-auto">
					<table class="table table-bordered" id="orderTable">
						<thead>
							<tr>
								<th scope="col">Order Id</th>
								<th scope="col">Products</th>
								<th scope="col">Date Ordered</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>000</td>
								<td>
									<table class="table table-bordered bg-white mb-0">
										<tr>
											<td>000</td>
											<td>Qty: 000</td>
										</tr>
									</table>
								</td>
								<td>000</td>
								<td>000</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
			<div id="account" class="tabcontent p-5">
				<h3>Manage Account and Password</h3>
				<form action="../admin/config/updateData.php" method="post" class="overflow-auto">
					<div class="modal-body">
						<input type="hidden" name="user_id" id="user_id">
						<div class="row mx-md-auto">
							<div class="col-md-6 ps-md-0 pe-md-2">
								<div class="mb-3">
									<label for="user_email" class="col-form-label">Email Address</label>
									<input type="text" class="form-control" name="user_email" id="user_email">
								</div>
							</div>
							<div class="col-md-6 ps-md-2 pe-md-0">
								<div class="mb-3">
									<label for="user_password" class="col-form-label">Password</label>
									<input type="text" class="form-control" name="user_password" id="user_password">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-lg btn-custom" name="update_acc" id="update_acc">Save</button>
					</div>
				</form>
			</div>
			
			<script>
				function openTab(evt, tabName) {
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					document.getElementById(tabName).style.display = "block";
					evt.currentTarget.className += " active";
				}

				// Get the element with id="defaultOpen" and click on it
				document.getElementById("defaultOpen").click();
			</script>
			
			<script>
				function openPurchase(evt, tabName) {
					var i, tabcontent2, tablinks2;
					tabcontent2 = document.getElementsByClassName("tabcontent2");
					for (i = 0; i < tabcontent2.length; i++) {
						tabcontent2[i].style.display = "none";
					}
					tablinks2 = document.getElementsByClassName("tablinks2");
					for (i = 0; i < tablinks2.length; i++) {
						tablinks2[i].className = tablinks2[i].className.replace(" active", "");
					}
					document.getElementById(tabName).style.display = "block";
					evt.currentTarget.className += " active";
				}

				document.getElementById("default").click();
			</script>
		</div>
<?php include 'includes/footer.php';?>
