<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/styles.css">
    <script src="includes/home-page.js"></script>
    <link rel="stylesheet" href="includes/home.css">
    <?php include 'includes/navbar.php'; ?>

    <div class="container-fluid">
            <div class="intro row mt-5 p-3">
                <!-- Slideshow -->
                <div class="introSlides">
                    <img class="slide img-fluid shadow" src="assets/images/background/bg-4.png">
                </div>
                
                <div class="introSlides">
                    <img class="slide img-fluid shadow" src="assets/images/background/bg-1.png">
                </div>
                
                <div class="introSlides">
                    <img class="slide img-fluid shadow" src="assets/images/background/bg3.png">
                </div>
                
                <div class="introSlides">
                    <img class="slide img-fluid shadow" src="assets/images/background/bg-2-2.png">
                </div>
                <script type="text/javascript">
                    showSlides();
                </script>

                <div class="mt-3 p-3">
                    <h1>Looking for a cute lovable companion?</h1>
                    <p>Welcome to Pet Patron! We are helping some organizaton to look for furever homes for their rescued animals. You can check our adoption page for more information! </p>
                    <a href="" type="button" class="btn btn-lg btn-adopt">Adopt a Pet</a>
                </div>
            </div>

            <div class="product row mt-5">
                <h1 class="text-center">Checkout our Products</h1>
                <div class="product-group mb-3 mx-0">
                    <div class="row py-3">
                        <!-- Use loop here to display product form database note: max product is 3 -->
                        <div class="product-gallery col-md-3 px-2">
                            <div class="card-box shadow mb-3 mh-100">
                                <div class="card-thumbnail m-2">
                                    <img class="img-fluid mb-3" img src="uploads/products/<?php echo $row['product_image'] ?>" alt="cat-food">
                                </div>
                                <div class="card-body px-3 pb-1 mb-3">
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h3><?php echo $row['product_name'] ?></h3>
                                    <h6>Php <?php echo $row['product_price'] ?></h6>
                                    <a href="pet-page.php?product-id=<?php echo $row['productId'] ?>" type="button" class="btn btn-info">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about row mt-5 p-5 p-md-5" id="about">
                <div class="col-md-6">
                    <img class="img-fluid" src="assets/images/logo/pet_patron_logo3.png" alt="Pet-Patron">
                </div>
                <div class="info-col col-md-6 p-5 shadow">
                    <h1 class="mb-3">About Us</h1>
                    <p> We are student from Bachelor of Science in Computer Engineering in Polytechnic University of the Philippines - Main. Our goal is to help organizations who rescues and  offer adoption of stray animals who are looking for family. We will be able to help the organization and the future adopters of the animals to track and to record the information about them and the pet that they will consider to adopt. For now, this site is a project for our subject, Computer Engineering Technology 5: Web Development. In the future, we are hoping to make this website much more useful and helpful for the web community and also to improve what we need to improve.</p>
                </div>
            </div>

            <div class="contact row mt-5" id="contact">
                <h1 class="text-center mb-3">Have some question or inquiries?</h1>
                <h2 class="text-center">Contact Us</h2>
                <p class="text-center">We will get back to you as soon as possible</p>
                <div class="contact-form p-3  p-md-5 shadow">
                    <form action="" method="">
                        <div class="mb-3 form-group">
                            <label for="admin_username" class="col-form-label">Username</label>
                            <input type="text" class="form-control" name="admin_username">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="admin_email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="admin_email">
                        </div>
                        <div class="mb-3 form-group">
                            <label for="message" class="col-form-label">Message</label>
                            <textarea class="form-control" name="pet_description" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="add_admin" id="add_admin">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<?php include 'includes/footer.php'; ?>
