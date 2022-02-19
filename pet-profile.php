<?php include 'includes/header.php'; ?>

    <link rel="stylesheet" href="includes/pet-profile-page.css">
    <script src="includes/pet-profile-page.js"></script>
    <?php include 'includes/navbar.php'; ?>
        <div class="container px-4">
            <!-- Profile -->
            <div class="pet-profile row mt-5">
                <div class="col-md-4">
                <div>
                    <img class="img-fluid" src="assets/images/logo/pet_patron_logo3.png" alt="">
                </div>  
                </div>
                
                <div class="col-md-8">
                    <div class="ps-md-5">
                    <div class="card-box mb-3">
                        <div class="card-body px-3 pb-1">
                        <h2 class="card-title">Name</h2>
                        <h4 class="card-subtitle mb-2">About Me</h4>
                        <ul>
                            <li>list</li>
                        </ul>
                        <h4 class="card-subtitle mb-2">Medical Info</h4>
                        <ul>
                            <li>checks</li>
                        </ul>
                        <hr>
                        <h2 class="card-title mb-2">Rescue Organization</h2>
                        <h4>Name of Org with Pic</h4>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Aplication Process -->
            <div class="process row mt-4">
            <div class="col-md-6 ps-md-0 pe-md-3 mb-3">
                <button class="accordion shadow"><h4>Adoption Process</h4></button>
                <div class="panel shadow">
                <ol type="1">
                    <li>Step 1</li>
                    <li>Step 2</li>
                    <li>Step 3</li>
                    <li>Step 4</li>
                    <li>Step 5</li>
                </ol>
                </div>
            </div>
            <div class="col-md-6 ps-md-3 pe-md-0 mb-3">
                <button class="accordion shadow"><h4>Fostering Process</h3></button>
                <div class="panel shadow">
                <ol type="1">
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
            <div class="pet-info row shadow mt-5 p-4">
            <h3>Personality</h3>
            <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo laboriosam expedita
                doloremque quisquam incidunt minima placeat assumenda qui dolores, magni consectetur illum.
                Vitae vel possimus velit, pariatur modi itaque?
            </p>
            </div>

            <div class="pet-info row shadow my-5 p-4">
            <h3>Story</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo laboriosam expedita
                doloremque quisquam incidunt minima placeat assumenda qui dolores, magni consectetur illum.
                Vitae vel possimus velit, pariatur modi itaque?
            </p>
            
            <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
            </p>
            </div>

            <hr>

            <div class="contact-info row shadow mt-5">
            <h2 class="p-1">About Rescue Organization</h2>
            <div class="card-body">
                <h3>Name of Organization</h3>
                <p class="mb-0">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis explicabo laboriosam expedita
                doloremque quisquam incidunt minima placeat assumenda qui dolores, magni consectetur illum.
                Vitae vel possimus velit, pariatur modi itaque?
                </p>
                <hr>
                <h4>Contact Info</h4>
            </div>
            </div>
        </div>
<?php include 'includes/footer.php'; ?>
