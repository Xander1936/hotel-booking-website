<?php 
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();

    if (isset($_POST['add_feature'])) {
        $frm_data = filteration($_POST);

        // Validate the incoming data
        if (!empty($frm_data['name'])) {
            $q = "INSERT INTO `features`(`name`) VALUES (?)";
            $values = [$frm_data['name']];
            $res = insert($q, $values, 's');

            // Return success if inserted
            if ($res !== 0) {
                echo 1; // Success response
            } else {
                echo 0; // Failure response
            }
        } else {
            echo 'invalid_input'; // Handle invalid input scenario
        }
    }

    // Other query handling code...

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>
    <?php require("../admin/inc/links.php"); ?>
    <style>
        /* Custom CSS to adjust button size and alignment */
        .btn-custom {
            min-width: 100px;  
            padding: 10px 20px; 
            font-size: 14px; 
            margin: 0 5px; 
        }
        .action-buttons {
            display: flex; 
            flex-direction: column; 
        }
    </style>
</head>

<body class="bg-light">
    <?php require("../admin/inc/header.php"); ?>
    
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-3 p-3 overflow-hidden">
                <h3 class="mb-4">FEATURES & FACILITIES</h3>

                <!-- Features Section Starts -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#feature-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="table-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="features-data">
                                    <!-- Features will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Features Section Ends -->

                <!-- Facilities Section Starts -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Facilities</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#facility-s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead>
                                    <tr class="table-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" width="40%">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="facilities-data">
                                    <!-- Facilities will be loaded here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Facilities Section Ends -->

                <!-- Feature Modal Section Starts -->
                <div class="modal fade" id="feature-s" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="feature_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Feature</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="feature_name" class="form-control shadow-none" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg btn-outline-dark shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Feature Modal Ends -->

                <!-- Facility Modal Section Starts -->
                <div class="modal fade" id="facility-s" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="facility_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Facility</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Name</label>
                                        <input type="text" name="facility_name" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold" for="icon">Icon</label>
                                        <input type="file" name="facility_icon" accept=".svg" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea name="facility_desc" class="form-control shadow-none" id="description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg btn-outline-dark shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Facility Modal Ends -->

                <!-- Fetch features on page load -->
                <script>
                    let feature_s_form = document.getElementById('feature_s_form');
                    let facility_s_form = document.getElementById('facility_s_form');


                    feature_s_form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        add_feature();
                    });

                    facility_s_form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        add_facility();
                    });

                    function add_feature() {
                        let data = new FormData();
                        data.append('name', feature_s_form.elements['feature_name'].value);
                        data.append('add_feature', '');

                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "features_facilities.php", true);

                        xhr.onload = function() {
                            var myModal = document.getElementById('feature-s');
                            var modal = bootstrap.Modal.getInstance(myModal);
                            modal.hide();

                            if (this.responseText === '0') {
                                alert('error', 'Server Down! Try again!');
                            } else if (this.responseText === 'invalid_input') {
                                alert('error', 'Please enter a valid feature name.');
                            } else {
                                alert('success', 'New feature added!');
                                get_features(); // Refresh feature list
                                feature_s_form.reset(); // Reset the form
                            }
                        };

                        xhr.send(data);
                    }

                    function get_features() {
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/features_facilities.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            document.getElementById('features-data').innerHTML = this.responseText;
                        };

                        xhr.send('get_features');
                    }

                    function rem_feature(val) {
                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/features_facilities.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            if (this.responseText == 1) {
                                alert('success', 'Feature removed!'); 
                                get_features(); // Refresh the feature list
                            } else {
                                alert('error', 'Server down!');
                            }
                        };

                        xhr.send('rem_feature=' + val);
                    }

                    function add_facility() {
                        let data = new FormData();
                        data.append('name', facility_s_form.elements['facility_name'].value);
                        data.append('icon', facility_s_form.elements['facility_icon'].files[0]);
                        data.append('desc', facility_s_form.elements['facility_desc'].value);
                        data.append('add_facility', '');

                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "features_facilities.php", true);

                        xhr.onload = function() {
                            var myModal = document.getElementById('facility-s');
                            var modal = bootstrap.Modal.getInstance(myModal);
                            modal.hide();

                            if (this.responseText == 'inv_img') {
                                alert('error', 'Only SVG images are allowed!');
                            } else if (this.responseText == 'inv_size') {
                                alert('error', 'Image should be less than 1MB!');
                            } else if(this.responseText == 'upd_failed'){
                                alert('error', 'Image upload failed. Server Down!')
                            }else {
                                alert('success', 'New facility added!');

                                facility_s_form.reset(); // Reset the form
                                get_facilities(); // Refresh feature list
                            }
                        };

                        xhr.send(data);
                    }

                    function get_facilities() {
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/features_facilities.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            document.getElementById('facilities-data').innerHTML = this.responseText;
                        };

                        xhr.send('get_facilities');
                    }

                    function rem_facility(val) {
                        let xhr = new XMLHttpRequest();
                        xhr.open("POST", "ajax/features_facilities.php", true);
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                        xhr.onload = function() {
                            if (this.responseText == 1) {
                                alert('success', 'Facility removed!'); 
                                get_facilities(); // Refresh the feature list
                            } else if(this.responseText == "room_added"){
                                alert('error', 'Facility is added in room!');
                            }else {
                                alert('error', 'Server down!');
                            }
                        };

                        xhr.send('rem_facility=' + val);
                    }

                    window.onload = function() {
                        get_features(); // Load features when the page loads
                        get_facilities(); // Load facilities when the page loads
                    };
                </script>
            </div>    
        </div>
    </div>
    
    <?php require('inc/scripts.php'); ?>
</body>
</html>