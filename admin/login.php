<?php include '../admin/includes/header.php'; ?>
    <div class="container-fluid login-container">
        <div class="login-form p-5 shadow">
            <form action="../admin/config/validate.php" method="post">
                <div class="login-form-heading">
                    <img src="../assets/images/logo/pet_patron_logo1.png" alt="logo">
                    <h2>Login</h2>
                </div>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="bg-danger p-2 rounded text-white"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>

                <div class="mb-3">
                    <label for="paasword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name="admin_log">Login</button>
            </form>
        </div>
    </div>
</body>

</html>