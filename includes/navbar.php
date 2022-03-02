<nav class="navbar navbar-expand-lg shadow">
  <div class="container">
    <a class="navbar-brand mt-2 mt-lg-0" href="home-page.html">
      <img src="assets/images/logo/pet_patron_logo2.png" width="225" height="75" alt="Pet Patron Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
      aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>


    <div class="dashboard collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adopt.php">Adopt a Pet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Shop</a>
        </li>
      </ul>
      <hr>
      <div class="user-menu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="user-login.php">
              <i class="fas fa-user"></i> Login/Signup
            </a>
          </li>

          <!-- When user has logged In -->
          <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="user-log" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="fas fa-user"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="user-log">
                      <li><a class="dropdown-item" href="user.php">Account</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
              </li> -->
        </ul>
      </div>
    </div>
  </div>
  <script>
    $("navbar-toggler").on("click", function() {
      $("navbar").toggle();
    });
  </script>
</nav>

<script>
  $(document).ready(function(){
      $(".gallery li").on("click", function(){
          var dataId = $(this).attr("data-id");
          alert("The data-id of clicked item is: " + dataId);
      });
  });
</script>
    