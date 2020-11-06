<?php
    include "./backend/action.php";
    include "./backend/server-connection.php";//server connection
    $db = mysqli_select_db($con,'nesthet');//database connection
    //displaying records query
    $query = "SELECT * FROM tbl_registration";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration table</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <div class="tbl_registration_main">
        <div class="tbl_registration_main_navbar">
            <div class="tbl_registration_main-logo">
                <h3 class="tbl_registration_main-logo">nesthet app</h3>
            </div>
            <div class="tbl_registration_main_navbar_search">
                <a href="mdi_parent.php" class="tbl_registration_main_navbar_search-nav">home</a>
                <input type="text" name="search" class="form_input" placeholder="search">
                <button class="tbl_registration_main_navbar-search-btn">search</button>
            </div>
        </div>
        <div class="tbl_registration_main_header">
            <h1 class="tbl_registration_main_header">records on registration table</h1>
        </div>
        <table class="tbl_registration_main_table">
            <thead>
                <tr>
                    <th class="tbl_registration_main-table_head">reg_No</th>
                    <th class="tbl_registration_main-table_head">name</th>
                    <th class="tbl_registration_main-table_head">gender</th>
                    <th class="tbl_registration_main-table_head">date</th>
                    <th class="tbl_registration_main-table_head">age</th>
                    <th class="tbl_registration_main-table_head">reg_nurse</th>
                    <th class="tbl_registration_main-table_head">address</th>
                    <th class="tbl_registration_main-table_head">occupation</th>
                    <th class="tbl_registration_main-table_head">region</th>
                    <th class="tbl_registration_main-table_head">district</th>
                    <th class="tbl_registration_main-table_head">No_of_kids</th>
                    <th class="tbl_registration_main-table_head">No_of_wives</th>
                    <th class="tbl_registration_main-table_head">email</th>
                    <th class="tbl_registration_main-table_head">telephone</th>
                    <th class="tbl_registration_main-table_head">nextOf_kin</th>
                    <th class="tbl_registration_main-table_head">relationship</th>
                    <th class="tbl_registration_main-table_head">nextOf_kin_address</th>
                    <th class="tbl_registration_main-table_head">medical_history</th>
                    <th class="tbl_registration_main-table_head">surgical_history</th>
                    <th class="tbl_registration_main-table_head">family_history</th>
                    <th class="tbl_registration_main-table_head">personnel_name</th>
                    <th class="tbl_registration_main-table_head">designation</th>
                    <th class="tbl_registration_main-table_head">department</th>
                    <th class="tbl_registration_main-table_head">signature</th>
                    <th class="tbl_registration_main-table_head">action_performance</th>
                </tr>
                <?php
                while($row = $result->fetch_assoc()){
                ?>
                    <tr>
                        <td class="tbl_registration_main-table_data"><?=$row['registration_No'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['name'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['gender'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['date'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['age'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['reg_nurse'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['address'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['occupation'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['region'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['district'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['No_of_kids'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['No_of_wives'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['email'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['telephone'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['nextOf_kin'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['relationship'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['nextOf_kin_address'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['medical_history'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['surgical_history'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['family_history'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['personnel_name'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['designation'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['department'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['signature'];?></td>
                        <td class="tbl_registration_main-table_data">
                            <a href="details.php?details=<?= $row['registration_No']; ?>" class="tbl_registration_main_action-btn tbl_registration_main_action-btn_light-blue ">Details</a> |
                            <a href="registration.php?edit=<?= $row['registration_No']; ?>" class="tbl_registration_main_action-btn tbl_registration_main_action-btn_red-orange">edit</a> |
                            <a href="./backend/action.php?delete=<?= $row['registration_No']; ?>" class="tbl_registration_main_action-btn" onclick="return confirm('Do you want to permanently delete this record?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </thead>
        </table>
    </div>
</body>
</html>