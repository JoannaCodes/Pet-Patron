<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/user-login.css">
    
        <?php include 'includes/navbar-login.php'; ?>
        <div class="container-fluid">
            <div class="forms row">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <form action="admin/config/validate.php" method="post" target="content" id="login-form">
                        <div class="mb-md-5 mt-md-4 mx-md-5 pb-md-5">
                            <h2 class="mb-2">Login</h2>
                            <p>Please enter your email and password!</p>
                            <p class="mb-5">Don't have an account? Register Now to access shop</p>

                            <?php if (isset($_GET['error'])) { ?>
                                <p class="bg-danger p-2 rounded text-white"><?php echo $_GET['error']; ?></p>
                            <?php } ?>
                            <!-- Email Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="email" name="user_email" class="form-control form-control-lg" placeholder="Email Address" required/>
                            </div>
                    
                            <!-- Password Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="password" name="user_password" class="form-control form-control-lg" placeholder="Password" required/>
                            </div>
                    
                            <!-- Login Button -->
                            <button class="btn btn-outline-custom btn-lg px-5" type="submit">Login</button>
                    
                        </div>
                    </form>
                </div>
            
                <div class="col-md-6">
                    <!-- Sign Up Form -->
                    <form action="admin/config/insertData.php" method="post" target="content" id="signup-form">
                        <div class="mb-md-5 mt-md-4 mx-md-5 pb-md-5">
            
                            <h2 class="mb-2">Create an Account</h2>
                            <p>Please fill the details to create an acount</p>
                            <p class="mb-5">Have an account? Login now</p>
            
                            <!-- Name Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="text" name="name" class="form-control form-control-lg" placeholder="First name" required>
                            </div>
            
                            <!-- Email Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" required/>
                            </div>
            
                            <!-- Password Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required/>
                            </div>
            
                            <!-- Register Button - Info will go to database -->
                            <button class="btn btn-outline-custom btn-lg px-5" type="submit" name="sign_up">Sign Up</button>
            
                        </div>
                    </form>
                </div>
            </div>
            <iframe name="content"></iframe>
        </div>
    </body>
</html>