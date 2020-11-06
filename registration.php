<?php
  include "./backend/server-connection.php";
  include "./backend/registration_script.php";
  include "./backend/security.php";
  include "./backend/action.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>registration</title>
  <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
  <div class="registration">
    <div class="registration__container">
      <div class="registration__header">
        <h1 class="u-margin-bottom-medium">
          registration form
        </h1>
      </div>
      <form action="" method="post" class="form">
        <section class="personal__data">
          <div class="personal__data--tittle">
            <h3 class="u-margin-bottom-small">
              Personal Data
            </h3>
          </div>

          <div class="personal__data--container">
            <input type="hidden" name = "registration_No" value ="<?= $registration_No; ?>">
            <div class="form_group">
              <label for="name" class="form_label">Name</label>
              <input type="text" class="form_input" id="name" placeholder="name" name="name" value ="<?= $name; ?>"  required>

              <label for="Sex" class="form_label">Sex</label>
              <input type="text" class="form_input" id="Sex" placeholder="gender"  name="gender" value ="<?= $gender; ?>" required>

              <label for="Date" class="form_label">Date</label>
              <input type="text" class="form_input" id="Date" placeholder="YY-MM-DD" name="date" value ="<?= $date; ?>" required>
            </div>

            <div class="form_group">
              <label for="age" class="form_label">age</label>
              <input type="text" class="form_input" id="age" placeholder="age"  name="age" value ="<?= $age; ?>" required>

              <label for="nurse" class="form_label">Reg. Nurse</label>
              <input type="text" class="form_input" id="nurse" placeholder="reg. nurse" name="reg_nurse" value ="<?= $reg_nurse; ?>" required>
            </div>

            <div class="form_group">
              <label for="address" class="form_label">address</label>
              <input type="text" class="form_input" id="address" placeholder="address" name="address" value ="<?= $address; ?> " required>

              <label for="occupation" class="form_label">occupation</label>
              <input type="text" class="form_input" id="occupation" placeholder="occupation" name="occupation" value ="<?= $occupation; ?>" required>
            </div>

            <div class="form_group">
              <label for="Region" class="form_label">Region</label>
              <input type="text" class="form_input" id="Region" placeholder="region" name="region" value ="<?= $region; ?>" required>

              <label for="district" class="form_label">district</label>
              <input type="text" class="form_input" id="district" placeholder="district" name="district" value ="<?= $district; ?>" required>
            </div>

            <div class="form_group">
              <label for="children" class="form_label">Number of children</label>
              <input type="text" class="form_input" id="children" placeholder="number of children" name="No_of_kids" value ="<?= $No_ofKids; ?>" required>

              <label for="wives" class="form_label">number of wives</label>
              <input type="text" class="form_input" id="wives" placeholder="number of wives"  name="No_of_wives" value ="<?= $No_ofWives; ?>" required>
            </div>
          </div>
        </section>

        <section class="section__contact">
          <div class="section__contact--tittle">
            <h3 class="u-margin-bottom-small">
              contact details/ history
            </h3>
          </div>

          <div class="form_group">
            <label for="email" class="form_label">email</label>
            <input type="email" class="form_input" id="email" placeholder="email"  name="email" value ="<?= $email; ?>" required>

            <label for="Telephone" class="form_label">Telephone</label>
            <input type="text" class="form_input" id="Telephone" placeholder="telephone" name="telephone" value ="<?= $telephone; ?>" required>
          </div>

          <div class="form_group">
            <label for="Kin" class="form_label">Next of Kin</label>
            <input type="text" class="form_input" id="Kin" placeholder="next of kin" name="nextOf_kin" value ="<?= $nextOf_kin; ?>" required>

            <label for="Relationship" class="form_label">Relationship</label>
            <input type="text" class="form_input" id="Relationship" placeholder="relationship" name="relationship" value ="<?= $relationship; ?>" required>
          </div>

          <div class="form_group">
            <label for="nok" class="form_label">Address NOK</label>
            <input type="text" class="form_input" id="nok" placeholder="address NOK" name="nextOf_kin_address" value ="<?= $nextOf_kin_address; ?>" required >
          </div>

          <div class="history">
            <div class="form_group textarea_flex">
              <div>
                <label for="medical" class="form_label">past medical history</label>
              </div>

              <div class="textarea">
                <textarea  id="medical" cols="40" rows="10" placeholder="past medical history" class="textarea_adjust"  name="medical_history" value ="<?= $medical_history; ?>" ></textarea>
              </div>
            </div>

            <div class="form_group ">
              <div>
                <label for="medical" class="form_label">past surgical history</label>
              </div>

              <div class="textarea">
                <textarea  id="surgical" cols="40" rows="10" placeholder="past surgical history" class="textarea_adjust" name="surgical_history" value ="<?= $surgical_history; ?>" ></textarea>
              </div>
            </div>

            <div class="form_group textarea_flex">
              <div>
                <label for="family" class="form_label">family history</label>
              </div>
              <div class="textarea">
                <textarea  id="family" cols="40" rows="10" placeholder="Family history" class="textarea_adjust" name="family_history" value ="<?= $family_history; ?>" ></textarea>
              </div>
            </div>
          </div>
        </section>

        <section class="section__complete">
          <div class="section__complete--tittle">
            <h3 class="u-margin-bottom-small u-margin-top-small">
              Completed By
            </h3>
          </div>

          <div class="form_group">
            <label for="name2" class="form_label">Name</label>
            <input type="text" class="form_input" id="name" placeholder="Name" name="personnel_name" value ="<?= $personnel_name; ?>" required>

            <label for="designation" class="form_label">Designation</label>
            <input type="text" class="form_input" id="designation" placeholder="designation" name="designation" value ="<?= $designation; ?>" required>
          </div>

          <div class="form_group">
            <label for="dpt" class="form_label">Department</label>
            <input type="text" class="form_input" id="dpt" placeholder="Department"name="department" value ="<?= $department; ?>" required>

            <label for="sign" class="form_label">Signature</label>
            <input type="text" class="form_input" id="sign" placeholder="signature" name="signature" value ="<?= $signature; ?>" required>
          </div>
        </section>

        <div class="button_container">
          <?php if($update==true){ ?>
            <input type="submit" name="update" value="update record" class="submit_btn">
          <?php } else{ ?>
            <input type="submit" name="insert" value="enter record" class="submit_btn">
          <?php } ?>
        </div>
      </form>
    </div>
  </div>
</body>
</html>