<?php

   //database connection
   $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        //declaration of variables
        //personal data
        
        $name = $_POST['name'];
        $telephone = $_POST['telephone'];

        //vital section

        $blood_pressure = $_POST['blood_pressure'];
        $temperature = $_POST['temperature'];
        $heart_rate = $_POST['heart_rate'];
        $respiratory_rate = $_POST['respiratory_rate'];
        $oxygen_saturation = $_POST['oxygen_saturation'];

        //examination section

        $general_condition = $_POST['general_condition'];
        //checkbox data capture
        $option = $_POST['optional_disease'];
        $optional_disease = implode (',',$option);

        $jaundice = $_POST['jaundice'];
        $edema = $_POST['edema'];

        //routine lab test

        $random_blood_sugar = $_POST['random_blood_sugar'];
        $fast_blood_sugar = $_POST['fast_blood_sugar'];
        $hemoglobin = $_POST['hemoglobin'];
        $blood_group = $_POST['blood_group'];
        $rapid_diagnosis_test = $_POST['rapid_diagnosis_test'];
        $white_blood_cell = $_POST['white_blood_cell'];

        //investigation

        $image_tittle = $_POST['image_tittle'];
        
        //image insertion
        $picture_name = random(1000,10000)."-".$_FILES["image"]["name"];
        $temporary_name = $_FILES["files"]["tmp_name"];
        $upload_directory ='./uploaded_files';
        move_uploaded_file($temporary_name, $upload_directory.'/'.$picture_name);

        // tests and test results
        $first_test = $_POST['first_test'];
        $f_test_result = $_POST['f_test_result'];
        $second_test = $_POST['second_test'];
        $s_test_result = $_POST['s_test_result'];
        $third_test = $_POST['third_test'];
        $t_test_result = $_POST['t_test_result'];

        //sql injection security

        $name = mysqli_real_escape_string($con , $name);
        $telephone = mysqli_real_escape_string($con , $telephone);
        $blood_pressure = mysqli_real_escape_string($con , $blood_pressure);
        $temperature = mysqli_real_escape_string($con , $temperature);
        $heart_rate = mysqli_real_escape_string($con , $heart_rate);
        $respiratory_rate = mysqli_real_escape_string($con , $respiratory_rate);
        $oxygen_saturation = mysqli_real_escape_string($con , $oxygen_saturation);
        $random_blood_sugar = mysqli_real_escape_string($con , $random_blood_sugar);
        $fast_blood_sugar = mysqli_real_escape_string($con , $fast_blood_sugar);
        $hemoglobin = mysqli_real_escape_string($con , $hemoglobin);
        $blood_group = mysqli_real_escape_string($con , $blood_group);
        $rapid_diagnosis_test = mysqli_real_escape_string($con , $rapid_diagnosis_test);
        $white_blood_cell = mysqli_real_escape_string($con , $white_blood_cell);
        $image_tittle = mysqli_real_escape_string($con , $image_tittle);
        $first_test = mysqli_real_escape_string($con , $first_test);
        $f_test_result = mysqli_real_escape_string($con , $f_test_result);
        $second_test = mysqli_real_escape_string($con , $second_test);
        $s_test_result = mysqli_real_escape_string($con , $s_test_result);
        $third_test = mysqli_real_escape_string($con , $third_test);
        $t_test_result = mysqli_real_escape_string($con , $t_test_result);

        //mysql insert query

        $insert_query = ("INSERT into tbl_test_result (name , telephone , blood_pressure , temperature , heart_rate , respiratory_rate , oxygen_saturation , general_condition , optional_disease , jaundice , edema , random_blood_sugar, fast_blood_sugar , hemoglobin , blood_group , rapid_diagnosis_test , white_blood_cell , image_tittle , image , first_test , f_test_result , second_test , s_test_result ,third_test , t_test_result) values ('$name' , '$telephone' , '$blood_pressure' , '$temperature' , '$heart_rate' , '$respiratory_rate' , '$oxygen_saturation' , '$general_condition' , '$optional_disease' , '$jaundice' , '$edema' , '$random_blood_sugar' , '$fast_blood_sugar' , '$hemoglobin' , '$blood_group' , '$rapid_diagnosis_test' , '$white_blood_cell' , '$image_tittle' , '$picture_name' , '$first_test' , '$f_test_result' , '$second_test' , '$s_test_result' , '$third_test' , '$t_test_result')");

        //run sql query

        if(mysqli_query($con , $insert_query))
        {
            echo "<script> alert ('Record inserted Successfully') </script>";
        }
        else
         {
            echo "<script> alert ('Record Failed to inserted please try again') </script>";
         }
    }

?>