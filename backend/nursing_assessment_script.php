<?php
    include 'server-connection.php';

   //database connection

   $db = mysqli_select_db($con,'nesthet');

    if(isset($_POST['insert']))
    {
        //declaration of variables

        //personal data
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $date = $_POST['date'];
                $reg_nurse = $_POST['reg_nurse'];
                $current_complain = $_POST['current_complain'];
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
                $respiratory_system = $_POST['respiratory_system'];
                $cardiovascular_system = $_POST['cardiovascular_system'];
                $internal_nervous_system = $_POST['internal_nervous_system'];
                $gastro_intestinal_system = $_POST['gastro_intestinal_system'];
                $differential_diagnosis = $_POST['differential_diagnosis'];
                $final_diagnosis = $_POST['final_diagnosis'];
                $treatment = $_POST['treatment'];
                $health_education = $_POST['health_education'];
        //routine lab test
                $random_blood_sugar = $_POST['random_blood_sugar'];
                $fast_blood_sugar = $_POST['fast_blood_sugar'];
                $hemoglobin = $_POST['hemoglobin'];
                $blood_group = $_POST['blood_group'];
                $rapid_diagnosis_test = $_POST['rapid_diagnosis_test'];
                $white_blood_cell = $_POST['white_blood_cell'];
                $urinalysis = $_POST['urinalysis'];
        //investigation
                $image_tittle = $_POST['image_tittle'];
        //image insertion
                $picture_name = $_FILES['image']['name'];
                $upload = "uploaded_files/".$picture_name;
        // tests and test results
                $personnel_name = $_POST['personnel_name'];
                $designation = $_POST['designation'];
                $signature = $_POST['signature'];

        //prepare statement

        $insert_query = "INSERT INTO tbl_nursing_assessment(name,gender,date,reg_nurse,current_complain,blood_pressure,temperature,heart_rate,respiratory_rate,oxygen_saturation,general_condition,optional_disease,jaundice,edema,respiratory_system,cardiovascular_system,internal_nervous_system,gastro_intestinal_system,differential_diagnosis,final_diagnosis,treatment,health_education,random_blood_sugar,fast_blood_sugar,hemoglobin,blood_group,rapid_diagnosis_test,white_blood_cell,urinalysis,image_tittle,image,personnel_name,designation,signature)VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $con->prepare($insert_query);

        if(!$stmt){
            //manage error
            echo "error in your query" ;
            exit;
        }

        $stmt->bind_param("ssssssssssssssssssssssssssssssssss",$name,$gender,$date,$reg_nurse,$current_complain,$blood_pressure,$temperature,$heart_rate,$respiratory_rate,$oxygen_saturation,$general_condition,$optional_disease,$jaundice,$edema,$respiratory_system,$cardiovascular_system,$internal_nervous_system,$gastro_intestinal_system,$differential_diagnosis,$final_diagnosis,$treatment,$health_education,$random_blood_sugar,$fast_blood_sugar,$hemoglobin,$blood_group,$rapid_diagnosis_test,$white_blood_cell,$urinalysis,$image_tittle,$upload,$personnel_name,$designation,$signature);

        $stmt->execute();

        move_uploaded_file($_FILES['image']['tmp_name'],$upload);

        echo "<script> alert ('Record inserted and file uploaded Successfully')</script>";
    }

?>