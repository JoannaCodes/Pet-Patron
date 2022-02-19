<?php
    //connection
    include_once ("connection.php");

    if(isset($_POST['editAdmin']))
    {   
        $admin_id = $_POST['admin_id'];
        
        $admin_username = $_POST['admin_username'];
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];

        $query = "UPDATE tbl_admin 
        SET username='$admin_username', email='$admin_email', password='$admin_password' WHERE adminId='$admin_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['edit_org']))
    {   
        $org_id = $_POST['org_id'];
        
        $name = $_POST['org_name'];
        $contact = $_POST['org_contact'];
        $email = $_POST['org_email'];
        $address = mysqli_real_escape_string($conn, $_POST['org_address']);
        $description = mysqli_real_escape_string($conn, $_POST['org_description']);
        $process = mysqli_real_escape_string($conn, $_POST['org_process']);

        $query = "UPDATE tbl_rescueorg 
        SET org_name='$name', org_email='$email', org_contact='$contact', org_address='$address', org_description='$description', org_process='$process' 
        WHERE rescueOrgId='$org_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['edit_pet'])){

        $pet_id = $_POST['pet_id'];

        $name = $_POST['pet_name'];
        $age = $_POST['pet_age'];
        $gender = $_POST['pet_gender'];
        $size = $_POST['pet_size'];
        $weight = $_POST['pet_weight'];
        $sterilization = $_POST['pet_sterilization'];
        $description = mysqli_real_escape_string($conn, $_POST['pet_description']);

        // $info = $_POST['pet_info'];  
        // $chkd="";  
        // foreach($info as $chk)  
        // {  
        //     $chkd .= $chk.",";  
        // }  
        // $in_ch=mysqli_query($con,"insert into request_quote(technology) values ('$chkd')");

        $filename = basename($_FILES["pet_image"]["name"]);   
        //$folder = "./uploads/pets/".$filename;
        //$fileType = pathinfo($folder, PATHINFO_EXTENSION);

        $query = "UPDATE tbl_pets 
        SET pet_name='$name', pet_age='$age', pet_gender='$gender', pet_size='$size', pet_weight='$weight', pet_sterilization='$sterilization',
        pet_description='$description', pet_image='$filename' WHERE petId='$pet_id'";
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Saved"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        //Check if image upload is successful
        // if (move_uploaded_file($_FILES["pet_image"]["tmp_name"], $folder))  
        // {
        //     echo '<script> alert("Image uploaded successfully"); </script>';
        // }else
        // {
        //     echo '<script> alert("Failed to upload image"); </script>';
        // }

        //close connection
        mysqli_close($conn);
    }
?>