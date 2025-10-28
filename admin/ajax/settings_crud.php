<?php 
    require('../../admin/inc/db_config.php');
    require('../../admin/inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q,$values,'i');
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
        $values = [$frm_data['site_title'], $frm_data['site_about'],1];
        $res = update($q,$values,'ssi'); 
        echo $res;
    }

    if(isset($_POST['upd_shutdown']))
    {
        $frm_data = ($_POST['upd_shutdown']) ? 1 : 0;

        $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
        $values = [$frm_data,1];
        $res = update($q,$values, 'ii');
        echo $res; 
    }

    if(isset($_POST['get_contacts']))
    {
        $q = "SELECT * FROM `contact_details` WHERE  `sr_no`=? ";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if (isset($_POST['upd_contacts'])) {
        // Filter input
        $frm_data = filteration($_POST);

        // Prepare the SQL update statement
        $q = "UPDATE `contact_details` SET 
                `address`=?, 
                `gmap`=?, 
                `pn1`=?, 
                `pn2`=?, 
                `email`=?, 
                `fb`=?, 
                `insta`=?, 
                `tw`=?, 
                `iframe`=? 
                WHERE `sr_no`=?";
        // Ensure this is the correct ID for the record you want to update
        $values = [
            $frm_data['address'], 
            $frm_data['gmap'], 
            $frm_data['pn1'], 
            $frm_data['pn2'], 
            $frm_data['email'],  
            $frm_data['fb'], 
            $frm_data['insta'], 
            $frm_data['tw'], 
            $frm_data['iframe'],1
        ];
        $res = update($q, $values, 'sssssssssi');
        echo $res; 
    }

    if(isset($_POST['add_member']))
    {
        $frm_data = filteration($_POST);

        $img_r = uploadImage($_FILES['picture'],ABOUT_FOLDER);

        if($img_r == 'inv_img'){
            echo $img_r;
        }
        else if($img_r == 'inv_size'){
            echo $img_r;
        }
        else if($img_r == 'upd_failed'){
            echo $img_r;
        }
        else{
            $q = "INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
            $values = [$frm_data['name'], $img_r];
            $res = insert($q, $values, 'ss');
            echo $res;
        }
    }

    if(isset($_POST['get_members'])){
        $res = selectAll('team_details');
        
        while($row = mysqli_fetch_assoc($res)){
            // $path = ABOUT_FOLDER.$row['picture'];
            $path = ABOUT_IMG_PATH;
            echo <<<data
            <div class="col-md-2 mb-3" style="width: 200px; height: auto;">
            <div class="card bg-dark text-white">
                        <!-- <img src="http://localhost/hotel-booking-website/images/about/team.jpg" class="card-img" alt="Team Image"> -->
                        <img src="$path$row[picture]" class="card-img" alt="Team Image" style="width: 100%; height: 200px;">
                        <div class="card-img-overlay d-flex text-end">
                            <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm ms-auto shadow-none" style="height: 30px; width: auto;">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </div>
                        <p class="card-text text-center px-3 py-2"><small>$row[name]</small></p>
                    </div>
                </div>
            data;
        }
    }


    if (isset($_POST['rem_member'])) {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_member']];

        // Corrected SQL syntax: use backticks for table and column names
        $pre_q = "SELECT * FROM `team_details` WHERE `sr_no` = ?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        // Check if the image retrieval was successful before attempting to delete
        if ($img && deleteImage($img['picture'], ABOUT_FOLDER)) {
            $q = "DELETE FROM `team_details` WHERE `sr_no` = ?";
            $res = delete($q, $values, 'i');
            echo $res; // Return result of the delete operation
        } else {
            echo 0; // Return 0 if image deletion fails or no image found
        }
    }
?>