<?php

    include "./backend/server-connection.php";
    include "./backend/request_script.php";
    include "./backend/security.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request form</title>
    <link rel="stylesheet" href="sass/main.css">
</head>
<body>
    <div class="request">
        <div class="request__container">
            <div class="request__header">
                <h1 class="u-margin-bottom-medium">
                    request form
                </h1>
            </div>
            <div class="request_form_holder">
                <form action="#" method="post" class="form">
                    <div class="form_group">
                        <label for="name" class="form_label">Name</label>

                        <input type="text" id="name" name="name" class="form_input" placeholder="Enter Name"required>
    
                        <label for="age" class="form_label">Age</label>

                        <input type="text" id="age" name="age" class="form_input" placeholder="Enter Age" required>
    
                        <label for="sex" class="form_label">Sex</label>

                        <input type="text" id="sex" name="gender" class="form_input" placeholder="Enter Gender" required> 
                    </div>
    
                    <div class="form_group">
                        <label for="address" class="form_label">Address</label>

                        <input type="text" id="address" name="address" class="form_input" placeholder="Enter Address" required>
                    </div>
    
                    <div class="form_group">
                        <label for="date" class="form_label">Date</label>

                        <input type="text" id="date" name="date" class="form_input" placeholder="Enter Date" required>
    
                        <label for="time" class="form_label">Time</label>

                        <input type="text" id="time" name="time" class="form_input" placeholder="Enter Time" required>
                    </div>
    
    
                    <div class="textarea">
                        <div class="textarea_label">
                            <label for="complain" class="textarea_label">Complain</label>
                        </div>
                        <div>
                            <textarea id="complain" cols="30" rows="10" name="complain" class="textarea_adjust" required></textarea>
                        </div>
                    </div>
    
                    <div class="textarea">
                        <div class="textarea_label">
                            <label for="request" class="textarea_label">Request</label>
                        </div>

                        <div>
                            <textarea id="request" cols="30" rows="10" name="request" class="textarea_adjust" required></textarea>
                        </div>
                    </div>
    
                    <div class="form_group">
                        <label for="sign" class="form_label">Signed By</label>

                        <input type="text" id="sign" name="signed_by" class="form_input" placeholder="Signed By" required>
                    </div>
    
                    <div class="button_container">
                        <input type="submit" name="insert" value="enter record" class="submit_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>