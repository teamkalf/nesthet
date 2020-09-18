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
        

    }

?>