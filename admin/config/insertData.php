<?php
    //connection
    include_once ("connection.php");

    if(isset($_POST['add_admin'])){

        $admin_username = $_POST['admin_username'];
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];

        $query = "INSERT INTO tbl_admin (username, email, password, createdAt)
        VALUES ('$admin_username', '$admin_email', '$admin_password', NOW())";
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['add_org'])){

        $name = $_POST['org_name'];
        $contact = $_POST['org_contact'];
        $email = $_POST['org_email'];
        $address = mysqli_real_escape_string($conn, $_POST['org_address']);
        $description = mysqli_real_escape_string($conn, $_POST['org_description']);
        $process = mysqli_real_escape_string($conn, $_POST['org_process']);

        $query = "INSERT INTO tbl_rescueorg (org_name, org_address, org_description, org_contact, org_email, org_process, createdAt)
        VALUES ('$name', '$address', '$description', '$contact', '$email', '$process', NOW())";
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['add_pet'])){

        $rescueorg_id = $_POST['pet_org_id'];
        
        $name = $_POST['pet_name'];
        $age = $_POST['pet_age'];
        $gender = $_POST['pet_gender'];
        $size = $_POST['pet_size'];
        $weight = $_POST['pet_weight'];
        $sterilization = $_POST['pet_sterilization'];
        $description = mysqli_real_escape_string($conn, $_POST['pet_description']);

        $filename = basename($_FILES["pet_image"]["name"]);
        $dir = dirname(__DIR__,2);
        $folder = $dir."\\uploads/pets\\".$filename;
        $fileType = pathinfo($folder, PATHINFO_EXTENSION);

        $query = "INSERT INTO tbl_pets (rescueOrgId, pet_name, pet_age, pet_gender, pet_size, pet_weight, pet_sterilization, pet_description, pet_image, createdAt)
        VALUES ('$rescueorg_id', '$name', '$age', '$gender', '$size', '$weight', '$sterilization', '$description', '$filename', NOW())";
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            //Check if image upload is successful
            if (move_uploaded_file($_FILES["pet_image"]["tmp_name"], $folder))  
            {
                echo '<script> alert("Image uploaded successfully"); </script>';
            }else{
            
                echo '<script> alert("Failed to upload image"); </script>';
            }
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }
    
    if(isset($_POST['add_product'])){

        $name = $_POST['product_name'];
        $description = mysqli_real_escape_string($conn, $_POST['product_description']);
        $price = $_POST['product_price'];
        $stock = $_POST['product_stocks'];

        $filename = basename($_FILES["product_image"]["name"]);
        $dir = dirname(__DIR__,2);
        $folder = $dir."\\uploads/products\\".$filename;

        $query = "INSERT INTO tbl_products (product_name, product_image, product_description, product_price, product_stocks, createdAt)
        VALUES ('$name','$filename', '$description', '$price', '$stock', NOW())";
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
            //Check if image upload is successful
            if (move_uploaded_file($_FILES["pet_image"]["tmp_name"], $folder))  
            {
                echo '<script> alert("Image uploaded successfully"); </script>';
            }else{
            
                echo '<script> alert("Failed to upload image"); </script>';
            }
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['add_order'])){
        $orderId = $_POST['orderId'];

        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $contact = $_POST['user_contact'];
        $address = mysqli_real_escape_string($conn, $_POST['user_address']);
        $contact = mysqli_real_escape_string($conn, $_POST['additional']);
        $total =   $_POST['total'];

        $query = "INSERT INTO tbl_orders (orderId, user_name, user_email, user_contact, user_address, additional, total_price, createdAt)
        VALUES ('$orderId','$name','$email', '$contact', '$address', '$additional', '$total', NOW())";
        
        $order = mysqli_query($conn, $query);

        if($order)
        {
            echo '<script> alert("Order Placed, Please wait for the email confirmation"); </script>';
        }
        else
        {
            echo '<script> alert("Failed, Please Try Again"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }
?>