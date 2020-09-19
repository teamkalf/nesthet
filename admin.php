

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_panel</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <?php
        include "./backend/security.php";
    ?>
    <div class="admin_container">
        <header class="admin_header">
            <div class="admin_header_name">
                <h2 class="admin_header_name_style">
                control<span class="admin_header_name_span">panel</span>
                </h2>
            </div>
            <div class="admin_header_container">
                <a href="logout.php" class="admin_header_container-btn">logout</a>
                <a href="test_result.php" class="admin_header_container-btn">test result</a>
            </div>
        </header>

        <div class="sidebar">
            <a href="#" class="sidebar_anchor">new user</a>
            <a href="#" class="sidebar_anchor">forms</a>
            <a href="#" class="sidebar_anchor">tables</a>
            <a href="#" class="sidebar_anchor">new user</a>
            <a href="#" class="sidebar_anchor">forms</a>
            <a href="#" class="sidebar_anchor">tables</a>
        </div>
    </div>
</body>
</html>