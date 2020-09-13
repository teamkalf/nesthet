<?php

    include "./backend/server-connection.php";
    include "./backend/prescription_script.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prescription</title>
    <link rel="stylesheet" href="sass/main.css">
</head>
<body>
    <div class="prescription">
        <div class="prescription_sub">
            <div class="prescription_header">
                <h1 class="u-margin-bottom-medium">
                    Prescription form
                </h1>
            </div>

            <div class="form_container">
                <form action="" method="post">
                    <div class="form_group">
                        <label for="name" class="form_label">
                            Name
                        </label>

                        <input type="text" class="form_input form_" id="name" name="name" placeholder="name" required> 

                        <label for="age" class="form_label">
                            Age
                        </label>

                        <input type="text" class="form_input " id="age" name="age" placeholder="Age" required>
                        
                        <label for="sex" class="form_label">
                            Sex
                        </label>

                        <input type="text" class="form_input " id="sex" name="gender" placeholder="gender" required> 
                    </div>

                    <div class="form_group">
                        <label for="address" class="form_label">
                            Address
                        </label>

                        <input type="text" class="form_input form_input_adjust " id="address" name="address" placeholder="address" required> 
                    </div>

                    <div class="form_group">
                        <label for="date" class="form_label">
                            Date
                        </label>

                        <input type="text" class="form_input form_" id="date" name="date" placeholder="date" required> 

                        <label for="time" class="form_label">
                            Time
                        </label>

                        <input type="text" class="form_input " id="time" name="time" placeholder="time" required>
                        
                    </div>

                    <div class="form_group">
                        <label for="diagnosis" class="form_label">
                            Diagnosis
                        </label>

                        <input type="text" class="form_input form_input_adjust " id="diagnosis" name="diagnosis" placeholder="diagnosis" required> 
                    </div>

                    <div class="textarea_con">
                        <div class="textarea_con_label">
                            <label for="treatment">
                                Treatment
                            </label>
                        </div>

                        <div class="textarea_con">
                            <textarea id="treatment" cols="30" rows="10" name="treatment" class="textarea_con_input"></textarea>
                        </div>
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