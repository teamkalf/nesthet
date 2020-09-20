<?php
    include 'server-connection.php';

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
        $picture_name = $_FILES['image']['name'];
        $upload = "uploaded_files/".$picture_name;

        // tests and test results
        $first_test = $_POST['first_test'];
        $f_test_result = $_POST['f_test_result'];
        $second_test = $_POST['second_test'];
        $s_test_result = $_POST['s_test_result'];
        $third_test = $_POST['third_test'];
        $t_test_result = $_POST['t_test_result'];

        
        
        //sql injection security using prepared statement
        $insert_query = "INSERT into tbl_test_result (name , telephone , blood_pressure , temperature , heart_rate , respiratory_rate , oxygen_saturation , general_condition , optional_disease , jaundice , edema , random_blood_sugar, fast_blood_sugar , hemoglobin , blood_group , rapid_diagnosis_test , white_blood_cell , image_tittle , image , first_test , f_test_result , second_test , s_test_result ,third_test , t_test_result)values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $con->prepare($insert_query);

        if(!$stmt){
            //manage error
            echo "error in your query" ;
            exit;
        }
        $stmt->bind_param("sssssssssssssssssssssssss",$name , $telephone , $blood_pressure , $temperature , $heart_rate , $respiratory_rate , $oxygen_saturation , $general_condition , $optional_disease , $jaundice , $edema , $random_blood_sugar , $fast_blood_sugar , $hemoglobin , $blood_group , $rapid_diagnosis_test , $white_blood_cell , $image_tittle , $upload , $first_test , $f_test_result , $second_test , $s_test_result , $third_test , $t_test_result);

        $stmt->execute();

        move_uploaded_file($_FILES['image']['tmp_name'],$upload);

        echo "<script> alert ('Record inserted Successfully') </script>";
        
    }

?>