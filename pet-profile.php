<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/styles.css">
    <script src="includes/pet-profile-page.js"></script>
    <?php include 'includes/navbar.php'; ?>
    <div class="container px-4">
        <!-- Profile -->
        <div class="pet-profile row mt-5">
            <div class="col-md-4">
                <div><img class="img-fluid" src="assets/images/logo/pet_patron_logo3.png" alt=""></div>  
            </div>
            
            <div class="col-md-8">
                <div class="ps-md-5">
                <div class="card-box mb-3">
                    <div class="card-body px-3 pb-1">
                    <h2 class="card-title">Name</h2>
                    <h4 class="card-subtitle mb-2">About Me</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Age: </p>
                            <p>Gender: </p>
                            <p>Weight: </p>
                        </div>
                        <div class="col-md-6">
                            <p>Breed: </p>
                            <p>Size: </p>
                            <p>Color: </p>
                        </div>
                    </div>
                    <hr>
                    <h2 class="card-title mb-2">Rescue Organization</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Aplication Process -->
        <div class="info row mt-4">
            <div class="col-md-6 pe-md-3">
                <div class="process mb-3 p-4 shadow">
                    <h2>Adoption Process</h2>
                    <ol type="1">
                        <li>Step 1</li>
                        <li>Step 2</li>
                        <li>Step 3</li>
                        <li>Step 4</li>
                        <li>Step 5</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 ps-md-3">
                <div class="other-info mb-3 p-4 shadow">
                    <h2>Other Information</h2>
                    <ul>
                        <li>Step 1</li>
                        <li>Step 2</li>
                        <li>Step 3</li>
                        <li>Step 4</li>
                        <li>Step 5</li>
                    </ol>
                </div>
            </div>
            <script src="pet-profile-page.js"></script>
        </div>

        <hr>

        <!-- Information -->
        <div class="pet-story row shadow my-5 p-4">
            <h2>Story</h2>
            <p></p>
        </div>

        <hr>

        <div class="contact-info row shadow mt-5">
        <h2 class="p-1">About Rescue Organization</h2>
        <div class="card-body">
            <h3>Name of Organization</h3>
            <p class="mb-0"> </p>
            <hr>
            <h4>Address: </h4>
            <h4>Contact No.: </h4>
            <h4>Email: </h4>
        </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
