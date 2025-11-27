<?php 
    require('../../admin/inc/db_config.php');
    require('../../admin/inc/essentials.php');
    adminLogin();

    if(isset($_POST['add_feature'])) {
        $frm_data = filteration($_POST);

        // Validate the incoming data
        if (!empty($frm_data['name'])) {
            $q = "INSERT INTO `features`(`name`) VALUES (?)";
            $values = [$frm_data['name']];
            $res = insert($q, $values, 's');

            // Return success if inserted
            if ($res) {
                echo 1; // Success response
            } else {
                echo 0; // Failure response
            }
        } else {
            echo 'invalid_input'; // Handle invalid input scenario
        }
    } 

    if(isset($_POST['get_features'])){
        
        $res = selectAll('features');
        $i = 1;
        
        while($row = mysqli_fetch_assoc($res)){
            
            echo <<<data
                <tr>
                    <td>$i</td>
                    <td>$row[name]</td>
                    <td>
                        <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm ms-auto shadow-none" style="height: 30px; width: auto;">
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
?>