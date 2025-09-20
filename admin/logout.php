<?php

    require("../admin/inc/essentials.php");
    require("../admin/inc/scripts.php");

    session_start();
    session_destroy();
    redirect('../admin/index.php');

?>