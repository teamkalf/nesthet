<?php
    include "./backend/new_employee.php";
    include "./backend/security.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <div class="employee_main">
        <div class="employee">
            <div class="employee_header u-margin-bottom-small">
                <h1 class="form_employee_header">new employee</h1>
            </div>
            <form action="" method="post" enctype="multipart/form-data" class="form_container">
                <div class="form_personal_details">
                    <div class="form_personal_detail u-margin-bottom-small">
                        <h3 class="personal_detail">personal details</h3>
                    </div>
                    <label for="name" class="form_label">employee name</label>
                    <input type="text" class="form_input" name="name" id="name" placeholder="specify" required>
                    <label for="address" class="form_label">address</label>
                    <input type="text" class="form_input" name="address" id="address" placeholder="specify" required>
                    <label for="birth" class="form_label">date of birth</label>
                    <input type="text" class="form_input" name="birth" id="birth" placeholder="YY-MM-DD" required>
                    <div class="form_group">
                        <label for="designation" class="form_label">designation</label>
                        <input type="text" class="form_input" name="designation" id="designation" placeholder="specify" required>
                        <div class="form_group-flex">
                            <div class="label">
                                <label for="gender" class="form_label"><h4>gender</h4></label>
                            </div>
                            <div class="form_group-flex-input">
                                <input type="radio" name="gender" id="gender" value="male">Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_detail">
                    <div class="form_contact_detail-header u-margin-bottom-small u-margin-top-small">
                        <h3 class="contact_detail">contact details</h3>
                    </div>
                    <label for="email" class="form_label">email</label>
                    <input type="text" class="form_input" name="email" id="email" placeholder="specify">
                    <label for="phone" class="form_label">telephone</label>
                    <input type="text" class="form_input" name="telephone" id="phone" placeholder="specify">
                </div>
                <div class="form_group form_educational_background">
                    <div class="educational_background u-margin-bottom-small u-margin-top-small">
                        <h3 class="educational_background">education background</h3>
                    </div>
                    <label for="graduated" class="form_label">school graduated</label>
                    <input type="text" class="form_input" name="school_graduated" id="graduate" placeholder="specify" required>
                    <label for="degree" class="form_label">degree/qualification</label>
                    <input type="text" class="form_input" name="qualification_title" id="degree" placeholder="specify" required>
                    <div class="form_group qualification_document">
                        <div class="qualification_document u-margin-bottom-small u-margin-top-small">
                            <h3 class="qualification_document">qualification document</h3>
                        </div>
                        <label for="qualification" class="form_label">licence & qualification</label>
                        <input type="file" class="form_input" name="document">
                    </div>
                </div>
                <div class="button_container">
                    <input type="submit" name="insert" value="enter record" class="submit_btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>