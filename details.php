<?php
    include "./backend/action.php";//action file
    include "./backend/server-connection.php";//server connection
    $db = mysqli_select_db($con,'nesthet');//database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view detail</title>
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
        <div class="tbl_registration_main-container">
            <div class="tbl_registration_main-container_header u-margin-top-small">
                <h1 class="tbl_registration_main-container_header">patient's registration sheet</h1>
            </div>
            <div class="tbl_registration_main-container-sub">
                <h2 class="bl_registration_main-container-sub u-margin-top-small u-margin-bottom-small">personal details</h2>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> registration No : <?= $vregistration_No;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> patient's name : <?= $vname;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> gender : <?= $vgender;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> date : <?= $vdate;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> age : <?= $vage;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> reg_nurse : <?= $vreg_nurse;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> address : <?= $vaddress;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> occupation : <?= $voccupation;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> region : <?= $vregion;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> district : <?= $vdistrict;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> number of children : <?= $vNo_ofKids;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> number of husband/wife : <?= $vNo_ofWives;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> email : <?= $vemail;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> telephone : <?= $vtelephone;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> next of kin : <?= $vnextOf_kin;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> relationship : <?= $vrelationship;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> next of kin address : <?= $vnextOf_kin_address ;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> past medical history : <?= $vmedical_history;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> past surgical history : <?= $vsurgical_history ;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> family history : <?= $vfamily_history;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> personnel name : <?= $vpersonnel_name ;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> designation : <?= $vdesignation;?></h4>
            </div>
            <div class="form_group">
                <h4 class="tbl_registration_main-container_record-detail-darkgray"> department : <?= $vdepartment ;?></h4>
                <h4 class="tbl_registration_main-container_record-detail-lightgray"> signature : <?= $vsignature ;?></h4>
            </div>
    </div>
</body>
</html>