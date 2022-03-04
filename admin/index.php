<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: ../admin/login.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header("Location: ../admin/login.php");
    }
?>

<?php include '../admin/includes/header.php'; ?>

    <div class="container-fluid px-0 vh-100 vw-100" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-sidebar py-3" id="sidebar-wrapper">
            <div class="sidebar-heading px-2">
                <img class="img-fluid" src="../assets/images/logo/pet_patron_logo1.png" alt="pet_patron_logo">
                <h4 class="mt-2">admin panel</h4>
                <h5>Hello, <?php echo $_SESSION['username']; ?></h5>
            </div>
            <hr>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action" id="dashboard">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a  class="list-group-item list-group-item-action" id="pets">
                    <i class="fas fa-paw me-2"></i>Pets for Adoption
                </a>
                <a  class="list-group-item list-group-item-action" id="org">
                    <i class="fas fa-users me-2"></i>Rescue Organization
                </a>
                <a  class="list-group-item list-group-item-action" id="orders">
                    <i class="fas fa-shopping-bag me-2"></i>Orders
                </a>
                <a  class="list-group-item list-group-item-action" id="inventory">
                    <i class="fa-solid fa-boxes-stacked me-2"></i>Inventory
                </a>
            </div>
            <hr>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action" id="admin">
                    <i class="fas fa-user-shield me-2"></i>Admin
                </a>
                <a href="index.php?logout='1'" class="list-group-item list-group-item-action" id="log">
                    <i class="fas fa-power-off me-2"></i>Logout
                </a>
            </div>
        </div>
        <!-- Sidebar -->

        <!-- Content -->
        <div id="content-wrapper">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4 shadow">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0" id="nav-name">Dashboard</h2>
                </div>
            </nav>
            <!-- Navbar -->

            <div id="content"></div>
        </div>
        <!-- Content -->
    </div>

<?php include '../admin/includes/footer.php'; ?>
