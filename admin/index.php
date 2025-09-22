<?php
    require("../admin/inc/essentials.php");
    require("../admin/inc/db_config.php");

    session_start(); // Start the session for admin login 
    session_regenerate_id(true);
    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true){
        header("Location: ../admin/dashboard.php"); // Redirect to dashboard if already logged in
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('../admin/inc/links.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light mt-5 sm-mt-5">
    <div class="container-fluid login-form text-center rounded bg-white shadow overflow-hidden" style="width: 320px; height: 300px; margin: auto; padding: 0px;">
        <div class="row justify-content-center align-items-center text-center pt-auto bg-dark  overflow-hidden" style="width: auto; height: 70px;">
            <h4 class="text-center py-2 text-white">Admin Login Panel</h4>
        </div>
        <form method="POST" class="text-center">
            <div class="row">
                <div class="p-5">
                    <div class="mb-3">
                        <input type="text" name="admin_name" class="form-control shadow-none text-center" style="width: 200px; margin: auto;" placeholder="Admin Name" required>
                    </div>
                    <div class="mb-4">
                        <input type="password" name="admin_pass" class="form-control shadow-none text-center" style="width: 200px; margin: auto;" placeholder="Password" required>
                    </div>
                    <button name="login" type="submit" class="btn text-white btn-success shadow-none">Login</button>
                </div>
            </div>
        </form>
    </div>

    <?php
            if(isset($_POST['login'])){
                $frm_data = filteration($_POST);

                // echo"<h1>$frm_data[admin_name]</h1>";
                // echo"<h1>$frm_data[admin_pass]</h1>";
                // print_r($frm_data);
                
                $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
                $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
                
                $res = select($query, $values, "ss");
                // print_r($res);


                if($res -> num_rows == 1){
                    echo "got user";
                    $row = mysqli_fetch_assoc($res);
                    $_SESSION['adminLogin'] = true;
                    $_SESSION['adminId'] = $row['sr_no'];
                    header("Location: ../admin/dashboard.php"); // Redirect to dashboard
                    exit();
                }
                else{
                    alert('error',"Login Failed - Invalid Credentials !");
                }
            }

    ?>

    <?php require('../admin/inc/scripts.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>