<?php
    //connection
    include_once ("connection.php");

    if(isset($_POST['delete_admin']))
    {   
        $admin_id = $_POST['delete_id'];

        $query ="DELETE FROM tbl_admin WHERE adminId='$admin_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['delete_org']))
    {   
        $org_id = $_POST['delete_id'];

        $query ="DELETE FROM tbl_rescueorg WHERE rescueOrgId='$org_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }

    if(isset($_POST['delete_pet']))
    {   
        $pet_id = $_POST['delete_id'];

        $query ="DELETE FROM tbl_pets WHERE petId='$pet_id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted"); </script>';
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }

        //close connection
        mysqli_close($conn);
    }
?>