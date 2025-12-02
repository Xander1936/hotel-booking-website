<?php 
    require('../../admin/inc/db_config.php');
    require('../../admin/inc/essentials.php');
    adminLogin();

        if (isset($_POST['add_feature'])) {
            $frm_data = filteration($_POST);

            // Validate the incoming data
            if (!empty($frm_data['name'])) {
                $q = "INSERT INTO `features`(`name`) VALUES (?)";
                $values = [$frm_data['name']];
                $res = insert($q, $values, 's');

                // Return success if inserted
                echo $res ? 1 : 0; // Use ternary for cleaner code
            } else {
                echo 'invalid_input'; // Handle invalid input scenario
            }
        } 

        if (isset($_POST['get_features'])) {
            $res = selectAll('features'); // Fetch features from the database
            $i = 1;

            while ($row = mysqli_fetch_assoc($res)) {
                echo <<<data
                    <tr>
                        <td>$i</td>
                        <td>$row[name]</td>
                        <td>
                            <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm ms-auto shadow-none">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td> 
                    </tr>
                data;
                $i++;
            }
        }

        if (isset($_POST['rem_feature'])) {
            $frm_data = filteration($_POST);
            $values = [$frm_data['rem_feature']];

            $q = "DELETE FROM `features` WHERE `id` = ?";
            $res = delete($q, $values, 'i');
            echo $res; // Return result of the delete operation
        }

        if (isset($_POST['add_facility'])) {
            $frm_data = filteration($_POST);
            $img_r = uploadSVGImage($_FILES['icon'], FACILITIES_FOLDER);

            if ($img_r == 'inv_img' || $img_r == 'inv_size' || $img_r == 'upd_failed') {
                echo $img_r; // Return error response
            } else {
                $q = "INSERT INTO `facilities`(`icon`, `name`, `description`) VALUES (?,?,?)";
                $values = [$img_r, $frm_data['name'], $frm_data['desc']];
                $res = insert($q, $values, 'sss');
                echo $res; // Return the result of the insert operation
            }
        }

        if (isset($_POST['get_facilities'])) {
            $res = selectAll('facilities'); // Fetch facilities from the database
            $i = 1;
            $path = FACILITIES_IMG_PATH;

            while ($row = mysqli_fetch_assoc($res)) {
                echo <<<data
                    <tr class="align-middle">
                        <td>$i</td>
                        <td><img src="$path$row[icon]" width="100px"></td>
                        <td>$row[name]</td>
                        <td>$row[description]</td>
                        <td>
                            <button type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm ms-auto shadow-none">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td> 
                    </tr>
                data;
                $i++;
            }
        }

        if (isset($_POST['rem_facility'])) {
            $frm_data = filteration($_POST);
            $values = [$frm_data['rem_facility']];

            $pre_q = "SELECT * FROM `facilities` WHERE `id`=?";
            $res = select($pre_q, $values, 'i');
            $img = mysqli_fetch_assoc($res);

            if (deleteImage($img['icon'], FACILITIES_FOLDER)) {
                $q = "DELETE FROM `facilities` WHERE `id` = ?";
                $res = delete($q, $values, 'i');
                echo $res; // Return result of the delete operation
            } else {
                echo 0; // If image deletion failed
            }   
        }


    // if (isset($_POST['add_feature'])) {
    //     $frm_data = filteration($_POST);

    //     // Validate the incoming data
    //     if (!empty($frm_data['name'])) {
    //         $q = "INSERT INTO `features`(`name`) VALUES (?)";
    //         $values = [$frm_data['name']];
    //         $res = insert($q, $values, 's');

    //         // Return success if inserted
    //         if ($res) {
    //             echo 1; // Success response
    //         } else {
    //             echo 0; // Failure response
    //         }
    //     } else {
    //         echo 'invalid_input'; // Handle invalid input scenario
    //     }
    // } 

    // if (isset($_POST['get_features'])) {
    //     $res = selectAll('features'); // Fetch features from the database
    //     $i = 1;

    //     while ($row = mysqli_fetch_assoc($res)) {
    //         echo <<<data
    //             <tr>
    //                 <td>$i</td>
    //                 <td>$row[name]</td>
    //                 <td>
    //                     <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm ms-auto shadow-none">
    //                         <i class="bi bi-trash"></i> Delete
    //                     </button>
    //                 </td> 
    //             </tr>
    //         data;
    //         $i++;
    //     }
    // }

    // if (isset($_POST['rem_feature'])) {
    //     $frm_data = filteration($_POST);
    //     $values = [$frm_data['rem_feature']];

    //     $q = "DELETE FROM `features` WHERE `id` = ?";
    //     $res = delete($q, $values, 'i');
    //     echo $res; // Return result of the delete operation
    // }

    // if (isset($_POST['add_facility'])) {
    //     $frm_data = filteration($_POST);

    //     $img_r = uploadSVGImage($_FILES['icon'], FACILITIES_FOLDER);

    //     if($img_r == 'inv_img'){
    //         echo $img_r;
    //     } else if($img_r == 'inv_size'){
    //         echo $img_r;
    //     } else if($img_r == 'upd_failed') {
    //         echo $img_r;
    //     }else {
    //         $q = "INSERT INTO `facilities`(`icon`, `name`, `description`) VALUES (?,?,?)";
    //         $values = [$img_r, $frm_data['name'], $frm_data['desc']];
    //         $res = insert($q, $values, 'sss');
    //         echo $res;
    //     }
    // }
    
    // if (isset($_POST['get_facilities'])) {
    //     $res = selectAll('facilities'); // Fetch facilities from the database
    //     $i = 1;
    //     $path = FACILITIES_IMG_PATH;

    //     while ($row = mysqli_fetch_assoc($res)) {
    //         echo <<<data
    //             <tr class="align-middle">
    //                 <td>$i</td>
    //                 <td><img src="$path$row[icon]" width="100px"></td>
    //                 <td>$row[name]</td>
    //                 <td>$row[description]</td>
    //                 <td>
    //                     <button type="button" onclick="rem_facility($row[id])" class="btn btn-danger btn-sm ms-auto shadow-none">
    //                         <i class="bi bi-trash"></i> Delete
    //                     </button>
    //                 </td> 
    //             </tr>
    //         data;
    //         $i++;
    //     }
    // }

    // if (isset($_POST['rem_facility'])) {
    //     $frm_data = filteration($_POST);
    //     $values = [$frm_data['rem_facility']];

    //     $pre_q = "SELECT * FROM `facilities` WHERE `sr_no`=? ";
    //     $res = select($pre_q, $values, 'i');
    //     $img = mysqli_fetch_assoc($res);

    //     if(deleteImage($img['picture'], FACILITIES_FOLDER)){
    //         $q = "DELETE FROM `facilities` WHERE `id` = ?";
    //     $res = delete($q, $values, 'i');
    //     echo $res; // Return result of the delete operation
    //     }else{
    //         echo 0;
    //     }   
    // }

?>