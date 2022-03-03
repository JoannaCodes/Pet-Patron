<?php
    session_start();
    //connection
    include_once ("connection.php");

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);

        $_SESSION["status"]=false;
        // $_SESSION["adminstatus"]=false;

        if (empty($email)) {
            header("Location: ../login.php?error=Email and is required");
            exit();
        }else if(empty($pass)){
            header("Location: ../login.php?error=Password is required");
            exit();
        }else {
            $sql = "SELECT * FROM tbl_admin WHERE email='$email' AND password='$pass'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email && $row['password'] === $pass) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['id'] = $row['id'];

                    header("Location: ../");
                    exit();
                }else{
                    header("Location: ../login.php?error=Incorrect Email or Password and is required");
                }
            }
            else{
                header("Location: ../login.php?error=Incorrect Email or Password and is required");
            }
        }
    }

?>