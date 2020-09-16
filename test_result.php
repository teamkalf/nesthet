

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test result</title>
    <link rel="stylesheet" href="sass/main.css">
</head>
<body>

<?php
    include "./backend/security.php";
?>
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
                        <input type="text" class="form_input" id="name" placeholder="name"   required>
            
                        <label for="phone" class="form_label">Telephone</label>
                        <input type="text" class="form_input" id="phone" placeholder="phone"   required>
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
                        <input type="text" class="form_input " id="temperature" placeholder="temperature"   required>

                        <label for="heart rate" class="form_label">hear rate</label>
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
                            <input type="radio" class="general_condition" value="Acutely ill" name="illness">

                            <label class="form_label" for="chronically" class="exam_type--label">chronically ill:</label>
                            <input type="radio" class="general_condition" value="Chronically ill" name="illness">

                            <label class="form_label" for="normal" class="exam_type--label">Normal:</label>
                            <input type="radio" class="general_condition" value="Normal" name="illness">
                        </div>
                    </div>

                    <div class="form_optional_disease">
                        <label class="form_label" for="pale" class="exam_type--label">pale:</label>
                        <input type="checkbox" class="checkbox" name="multi_option_disease[]" id="pale">

                        <label class="form_label" for="cyanosis" class="exam_type--label">cyanosis:</label>
                        <input type="checkbox" class="checkbox" name="multi_option_disease[]" id="cyanosis">

                        <label class="form_label" for="dehydration" class="exam_type--label">dehydration:</label>

                        <input type="checkbox" class="checkbox" name="multi_option_disease[]" id="dehydration">
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
                                <input type="radio" name="jaundice_+" value="jaundice +">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div>
                                <label class="exam_type-label">++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice_+" value="jaundice ++">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div class="">
                                <label class="exam_type-label">+++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice_+" value="jaundice +++">
                            </div>
                        </div>
                    </div>

                        <div class="edema">
                            <div>
                                <label for="edema" class="exam_type-label">edema:</label>
                                <input type="checkbox">
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
                            <label for="rbs" class="form_label">rbs</label>
    
                            <input type="text" class="form_input" id="rbs" placeholder="rbs"   required>
                
                            <label for="fbs" class="form_label">fbs</label>
    
                            <input type="text" class="form_input" id="fbs" placeholder="fbs"   required>
    
                            <label for="hb" class="form_label">hb</label>
    
                            <input type="text" class="form_input" id="hb" placeholder="hb"   required>
                        </div>
                        
                        <div>
                            <label for="b.group" class="form_label">b.group</label>
                            <input type="text" class="form_input" id="b.group" placeholder="b.group"   required>
    
                            <label for="rdt" class="form_label">rdt</label>
                            <input type="text" class="form_input" id="rdt" placeholder="rdt"   required>
    
                            <label for="wbc" class="form_label">wbc</label>
                            <input type="text" class="form_input" id="wbc" placeholder="wbc"   required>
                        </div>
                </div>
        
                <div class="form_section_investigation u-margin-top-small">
                    <label for="tittle" class="form_label">image tittle</label>
                    <input type="text" class="form_input" name="tittle" id="tittle">

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
                                <label for="test name" class="form_label">test name</label>

                                <input class="form_input form_adjust" id="test name" type="text" placeholder="enter test name " required>
    
                                <label for="test result" class="form_label">test result</label>

                                <input class="form_input form_adjust" id="test result" type="text" placeholder="enter test result" required>
                            </div>
                        </div>
                        
                        <div>
                            <div class="form_group">
                                <label for="test name2" class="form_label">test name</label>

                                <input class="form_input form_adjust" id="test name2" type="text" placeholder="enter test name " required>
    
                                <label for="test result2" class="form_label">test result</label>

                                <input class="form_input form_adjust" id="test result2" type="text" placeholder="enter test result" required>
                            </div>
                        </div>

                        <div>
                            <div class="form_group">
                                <label for="test name3" class="form_label">test name</label>

                                <input class="form_input form_adjust" id="test name3" type="text" placeholder="enter test name " required>
    
                                <label for="test result3" class="form_label">test result</label>
                                <input class="form_input form_adjust" id="test result3" type="text" placeholder="enter test result" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button_container">
                    <button class="submit_btn">Save Record</button>
                  </div>
            </form>
        </div>
    </div>
</body>
</html>