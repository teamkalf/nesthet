<?php

  include "./backend/server-connection.php";
  include "./backend/pre_reg_script.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pre-registration</title>
  <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
  <section class="container">
    <div class="row">
      <div class="inner__container">
         <div class="inner__container--form">
          <form action=""  method="post" class="inner__container--form-main">

            <div class="form__header">
              <h2 class="form__tittle u-margin-bottom-small">
                pre-registration
              </h2>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Name" name="name" id="name" required>
              <label for="name" class="form__label">Name</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Age" name="age" id="age" required>
              <label for="age" class="form__label">Age</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Occupation" name="occupation" id="occupation" required>
              <label for="occupation" class="form__label">Occupation</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Organization" name="organization" id="organization" required>
              <label for="organization" class="form__label">Organization</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Role/Designation" name="designation" id="role/designation" required>
              <label for="role/designation" class="form__label">Role/Designation</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Marital Status" name="marital_status" id="marital status" required>
              <label for="marital status" class="form__label">Marital Status</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Telephone" name="telephone" id="telephone" required>
              <label for="telephone" class="form__label">Telephone</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Address" name="address" id="address" required>
              <label for="address" class="form__label">Address</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Compound Name"name="compound_name"  id="compound name" required>
              <label for="compound name" class="form__label">Compound Name</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Compound Head" name="compound_head" id="compound head" required>
              <label for="compound head" class="form__label">Compound Head</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Telephone" name="compound_head_phone" id="telephone" required>
              <label for="telephone" class="form__label">Telephone</label>
            </div>

            <div class="form__group">
              <input type="email" class="form__input" placeholder="Email" name="email" id="email" required>
              <label for="email" class="form__label">Email</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Next of Kin" name="nextOf_kin" id="NOK" required>
              <label for="NOK" class="form__label">Next of Kin</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Relationship" name="relationship" id="Relationship" required>
              <label for="Relationship" class="form__label">Relationship</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Contact Person" name="contact_person" id="contact person" required>
              <label for="contact person" class="form__label">Contact Person</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Telephone" name="contact_person_phone" id="telephone" required>
              <label for="telephone" class="form__label">Telephone</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Nearest Landmark" name="nearest_landmark" id="landmark" required>
              <label for="landmark" class="form__label">Nearest Landmark</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Existing Disease" name="existing_disease" id="disease" required>
              <label for="disease" class="form__label">Existing Disease</label>
            </div>

            <div class="form__group">
              <input type="text" class="form__input" placeholder="Medications" name="medication" id="medication" required>
              <label for="medication" class="form__label">Medications</label>
            </div>
            <div class="button_container">
                        <input type="submit" name="insert" value="Request" class="submit_btn">
                    </div>
            
          </form>
         </div>
      </div>
    </div>
  </section>
</body>
</html>