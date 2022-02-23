<?php 
        session_start();
        include '../admin/includes/header.php'; 
        include_once '/XAMPP/htdocs/Pet-Patron-Copy/admin/config/connection.php';
        //include_once ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <style>
        .body {
            background-color: #ffb780;
            align-self: center;
            height: 530px;
        }

        .form {
            background-color: #ebe6ea;
            border-radius: 20px;
        }

        #loginForm {
            margin: auto;
            display: block;
            width: 50%;
            justify-content: center;
        }

        .login_btn {
            display: block;
            margin: auto;
            width: 50%;
            background-color: coral;
        }
        .login_btn-outline-custom {
            color: #212529;
            background-color: coral;
            border-color: #212529;
        }

        .login_btn:hover {
            border-color: black;
            background-color: #50D0FF;
        }

        .cet5 {
            display: block;
            background-color: #ffb780;
            margin: auto;
            text-align: center;
            font-style: oblique;
        }
        .cet {
            font-size: 25px;
        }

    </style>

                            <!-- When user has logged In -->
                            <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="user-log" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-log">
                            <li><a class="dropdown-item" href="/pages/login/user-page.html">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li> -->

        
        <div class="body pt-md-5">
            <div class="form mt-md-2 mx-md-4 pb-md-4">
                    <?php
                        if(isset($_SESSION['status']) && $_SESSION['status'] != '')
                        {
                            echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
                            unset($_SESSION['status']);
                        }
                    ?>
                    <!-- Login Form -->
                    <form action="../admin/config/register.php" method="POST" id="loginForm">
                        <div>
                    
                            <h3 class="login pt-md-3">Welcome!</h3>
                            <p class="mb-5">Please enter your email and password.</p>
                    
                            <!-- Email Input -->
                            <div class="form-group form-outline mb-4">
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" />
                            </div>
                    
                            <!-- Password Input -->
                            <div class="form-group form-outline mb-4">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                            </div>
                    
                            <!-- Login Button -->
                            <button type="submit" a href ="index.php" name="login_btn" class="login_btn btn-outline-custom btn-lg px-5">Login</a></button>
                    
                        </div>
                    </form>
            </div>
        </div>
        
        <!-- CET5 -->
        <div class="cet5 p-3">
            <p class="cet"> CET5 Web Development Project </p>
        </div>
</html>