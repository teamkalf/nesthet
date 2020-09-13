<?php
  include "./backend/server-connection.php";
  include "./backend/login_script.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>user login</title>
  <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
  <div class="login">
    <div class="login_container">
      <div class="login_container-header">
        <h1 class="header u-margin-bottom-medium">
          user login
        </h1>
      </div>
      <form  method="post" action="user_login.php" class="form">
        <div class="form_group">
          <label for="user name" class="form_label">user name</label>

          <input type="text" name="user" id="username" class="form_input" required>
        </div>

        <div class="form_group">
          <label for="password" class="form_label">password</label>

          <input type="password" name="password" id="password" class="form_input" required>
        </div>

        <div class="button_container">
          <input type="submit" name="btnLogin" value="Login" class="submit_btn">
        </div>
      </form>
    </div>
  </div>
</body>
</html>