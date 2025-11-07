<?php 
    require('../admin/inc/essentials.php'); 
    require("../admin/inc/scripts.php");
    adminLogin(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Settings</title>
        <?php require("../admin/inc/links.php"); ?>
        <link rel="stylesheet" href="/css/common.css">
    </head>

    <body class="bg-light">

        <?php require("../admin/inc/header.php"); ?>    
        <?php require("../admin/inc/main_content.php"); ?>

    </body>
</html>