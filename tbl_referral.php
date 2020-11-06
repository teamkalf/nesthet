<?php
    include "./backend/action.php";
    include "./backend/server-connection.php";//server connection
    $db = mysqli_select_db($con,'nesthet');//database connection
    //displaying records query
    $query = "SELECT * FROM referral_tbl";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>referral table</title>
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
            <h1 class="tbl_registration_main_header">records on referral table</h1>
        </div>
        <table class="tbl_registration_main_table">
            <thead>
                <tr>
                    <th class="tbl_registration_main-table_head">referred_from</th>
                    <th class="tbl_registration_main-table_head">referred_to</th>
                    <th class="tbl_registration_main-table_head">name</th>
                    <th class="tbl_registration_main-table_head">age</th>
                    <th class="tbl_registration_main-table_head">gender</th>
                    <th class="tbl_registration_main-table_head">address</th>
                    <th class="tbl_registration_main-table_head">nationality</th>
                    <th class="tbl_registration_main-table_head">official_language</th>
                    <th class="tbl_registration_main-table_head">other_language</th>
                    <th class="tbl_registration_main-table_head">referral_date</th>
                    <th class="tbl_registration_main-table_head">referral_time</th>
                    <th class="tbl_registration_main-table_head">reg_No</th>
                    <th class="tbl_registration_main-table_head">history</th>
                    <th class="tbl_registration_main-table_head">findings</th>
                    <th class="tbl_registration_main-table_head">impression</th>
                    <th class="tbl_registration_main-table_head">action</th>
                    <th class="tbl_registration_main-table_head">treatment</th>
                    <th class="tbl_registration_main-table_head">reason</th>
                    <th class="tbl_registration_main-table_head">personnel</th>
                    <th class="tbl_registration_main-table_head">signed_by</th>
                    
                    <th class="tbl_registration_main-table_head">action_performance</th>
                </tr>
                <?php
                while($row = $result->fetch_assoc()){
                ?>
                    <tr>
                        <td class="tbl_registration_main-table_data"><?=$row['referred_from'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['referred_to'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['name'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['age'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['gender'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['address'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['nationality'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['language'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['other'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['referral_date'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['referral_time'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['reg_no'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['history'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['finding'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['impression'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['action'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['treatment'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['reason'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['personnel'];?></td>
                        <td class="tbl_registration_main-table_data"><?=$row['signed_by'];?></td>
                        <td class="tbl_registration_main-table_data">
                            <a href="details.php?details=<?= $row['reg_No']; ?>" class="tbl_registration_main_action-btn tbl_registration_main_action-btn_light-blue ">Details</a> |
                            <a href="referral.php?edit=<?= $row['reg_No']; ?>" class="tbl_registration_main_action-btn tbl_registration_main_action-btn_red-orange">edit</a> |
                            <a href="./backend/action.php?delete=<?= $row['reg_no']; ?>" class="tbl_registration_main_action-btn" onclick="return confirm('Do you want to permanently delete this record?');">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </thead>
        </table>
    </div>
</body>
</html>