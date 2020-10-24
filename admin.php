<?php
     include "./backend/security.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
    <link rel="stylesheet" href="./sass/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css">
</head>
<body>

    <div class="admin_container">
        <header class="admin_header">
            <div class="admin_header_name">
                <h2 class="admin_header_name_style">
                admin<span class="admin_header_name_span">dashboard</span>
                </h2>
            </div>
            <div class="admin_header_container">
                <a href="logout.php" class="admin_header_container-btn">logout</a>
                <a href="test_result.php" class="admin_header_container-btn">test result</a>
            </div>
        </header>
        <div class="sidebar">
            <div class="sidebar-header u-margin-bottom-small">
                <h3 class="sidebar-header">my applications</h3>
            </div>
            <a href="index.php" class="sidebar_anchor">home</a>
            <a href="#" class="sidebar_anchor">new user</a>
            <a href="#" class="sidebar_anchor">users</a>
            <a href="new_employee.php" class="sidebar_anchor">new employee</a>
            <a href="#" class="sidebar_anchor">employee</a>
            <a href="mdi_parent.php" class="sidebar_anchor">forms</a>
            <div class="table-menu">
                <button class="button-menu">tables</button>
            </div>
        </div>
    </div>
</body>
</html>