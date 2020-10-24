<?php

    include "./backend/server-connection.php";
    include "./backend/referral_script.php";
    include "./backend/security.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>referral</title>
    <link rel="stylesheet" href="sass/main.css">
</head>
<body>
        <div class="referral">
            <div class="referral__container">
                <div class="referral__header">
                <h1 class="u-margin-bottom-medium">
                    referral form
                </h1>
            </div>

            <div class="form__container">
                <form action="" class="form" method="post">

                    <div class="form_group">
                        <label for="referred" class="form_label">Referred From</label>
                        <input type="text" class="form_input" id="referred" name="referred_from" placeholder="referred from"   required>
          
                        <label for="to" class="form_label">To</label>
                        <input type="text" class="form_input" name="referred_to"  id="to" placeholder="to"   required>
                      </div>

                      <div class="form_group">
                        <label for="name" class="form_label">Name</label>
                        <input type="text" class="form_input" name="name"  id="name" placeholder="name"   required>
          
                        <label for="age" class="form_label">Age</label>
                        <input type="text" class="form_input"  name="age"  id="age" placeholder="age"   required>

                        <label for="sex" class="form_label">Sex</label>
                      <input type="text" class="form_input" id="sex" name="gender"  placeholder="gender"   required>
                      </div>
                      
                      <div class="form_group">
                          <label for="address" class="form_label">Address</label>

                          <input type="text" class="form_input form_adjust_input" name="address"  id="address" placeholder="address" required>
                      </div>

                      <div class="form_group">
                            <label for="nationality" class="form_label">Nationality</label>

                            <input type="text" class="form_input" name="nationality"  id="nationality" placeholder="nationality"required>
                        </div>

                        <div class="form_group">
                            <label for="english" class="form_label">Means of communication: English</label>

                            <input type="checkbox" name="language[]" id="english" value="English">
                            <input type="checkbox" name="language[]" id="other" value="other ">Other

                            
                            <input type="text" class="form_input form_adjust_input" name="other" id="other" name="other" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <label for="date" class="form_label">Date of Referral</label>
                            <input type="text" class="form_input" id="date" name="referral_date" name="referred_date"  placeholder="YY-MM-DD"   required>
              
                            <label for="time" class="form_label">Time</label>
                            <input type="text" class="form_input" id="time" name="referral_time"  placeholder="HH:MM:ss"   required>
                        </div>

                        <div class="form_group">
                            <label for="history" class="form_label">History</label>

                            <input type="text" class="form_input form_adjust_input" name="history"  id="history" placeholder="History" required>
                        </div>

                        <div class="form_group">
                            <label for="finding" class="form_label">Finding</label>

                            <input type="text" class="form_input form_adjust_input" name="finding"  id="finding" placeholder="Finding" required>
                        </div>

                        <div class="form_group">
                            <label for="impression" class="form_label">Impression</label>

                            <input type="text" class="form_input form_adjust_input" name="impression"  id="impression" placeholder="impression" required>
                        </div>

                        <div class="form_group">
                            <label for="action" class="form_label">Action</label>

                            <input type="text" class="form_input form_adjust_input" name="action"  id="action" placeholder="Action" required>
                        </div>

                        <div class="form_group">
                            <label for="treatment" class="form_label">Treatment or Medication given</label>

                            <input type="text" class="form_input form_adjust_input" name="treatment"  id="treatment" placeholder="Treatment or Medication given" required>
                        </div>

                        <div class="form_group">
                            <label for="reason" class="form_label">Reason for Referral</label>

                            <input type="text" class="form_input form_adjust_input" name="reason"  id="reason" placeholder="Reason for Referral" required>
                        </div>

                        <div class="form_group">
                            <label for="attending doc" class="form_label">Attending or Referring Personnel</label>

                            <input type="text" class="form_input form_adjust_input" name="personnel"  id="attending doc" placeholder="Attending Personnel" required>
                        </div>

                        <div class="form_group">
                            <label for="sign" class="form_label">Signed by</label>

                            <input type="text" class="form_input" id="sign" name="signed_by"  placeholder="Signed by" required>
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