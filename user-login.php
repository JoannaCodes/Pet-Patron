<?php include 'includes/header.php';?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/user-login.css">
    
    <?php include 'includes/navbar-login.php'; ?>
    <div class="container-fluid">
            <div class="forms row">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <form action="" id="login-form">
                        <div class="mb-md-5 mt-md-4 mx-md-5 pb-md-5">
                            <h2 class="mb-2">Login</h2>
                            <p class="mb-5">Please enter your email and password!</p>
                    
                            <!-- Email Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="Email Address" />
                            </div>
                    
                            <!-- Password Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                            </div>
                    
                            <!-- Login Button -->
                            <button class="btn btn-outline-custom btn-lg px-5" type="submit">Login</button>
                    
                        </div>
                    </form>
                </div>
            
                <div class="col-md-6">
                    <!-- Sign Up Form -->
                    <form action="" id="signup-form">
                        <div class="mb-md-5 mt-md-4 mx-md-5 pb-md-5">
            
                            <h2 class="mb-2">Create an Account</h2>
                            <p class="mb-5">Please fill the details to create an acount</p>
            
                            <!-- Name Input -->
                            <div class="form-group form-outline row mb-3">
                                <div class="col-md-6">
                                    <input type="text" id="fname" class="form-control form-control-lg" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="lname" class="form-control form-control-lg" placeholder="Last name">
                                </div>
                            </div>
            
                            <!-- Email Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="email" id="email" class="form-control form-control-lg" placeholder="Email Address" />
                            </div>
            
                            <!-- Password Input -->
                            <div class="form-group form-outline mb-3">
                                <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" />
                            </div>
            
                            <!-- Confirm Password Input -->
                            <div class="form-group form-outline mb-5 pb-lg-2">
                                <input type="password" id="con-password" class="form-control form-control-lg"
                                    placeholder="Confirm Password" />
                            </div>
            
                            <!-- Register Button - Info will go to database -->
                            <button class="btn btn-outline-custom btn-lg px-5" type="submit">Sign Up</button>
            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>