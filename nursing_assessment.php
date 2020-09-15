<?php
    include "./backend/server-connection.php";
    include "./backend/nursing_assessment_script.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nursing_assessment</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <div class="nursing">

        <div class="nursing__container">

            <div class="nursing__header">

                <h1 class="u-margin-bottom-medium">
                    nursing assessment form
                </h1>
            </div>

            <div class="personal__data">
                <div class="personal__data--tittle">

                    <h3 class="u-margin-bottom-small">
                        personal data
                    </h3>

                </div>

                <div class="personal__data--container">

                    <form action="" method="post" enctype="multipart/form-data" class="form">

                        <div class="form_group">

                            <label for="name" class="form_label">Name</label>

                            <input type="text" class="form_input" id="name" placeholder="Name" name="name"  required>
              
                            <label for="Sex" class="form_label">Sex</label>

                            <input type="text" class="form_input" id="Sex" placeholder="Sex" name="gender"  required>

                        </div>
 
                           
                        <div class="form_group">

                            <label for="Date" class="form_label">Date</label>

                            <input type="text" class="form_input" id="Date" placeholder="Date"  name="date" required>
                
                            <label for="nurse" class="form_label">Reg. Nurse</label>

                            <input type="text" class="form_input" id="nurse" placeholder="Reg.Nurse" name="reg_nurse"  required>
                        </div>
                          
                        <div class="personal__data--tittle">

                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                current complain
                            </h3>
                        </div>

                        <div class="complain">

                            <div class="complain_textarea">

                                <textarea class="complain_textarea" id="health" cols="40" rows="10" name="current_complain" placeholder="patient's current complain"></textarea>
                            </div>

                        </div>

                        <div class="personal__data--tittle">

                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                vital
                            </h3>
                        </div>

                        <div class="form_group">

                            <label for="blood_pressure" class="form_label">blood pressure</label>

                            <input type="text" class="form_input" id="blood_pressure" placeholder="blood pressure" name="blood_pressure"  required>
                  
                            <label for="temperature" class="form_label">temperature</label>

                            <input type="text" class="form_input" id="temperature" placeholder="temperature" name="temp"  required>
                        </div>

                        <div class="form_group">

                            <label for="heart_rate" class="form_label">heart rate</label>

                            <input type="text" class="form_input" id="heart_rate" placeholder="heart rate" name="heart_rate"  required>
                        </div>

                        <div class="form_group">

                            <label for="respiratory_rate" class="form_label">respiratory rate</label>

                            <input type="text" class="form_input" id="respiratory_rate" placeholder="respiratory rate" name="respiratory_rate"  required>

                            <label for="oxygen_saturation" class="form_label">oxygen saturation</label>

                            <input type="text" class="form_input" id="oxygen_saturation" placeholder="oxygen saturation" name="oxygen_saturation" required>
                        </div>

                        <div class="personal__data--tittle">

                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                examination
                            </h3>
                        </div>

                        <div class="exam_type">

                            <div class="exam_type-sub">
                                <label for="general" class="exam_type--label">general condition:</label>

                                <label for="acutely" class="exam_type--label">acutely ill:</label>

                                <input type="radio" class="radio" name="illness" value="acutely ill">

                                <label for="chronically" class="exam_type--label">chronically ill:</label>

                                <input type="radio" class="radio" name="illness" value="chronically ill">

                                <label for="normal" class="exam_type--label">Normal:</label>

                                <input type="radio" class="radio" name="illness"value="normal">
                            </div>
                            
                            <div class="optional">
                                <input type="checkbox" name="optional[]" id="pale" value="pale">pale

                                <input type="checkbox" name="optional[]" id="cyanosis" value="other ">cyanosis

                                <input type="checkbox" name="optional[]" id="dehydration" value="other ">dehydration
                            </div>
                            
                            <div class="edema">
                                <div>
                                    <label for="jaundice" class="exam_type--label">Jaundice:</label>
                                </div>
                                
                                <div class="edema_sub">
                                    <div>
                                        <label class="exam_type--label" for="pedal">+</label> 
                                    </div>
                                    <div>
                                        <input type="radio" name="jaundice" value="+">
                                    </div>
                                </div>

                                <div class="edema_sub">
                                    <div>
                                        <label class="exam_type--label" for="pedal">++</label> 
                                    </div>
                                    <div>
                                        <input type="radio" name="jaundice" value="++">
                                    </div>
                                </div>

                                <div class="edema_sub">
                                    <div>
                                        <label class="exam_type--label" for="pedal">+++</label> 
                                    </div>
                                    <div>
                                        <input type="radio" name="jaundice" value="+++">
                                    </div>
                                </div>
                            </div>

                            <div class="edema">
                                <label for="edema" class="exam_type--label">edema:</label>

                                <div class="edema_sub">
                                    <div>
                                        <label class="exam_type--label" for="pedal">PEDAL</label> 
                                    </div>
                                    <div>
                                        <input type="radio" name="edema" value="pedal">
                                    </div>
                                </div>
                                
                                <div class="edema_sub">
                                    <div>
                                        <label class="exam_type--label" for="pedal">generalized</label>
                                    </div>
                                   <div>
                                    <input type="radio" name="edema" value="generalized">
                                   </div>
                                </div>
                            </div>
                        </div>

                        <div class="system">

                            <div class="system_container_main">

                            <div class="system__container">

                                <div class="system__container--detail">

                                    <label for="respiratory" class="system__label">respiratory system</label>
                                </div>
                                
                                <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="respiratory_system" id="health" cols="40" rows="10" placeholder="respiratory system"></textarea>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="system__container">

                                <div class="system__container--detail">

                                    <label for="cardiovascular" class="system__label">cardiovascular system</label>
                                </div>
                               
                                <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="cardiovascular_system" id="health" cols="40" rows="10" placeholder="cardiovascular system"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="system__container">

                                <div class="system__container--detail">

                                    <label for="nervous" class="system__label">internal nervous system</label>
                                </div>
                                <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="internal_nervous_system" id="health" cols="40" rows="10" placeholder="internal nervous system"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="system__container">

                                <div class="system__container--detail">

                                    <label for="gastro" class="system__label">gastro-intestinal system</label>
                                </div>

                                <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="gastro_intestinal_system" id="health" cols="40" rows="10" placeholder="gastro intestinal system"></textarea>
                                    </div>
                                </div>
                            </div>

                           <div class="system__container">

                               <div class="system__container--detail">

                                <label for="differential"  class="system__label">differential diagnosis</label>
                               </div>
                            
                               <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="differential_diagnosis" id="health" cols="40" rows="10" placeholder="differential diagnosis"></textarea>
                                    </div>
                                </div>
                           </div>

                            <div class="system__container">

                                <div class="system__container--detail">

                                    <label for="final diagnosis" class="system__label">final diagnosis</label>
                                </div>
                                
                                <div class="complain">

                                    <div class="complain_textarea">

                                        <textarea class="complain_textarea" name="final_diagnosis" id="health" cols="40" rows="10" placeholder="final diagnosis"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="system__container">
                                <div class="system__container--detail">
                                    <label for="treatment" class="system__label">treatment</label>
                                </div>
                                
                                <div class="complain">
                                    <div class="complain_textarea">
                                        <textarea class="complain_textarea" name="treatment" id="health" cols="40" rows="10" placeholder="treatment"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="system__container">
                                <div class="system__container--detail">
                                    <label for="health" class="system__label">health education</label>
                                </div>

                                <div class="complain">
                                    <div class="complain_textarea">
                                        <textarea class="complain_textarea" name="health_education" id="health" cols="40" rows="10" placeholder="health education"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="personal__data--tittle">
                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                routine lab test
                            </h3>
                        </div>
                        <div class="lab_test">
                            
                            <div class="form_group">
                                <div>
                                    <label for="rbs" class="form_label">rbs</label>
                                    <input type="text" class="form_input" id="rbs" name="rbs" placeholder="rbs"   required>

                                    <label for="fbs" class="form_label">fbs</label>
                                    <input type="text" class="form_input" id="fbs" name="fbs" placeholder="fbs"   required>
                                </div>
                            </div>

                            <div class="form_group">
                                <label for="hb" class="form_label">hb</label>

                                <input type="text" class="form_input" id="hb" name="hb" placeholder="hb"   required>
                             </div>
                            
                            <div class="form_group">
                                <div>
                                    <label for="b.group" class="form_label">b.group</label>
                                <input type="text" class="form_input" id="b.group" name="b_group" placeholder="b.group"   required>
    
                                <label for="rdt" class="form_label">rdt</label>
                                <input type="text" class="form_input" id="rdt" placeholder="rdt" name="rdt" required>
                                </div>
                            </div> 

                            <div class="form_group">
                                <label for="wbc" class="form_label">wbc</label>
                                <input type="text" class="form_input" id="wbc" placeholder="wbc" name="wbc" required>
                            </div>
                                
                            

                            <div class="urinalysis_test">

                                <div class="personal__data--tittle">

                                    <h3 class="u-margin-bottom-small u-margin-top-small">
                                        urinalysis
                                    </h3>

                                </div>

                                <div class="urine_test">

                                    <div class="urine_test_container">

                                        <div class="urine_test_lue">

                                            <!--first urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">leu:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    
                                                    <div>
                                                        <input type="radio" name="urine" value="leu +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="leu -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="urine_test_lue">

                                            <!--second urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">nit:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="nit +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="nit -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="urine_test_lue">

                                            <!--third urinalysis-->


                                            <div class="urine_test_label">
                                                <label class="label">uro:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="uro +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="uro -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="urine_test_lue">

                                            <!--fourth urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">pro:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="pro +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="pro -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--second urine test container starts here-->

                                    <div class="urine_test_container">

                                        <div class="urine_test_lue">

                                            <!--first urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">blo:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="blo +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="blo -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="urine_test_lue">

                                            <!--second urinalysis-->

                                            <div class="urine_test_label">


                                                <label class="label">ket:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ket +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ket -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="urine_test_lue">

                                            <!--third urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">glu:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="glu +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="glu -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="urine_test_lue">

                                            <!--fourth urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">bil:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">+</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="bil +">
                                                    </div>
                                                </div>
            
                                                <div class="urine_sub">
                                                    <div>
                                                        <label class="label">-</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="bil -">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--third urine test container starts here-->

                                    <div class="urine_test_container">

                                        <div class="urine_test_lue">

                                            <!--fourth urinalysis-->

                                            <div class="urine_test_label">

                                                <label class="label">ph:</label>
                                            </div>

                                            <div class="urine_test_lue-main">

                                                <div class="urine_test_lue-sub">

                                                    <div>
                                                        <label class="label">5.0</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 5.0">
                                                    </div>
                                                </div>
            
                                                <div class="urine_sub">
                                                    <div>
                                                        <label class="label">6.0</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 6.0">
                                                    </div>
                                                </div>
    
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">6.5</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 6.5">
                                                    </div>
                                                </div>
            
                                                <div class="urine_sub">
                                                    <div>
                                                        <label class="label">7.0</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 7.0">
                                                    </div>
                                                </div>
    
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">7.5</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 7.5">
                                                    </div>
                                                </div>
            
                                                <div class="urine_sub">
                                                    <div>
                                                        <label class="label">8.0</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 8.0">
                                                    </div>
                                                </div>
    
                                                <div class="urine_test_lue-sub">
                                                    <div>
                                                        <label class="label">9.0</label> 
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="urine" value="ph 9.0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>

                                <div class="urine_test_container">

                                     <!--fourth container starts here-->
    
                                     <div class="urine_test_lue">

                                        <!--fourth urinalysis-->

                                        <div class="urine_test_label">

                                            <label class="label">sg:</label>
                                        </div>

                                        <div class="urine_test_lue-main">

                                            <div class="urine_test_lue-sub">
                                                <div>
                                                    <abel class="label">1.000</abel> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.000">
                                                </div>
                                            </div>
        
                                            <div class="urine_sub">
                                                <div>
                                                    <label class="label">1.005</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.005">
                                                </div>
                                            </div>

                                            <div class="urine_test_lue-sub">
                                                <div>
                                                    <label class="label">1.010</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine"value="sg 1.010">
                                                </div>
                                            </div>
        
                                            <div class="urine_sub">
                                                <div>
                                                    <label class="label">1.015</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.015">
                                                </div>
                                            </div>

                                            <div class="urine_test_lue-sub">
                                                <div>
                                                    <label class="label">1.020</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.020">
                                                </div>
                                            </div>
        
                                            <div class="urine_sub">
                                                <div>
                                                    <label class="label">1.025</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.025">
                                                </div>
                                            </div>

                                            <div class="urine_test_lue-sub">
                                                <div>
                                                    <label class="label">1.030</label> 
                                                </div>
                                                <div>
                                                    <input type="radio" name="urine" value="sg 1.030">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- image upload -->

                            <div class="system__container">

                                <label  class="form_label" for="name">select image files </label>

                                <input type="text" class="form_input" id="name" name="tittle" placeholder="enter image tittle" required>

                                <input type="file" name="image">
                            </div>
                          </div>

                          <div class="personal__data--tittle">

                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                completed by
                            </h3>
                        </div>

                        <div class="form_group">

                            <label for="name2" class="form_label">Name</label>

                            <input type="text" class="form_input" id="name" placeholder="Name" name="personnel_name" required>
                  
                            <label for="designation" class="form_label">Designation</label>
                            
                            <input type="text" class="form_input" id="designation" placeholder="designation" name="designation" required>
                        </div>

                        <div>

                            <label for="sign" class="form_label">Signature</label>
                            
                            <input type="text" class="form_input" id="sign" placeholder="signature" name="signature" required>
                        </div>

                        <div class="button_container">
                            <input type="submit" name="insert" value="enter record" class="submit_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>