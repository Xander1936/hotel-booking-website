        <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
            <h3 class="navbar-brand me-5 fw-bold fs-3 h-font mb-0">Xander Hotel</h3>
            <a href="../admin/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>

        <div class="d-flex">
            <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu" style="height:auto;">
                <nav class="navbar navbar-expand-lg navbar-dark flex-column" style="height: 100%;">
                    <div class="container-fluid flex-lg-column align-items-stretch h-auto" style="height: auto;">
                        <div class="admin-menu d-flex align-items-center m-auto p-1 justify-content-between">
                            <div class="m-1">
                                <h4 class="mt-1 text-light">ADMIN PANEL</h4>
                            </div>
                            <div>
                                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="false" aria-label="Toggle navigation" >
                                    <span class="navbar-toggler-icon" style="width: 20px; height: 20px;"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-1" id="adminDropdown">
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
                                    <a href="settings.php" class="nav-link text-white">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>