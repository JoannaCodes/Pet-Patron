<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/adopt.css">
    <script src="includes/script.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="YLDgq7iH"></script>
    <?php include 'includes/navbar.php'; ?>

    <div class="container p-4">
        <!-- Carousel -->
        <div class="carousel row">
            <!-- Carousel -->
            <div class="bannerSlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide7.png" alt="slide7">
            </div>
            
            <div class="bannerSlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide8.png" alt="slide8">
            </div>
            
            <div class="bannerSlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide9.png" alt="slide9">
            </div>
            
            <div class="indicators mt-2">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script>carousel();</script>
        </div>

        <!-- Pet Gallery -->
        <div class="gallery row mt-5 mb-5 mx-0" id="pets">
            <div class="pet-gallery col-md-9 pe-lg-5">
                <h1 class="mb-3">Fur Buddies</h1>
                <div class="row row-cols-2 row-cols-md-3 mb-5 g-4">
                    <?php
                        include "admin/config/connection.php";

                        $sql = "SELECT petId, pet_image, pet_name, pet_gender, pet_age FROM tbl_pets";
                        $pet = mysqli_query($conn, $sql);
                        
                        foreach($pet as $row){
                            ?>
                                <div class="col pe-md-3">
                                    <a class="card-pet" href="pet-profile.php?pet-id=<?php echo $row['petId'] ?>">
                                        <div class="card-box shadow mb-3 mh-100">
                                            <div class="card-thumbnail m-2">
                                                <img src="uploads/pets/<?php echo $row['pet_image'] ?>" class="img-fluid" alt="pet-photo"
                                                width="250px" height="250px">
                                            </div>
                                            <div class="card-body px-3 pb-1">
                                                <h2><?php echo $row['pet_name'] ?></h2>
                                                <h6><?php echo $row['pet_gender'] ?></h6>
                                                <h6>Age: <?php echo $row['pet_age'] ?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }

                        mysqli_close($conn);
                    ?>
                </div>
            </div>

            <!-- Article -->
            <div class="article col-md-3">
                <div class="shadow p-4">
                    <h3>Did you know?</h2>
                    <p>
                         🐾 With animal shelters full, millions of stray dogs and cats roam the Philippines.
                    </p>
                    <p>
                         🐾 Mitzi Cruz, shelter manager, of the Philippine Animal Welfare Society of the Philippines (PAWS Philippines), and Heidi Marquez-Caguioa, a lawyer and the program director of Animal Kingdom Foundation (AKF), both noted that adopting enables an individual to “help save lives” and “make a difference.” Read more <a href="https://pop.inquirer.net/111424/no-pets-left-behind-heres-why-adopting-can-make-a-huge-difference">here</a>.
                    </p>
                    <hr>
                    <h3>Info</h3>
                    <p>
                    🐾 Pet adoption is the process of transferring responsibility for a pet that was previously owned by another party such as a person, shelter, or rescue organization. Common sources for adoptable pets are animal shelters and rescue groups. Some organizations give adopters ownership of the pet, while others use a guardianship model wherein the organization retains some control over the animal's future use or care.
                    </p>
                    <p>
                    🐾 Online pet adoption sites have databases of pets being housed by thousands of animal shelters and rescue groups, and are searchable by the public.
                    </p>
                </div>

                <div class="mt-5 pt-4">
                     <h3>🐾 Social Media 🐾</h3>
                    <p>
                        Have you consider adopting a pet? If not, you can also help us by sharing our site to spread information about us and adoption!
                    </p>
                    
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                </div>
            </div>
        </div>

        <hr>
        
        <!-- Description -->
        <div class="desc row mt-5 mx-0">
            <h1>Our Goal</h1>
            <p>Our goal main goal is to help stray and rescue animals to have their own home and have a loving family. Also, helping the organization to let them use our site for easier tracking of adopter for our lovely animals!</p>
            
            <p>Other than adoption processing, we also offer some of our products that might help to bond and have fun with your furry friend.</p>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
