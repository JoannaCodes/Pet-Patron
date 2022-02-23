<?php
    //for register of user and admin
    session_start();
    include_once '/XAMPP/htdocs/Pet-Patron-Copy/admin/config/connection.php';
    //include_once ("connection.php");
    
    echo '<script> alert("Login Success"); </script>';
    if(isset($POST['login_btn']))
    {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];
        
        $query = "SELECT * FROM tbl_admin WHERE email='$email_login' AND password ='$password_login'";
        $query_run = mysqli_query($conn,$query);
        
        if(mysqli_fetch_array($query_run))
        {
          
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
        }
        else
        {
            $_SESSION['status'] = 'Email id/ Password is Invalid';
            header('Location: login.php');
        }
        
        //close connection
        mysqli_close($conn);
    }

?>