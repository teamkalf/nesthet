<?php
    include "./backend/test_result_script.php";
    include "./backend/security.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test result</title>
    <link rel="stylesheet" href="sass/main.css">
</head>
<body>
    <div class="test_result">
        <div class="test_result-sub">
            <div class="test_result-header">
                <h1 class="u-margin-bottom-medium">
                    test results
                </h1>
            </div>

            <form action="" method="post"  enctype="multipart/form-data" class="form">
                <div class="form_section_personal-detail">
                    <div class="form_section-tittle">
                        <h3 class="u-margin-bottom-small">
                            personal data
                        </h3>
                    </div>

                    <div class="form_group">
                        <label for="name" class="form_label">Name</label>
                        <input type="text" class="form_input" id="name" name="name" placeholder="name"   required>
            
                        <label for="phone" class="form_label">Telephone</label>
                        <input type="text" class="form_input" id="phone" name="telephone" placeholder="phone"   required>
                    </div>
                </div>

                <div class="form_vital_section">
                    <div class="form_vital-tittle">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            vital
                        </h3>
                    </div>

                    <div class="form_group">
                        <label for="blood pressure" class="form_label">blood pressure</label>
                        <input type="text" class="form_input "name="blood_pressure"  id="blood pressure" placeholder="blood pressure"   required>
              
                        <label for="temperature" class="form_label">temperature</label>
                        <input type="text" class="form_input " id="temperature" placeholder="temperature" name="temperature"  required>

                        <label for="heart rate" class="form_label">heart rate</label>
                        <input type="text" class="form_input" name="heart_rate" id="heart rate" placeholder="heart rate"   required>
                    </div>

                    <div class="form_group">
                        <label for="respiratory rate" class="form_label">respiratory rate</label>
                        <input type="text" class="form_input" name="respiratory_rate" id="respiratory rate" placeholder="respiratory rate"   required>

                        <label for="oxygen saturation" class="form_label">oxygen saturation</label>
                        <input type="text" class="form_input" name="oxygen_saturation" id="oxygen saturation" placeholder="oxygen saturation"   required>
                    </div>
                </div>

                <div class="form_section_examination">
                    <div class="form_section-tittle">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            examination
                        </h3>
                    </div>

                    <div class="form_exam_type">
                        <div class="exam_type-sub">
                            <label for="general" class="exam_type--label">general condition:</label>

                            <label  class="form_label" for="acutely" class="exam_type--label">acutely ill:</label>
                            <input type="radio" class="general_condition" value="Acutely ill" name="general_condition">

                            <label class="form_label" for="chronically" class="exam_type--label">chronically ill:</label>
                            <input type="radio" class="general_condition" value="Chronically ill" name="general_condition">

                            <label class="form_label" for="normal" class="exam_type--label">Normal:</label>
                            <input type="radio" class="general_condition" value="Normal" name="general_condition">
                        </div>
                    </div>

                    <div class="form_optional_disease">
                        <label class="form_label" for="pale" class="exam_type--label">pale:</label>
                        <input type="checkbox" class="checkbox" name="optional_disease[]" id="pale" value="pale">

                        <label class="form_label" for="cyanosis" class="exam_type--label">cyanosis:</label>
                        <input type="checkbox" class="checkbox" name="optional_disease[]" id="cyanosis" value="cyanosis">

                        <label class="form_label" for="dehydration" class="exam_type--label">dehydration:</label>

                        <input type="checkbox" class="checkbox" name="optional_disease[]" id="dehydration" value="dehydration">
                    </div>

                    <div class="form_jaundice_main">
                        <div>
                            <label for="jaundice" class="exam_type-label">Jaundice:</label>
                        </div>
                        
                        <div class="form_jaundice_sub">
                            <div>
                                <label class="exam_type-label" >+</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice" value="jaundice +">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div>
                                <label class="exam_type-label">++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice" value="jaundice ++">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div class="">
                                <label class="exam_type-label">+++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice" value="jaundice +++">
                            </div>
                        </div>
                    </div>

                        <div class="edema">
                            <div>
                                <label for="edema" class="exam_type-label">edema:</label>
                            </div>

                            <div class="edema_sub">
                                <div>
                                    <label class="exam_type-label" for="pedal">PEDAL</label> 
                                </div>
                                <div>
                                    <input type="radio" name="edema" value="Pedal">
                                </div>
                            </div>
                            
                            <div class="edema_sub">
                                <div>
                                    <label class="exam_type-label" for="pedal">generalized</label>
                                </div>
                                <div>
                                    <input type="radio" name="edema" value="Generalize">
                                </div>
                            </div>
                        </div>
                </div>  

                <div class="form_section_routine_test">
                    <div class="form_section-tittle">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            routine lab test
                        </h3>
                    </div>
                    <div class="form">
                        
                        <div class="form_group">
                            <label for="random blood sugar" class="form_label">random blood sugar</label>
    
                            <input type="text" class="form_input" name="random_blood_sugar" id="random blood sugar" placeholder="random blood sugar"   required>
                
                            <label for="fast blood sugar" class="form_label">fast blood sugar</label>
    
                            <input type="text" class="form_input" id="fast blood sugar" name="fast_blood_sugar" placeholder="fast blood sugar"   required>
    
                            <label for="hemoglobin" class="form_label">hemoglobin</label>
    
                            <input type="text" class="form_input" id="hemoglobin" name="hemoglobin" placeholder="hemoglobin"   required>
                        </div>
                        
                        <div>
                            <label for="blood group" class="form_label">blood group</label>
                            <input type="text" class="form_input" id="blood group" name="blood_group" placeholder="blood group"   required>
    
                            <label for="rapid diagnosis test" class="form_label">rapid diagnosis test</label>
                            <input type="text" class="form_input" id="rapid diagnosis test" name="rapid_diagnosis_test" placeholder="rapid diagnosis test"   required>
    
                            <label for="white blood cell" class="form_label"> grouping & white blood cell count</label>
                            <input type="text" class="form_input" id="white blood cell" name="white_blood_cell" placeholder="grouping & white blood cell count"   required>
                        </div>
                </div>
        
                <div class="form_section_investigation u-margin-top-small">
                    <label for="tittle" class="form_label">image tittle</label>
                    <input type="text" class="form_input" name="image_tittle" id="tittle">

                    <input type="file" class="form_input" name="image">
                </div>

                <div class="form_section_other">
                    <div class="form_section-tittle">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            other tests
                        </h3>
                    </div>

                    <div class="form">
                        <div>
                            <div class="form_group">
                                <label for="first test" class="form_label">first test</label>

                                <input class="form_input form_adjust" id="first test"  name="first_test" type="text" placeholder="enter first test " required>
    
                                <label for="first test result" class="form_label">first test result</label>

                                <input class="form_input form_adjust" id="first test result" name="f_test_result" type="text" placeholder="enter first test result" required>
                            </div>
                        </div>
                        
                        <div>
                            <div class="form_group">
                                <label for="second test" class="form_label">second test</label>

                                <input class="form_input form_adjust" id="second test" name="second_test" type="text" placeholder="enter second test " required>
    
                                <label for="second test result" class="form_label">second test result</label>

                                <input class="form_input form_adjust" id="second test result" name="s_test_result" type="text" placeholder="enter second test result" required>
                            </div>
                        </div>

                        <div>
                            <div class="form_group">
                                <label for="third test" class="form_label">third test</label>

                                <input class="form_input form_adjust" id="third test" name="third_test" type="text" placeholder="enter third test " required>
    
                                <label for="third test result" class="form_label">third test result</label>
                                <input class="form_input form_adjust" id="third test result" name="t_test_result" type="text" placeholder="enter third test result" required>
                            </div>
                        </div>
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