<?php 
    require('../../admin/inc/db_config.php');
    require('../../admin/inc/essentials.php');
    adminLogin();

    if(isset($_POST['add_image']))
    {
        $img_r = uploadImage($_FILES['picture'],CAROUSEL_FOLDER);

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
            $q = "INSERT INTO `carousel`(`image`) VALUES (?)";
            $values = [$img_r];
            $res = insert($q, $values, 's');
            echo $res;
        }
    }

    if(isset($_POST['get_carousel'])){
        $res = selectAll('carousel');
        
        while($row = mysqli_fetch_assoc($res)){
            // $path = ABOUT_FOLDER.$row['picture'];
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
            <div class="col-md-4 mb-3" style="width: 400px; height: auto;">
            <div class="card bg-dark text-white w-100" style="width: auto; height: 250px;">
                        <!-- <img src="http://localhost/hotel-booking-website/images/about/team.jpg" class="card-img" alt="Team Image"> -->
                        <img src="$path$row[image]" class="card-img" alt="Carousel Image" style="width: auto; height: 250px; border: 4px;">
                        <div class="card-img-overlay d-flex text-end">
                            <button type="button" onclick="rem_image($row[sr_no])" class="btn btn-danger btn-sm ms-auto shadow-none" style="height: 30px; width: auto;">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            data;
        }
    }


    if (isset($_POST['rem_image'])) {
        $frm_data = filteration($_POST);
        $values = [$frm_data['rem_image']];

        // Corrected SQL syntax: use backticks for table and column names
        $pre_q = "SELECT * FROM `carousel` WHERE `sr_no` = ?";
        $res = select($pre_q, $values, 'i');
        $img = mysqli_fetch_assoc($res);

        // Check if the image retrieval was successful before attempting to delete
        if ($img && deleteImage($img['image'], CAROUSEL_FOLDER)) {
            $q = "DELETE FROM `carousel` WHERE `sr_no` = ?";
            $res = delete($q, $values, 'i');
            echo $res; // Return result of the delete operation
        } else {
            echo 0; // Return 0 if image deletion fails or no image found
        }
    }
?>