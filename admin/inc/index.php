<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('../inc/links.php'); ?>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body class="bg-light">
    <div class="container login-form mt-5">
        <form action="login.php" method="POST" class="text-center">
            <h4 class="mb-4">ADMIN LOGIN PANEL</h4>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="text" name="email" class="form-control shadow-none text-center" style="width: 400px; margin: auto;" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control shadow-none text-center" style="width: 400px; margin: auto;" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Login</button>
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Here you would typically check the credentials against a database.
            // For demonstration, we'll just check for a hardcoded email and password.
            if ($email === 'admin@example.com' && $password === 'password123') {
                echo '<div class="alert alert-success mt-3">Login successful!</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Invalid email or password.</div>';
            }
        }
        ?>
    </div>

    <?php require('../inc/scripts.php'); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>