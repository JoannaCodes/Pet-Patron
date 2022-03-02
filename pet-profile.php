<?php 
    include "admin/config/connection.php";

    $pet_id = $_GET['pet-id'];

    $sql = "SELECT petId, pet_name,	pet_age, pet_gender, pet_size, pet_weight, pet_sterilization, pet_description, pet_image,
    org_name, org_address, org_description, org_contact, org_email, org_process FROM tbl_pets 
    INNER JOIN tbl_rescueorg ON tbl_pets.rescueOrgId = tbl_rescueorg.rescueOrgId
    WHERE petId = $pet_id";

    $pet = mysqli_query($conn, $sql);

    $pet_profile = mysqli_fetch_assoc($pet);

    $processes = explode(", ", $pet_profile['org_process']);

    mysqli_close($conn);
?>
<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/pet-profile.css">
    <?php include 'includes/navbar.php'; ?>
    <div class="container px-4">
        <!-- Profile -->
        <div class="pet-profile row mt-5">
            <div class="col-md-4">
                <div>
                    <img class="img-fluid" src="uploads/pets/<?php echo $pet_profile['pet_image'] ?>" 
                    alt="<?php echo $pet_profile['pet_name'] ?>">
                </div>  
            </div>
            
            <div class="col-md-8">
                <div class="ps-md-5">
                    <div class="card-box mb-3">
                        <div class="card-body px-3 pb-1">
                            <h2 class="card-title"><?php echo $pet_profile['pet_name'] ?></h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Age: <?php echo $pet_profile['pet_age'] ?> </p>
                                    <p>Gender: <?php echo $pet_profile['pet_gender'] ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p>Weight: <?php echo $pet_profile['pet_weight'] ?>lbs</p>
                                    <p>Size: <?php echo $pet_profile['pet_size'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <h2 class="card-title mb-2">Rescue Organization</h2>
                            <h3 class="card-title mb-2"><?php echo $pet_profile['org_name'] ?></h3>
                            <p class="mb-0"><?php echo $pet_profile['org_description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Aplication Process -->
        <div class="info row mt-4">
            <div class="col-md-6 mb-3 pe-md-3">
                <div class="process p-4 shadow">
                    <h3>Adoption Process</h3>
                    <ol type="1">
                        <?php
                            foreach($processes as $process){
                            ?>
                                <li><?php echo $process ?></li>
                            <?php
                            }
                        ?>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 mb-3 ps-md-3">
                <div class="about-me p-4 shadow">
                    <h3>About Me</h3>
                    <p><?php echo $pet_profile['pet_description'] ?></p>
                </div>
            </div>
        </div>

        <hr>

        <div class="contact-info row shadow mt-4">
            <h2 class="header p-1">About Rescue Organization</h2>
            <div class="card-body">
                <h2><?php echo $pet_profile['org_name'] ?></h2>
                <h5>Address: <?php echo $pet_profile['org_address'] ?></h2>
                <h5>Contact No.: <?php echo $pet_profile['org_contact'] ?></h5>
                <h5>Email: <?php echo $pet_profile['org_email'] ?></h5>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
