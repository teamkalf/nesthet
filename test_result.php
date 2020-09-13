

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

            <form action="#" class="form">
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
            
                        <label for="registration#" class="form_label">Registration No.</label>
                        <input type="text" class="form_input" id="registration#" placeholder="registration#"   required>
                    </div>
                </div>

                <div class="form_vital_section">
                    <div class="form_vital-tittle">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            vital
                        </h3>
                    </div>

                    <div class="form_group">
                        <label for="bp" class="form_label">BP</label>
                        <input type="text" class="form_input " id="bp" placeholder="bp"   required>
              
                        <label for="tem" class="form_label">TEMP</label>
                        <input type="text" class="form_input " id="tem" placeholder="tem"   required>

                        <label for="pr" class="form_label">PR</label>
                        <input type="text" class="form_input" id="pr" placeholder="pr"   required>
                    </div>

                    <div class="form_group">
                        <label for="rr" class="form_label">RR</label>
                        <input type="text" class="form_input" id="rr" placeholder="rr"   required>

                        <label for="02 sat" class="form_label">02 SAT</label>
                        <input type="text" class="form_input" id="02 sat" placeholder="02 sat"   required>
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
                            <input type="radio" class="checkbox" name="illness">

                            <label class="form_label" for="chronically" class="exam_type--label">chronically ill:</label>
                            <input type="radio" class="checkbox" name="illness">

                            <label class="form_label" for="normal" class="exam_type--label">Normal:</label>
                            <input type="radio" class="checkbox" name="illness">
                        </div>
                    </div>

                    <div class="form_optional_disease">
                        <label class="form_label" for="pale" class="exam_type--label">pale:</label>
                        <input type="checkbox" class="checkbox" id="pale">

                        <label class="form_label" for="cyanosis" class="exam_type--label">cyanosis:</label>
                        <input type="checkbox" class="checkbox" id="cyanosis">

                        <label class="form_label" for="dehydration" class="exam_type--label">dehydration:</label>
                        <input type="checkbox" class="checkbox" id="dehydration">
                    </div>

                    <div class="form_jaundice_main">
                        <div>
                            <label for="jaundice" class="exam_type-label">Jaundice:</label>
                            <input type="checkbox">
                        </div>
                        
                        <div class="form_jaundice_sub">
                            <div>
                                <label class="exam_type-label" >+</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice_+">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div>
                                <label class="exam_type-label">++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice_+">
                            </div>
                        </div>

                        <div class="form_jaundice_sub">
                            <div class="">
                                <label class="exam_type-label">+++</label> 
                            </div>
                            <div>
                                <input type="radio" name="jaundice_+">
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
                                    <input type="radio" name="rad_check">
                                </div>
                            </div>
                            
                            <div class="edema_sub">
                                <div>
                                    <label class="exam_type-label" for="pedal">generalized</label>
                                </div>
                                <div>
                                    <input type="radio" name="rad_check">
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
        
                <div class="form_section_investigation">
                    <h1>scanning</h1>
                    <h1>x-ray goes here</h1>
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