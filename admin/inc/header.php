<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">Xander Hotel</h3>
        <a href="../admin/logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>

    <div class="d-flex">
        <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-lg-column align-items-stretch" style="height:100%; ">
                    <h4 class="mt-2 text-light">ADMIN PANEL</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a href="../admin/dashboard.php" class="nav-link text-white">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <?php require("/admin/inc/main_content.php"); ?>
    </div>

