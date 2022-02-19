<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/adoption-page.css">
    <script src="includes/adoption-page.js"></script>
    <?php include 'includes/navbar.php'; ?>

    <div class="container p-4">
        <!-- Carousel -->
        <div class="carousel row">
            <!-- Carousel -->
            <div class="mySlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide7.png" alt="slide7">
            </div>
            
            <div class="mySlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide8.png" alt="slide8">
            </div>
            
            <div class="mySlides">
            <img class="slide img-fluid shadow" src="assets/images/slides/slide9.png" alt="slide9">
            </div>
            
            <div class="indicators mt-2">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </div>

            <script> showSlides(); </script>
        </div>

        <!-- Pet Gallery -->
        <div class="gallery row mt-5 mb-5 mx-0" id="pets">
            <div class="pet-gallery col-md-9 pe-lg-5">
                <h1 class="mb-3">Fur Buddies</h1>
                <div class="row row-cols-2 row-cols-md-3 mb-5 g-4">

                    <?php
                        include "admin/config/connection.php";

                        $sql = "SELECT pet_image, pet_name, pet_gender, pet_age FROM tbl_pets";
                        $pet = mysqli_query($conn, $sql);
                        
                        foreach($pet as $row){
                            ?>
                                <div class="col pe-md-3">
                                    <a class="card-pet" href="pet-profile.php">
                                        <div class="card-box shadow mb-3 mh-100">
                                            <div class="card-thumbnail m-2">
                                                <img src="uploads/<?php echo $row['pet_image'] ?>" class="img-fluid w-100" alt="profile photo"
                                                width="250px" height="250px">
                                            </div>
                                            <div class="card-body px-3 pb-1">
                                                <h3><?php echo $row['pet_name'] ?></h3>
                                                <h4><?php echo $row['pet_gender'] ?></h4>
                                                <h4>Age: <?php echo $row['pet_age'] ?> year/s</h4>
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
                        ipsum dolor sit amet consectetur adipisicing elit.
                        Atque sapiente molestiae iste esse iusto blanditiis dicta
                        perferendis vero molestias quae, possimus quis libero unde impedit
                        ipsum adipisci distinctio suscipit laborum.
                    </p>
                    <hr>
                    <h3>Info</h3>
                    <p>
                        ipsum dolor sit amet consectetur adipisicing elit.
                        Atque sapiente molestiae iste esse iusto blanditiis dicta
                        perferendis vero molestias quae, possimus quis libero unde impedit
                        ipsum adipisci distinctio suscipit laborum.
                    </p>
                </div>

                <div class="mt-5 pt-4">
                    <h3>Social Media</h3>
                    <p>
                        ipsum dolor sit amet consectetur adipisicing elit.
                        Atque sapiente molestiae iste esse iusto blanditiis dicta
                        perferendis vero molestias quae, possimus quis libero unde impedit
                        ipsum adipisci distinctio suscipit laborum.
                    </p>
                    
                    <i class="fab fa-facebook-f"></i>
                </div>
            </div>
        </div>

        <hr>
        
        <!-- Description -->
        <div class="desc row mt-5 mx-0">
            <h1>Our Goal</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos ab quis deserunt obcaecati!
                Ullam dolor magni debitis dicta tempora. Voluptatem amet eius quas nostrum vel recusandae beatae sapiente! 
                Iste, nisi. ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente molestiae 
                iste esse iusto blanditiis dicta perferendis vero molestias quae, possimus quis libero unde
                impedit ipsum adipisci distinctio suscipit laborum.</p>
            
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos ab quis deserunt obcaecati!
                Ullam dolor magni debitis dicta tempora. Voluptatem amet eius quas nostrum vel recusandae beatae sapiente!
                Iste, nisi. ipsum dolor sit amet consectetur adipisicing elit. Atque sapiente molestiae
                iste esse iusto blanditiis dicta perferendis vero molestias quae, possimus quis libero unde
                impedit ipsum adipisci distinctio suscipit laborum.</p>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
