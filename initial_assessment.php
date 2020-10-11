

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>initial patient assessment form</title>
    <link rel="stylesheet" href="./sass/main.css">
</head>
<body>
    <?php
        include "./backend/security.php";
    ?>    


    <div class="assessment-main">
        <div class="assessment">
            <div class="assessment_header">
                <h1 class="u-margin-bottom-medium">
                    initial patient assessment form
                </h1>
            </div>
            <form action="" method="post" class="form">
                <div class="personal_data">
                    <div class="personal_data-header">
                        <h3 class="u-margin-bottom-small">
                            personal data
                        </h3>
                    </div>
                    <div class="form_group">
                        <label for="name" class="form_label">name</label>
                        <input type="text" class="form_input" name="name" id="name" placeholder="specify" required>

                        <label for="height" class="form_label">height</label>
                        <input type="text" class="form_input" name="height" id="height" placeholder="specify" required>

                        <label for="weight" class="form_label">weight</label>
                        <input type="text" class="form_input" name="weight" id="weight" placeholder="specify" required>
                    </div>

                    <div class="form_group">
                        <label for="address" class="form_label">address</label>
                        <input type="text" class="form_input" name="address" id="address" placeholder="specify" required>

                        <label for="age" class="form_label">age</label>
                        <input type="text" class="form_input" name="age" id="age" placeholder="specify" required>

                        <label for="bmi" class="form_label">bmi</label>
                        <input type="text" class="form_input" name="bmi" id="bmi" placeholder="specify" required>
                    </div>
                </div>

                <div class="health_history">
                    <div class="health_history-header">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            health history
                        </h3>
                    </div>

                    <div class="form_group">
                        <label for="education" class="form_label">education</label>
                        <input type="text" class="form_input" name="education" id="education" placeholder="specify" required>

                        <label for="occupation" class="form_label">occupation</label>
                        <input type="text" class="form_input" name="occupation" id="occupation" placeholder="specify" required>
                    </div>

                    <div class="form_language">
                        <div class="form_label" >
                            <label class="form_label">language:</label>
                            <input type="checkbox" name="language" value="english">english
                            <input type="checkbox" name="language" value="other">other
                        </div>
                        <div class="form_group">
                            <input type="text" class="form_input" id="other" placeholder="specify other" required>
                        </div>
                    </div>

                    <div class="form_group">
                        <label for="emergency" class="form_label">emergency contact (name)</label>
                        <input type="text" class="form_input" name="emergency_name" id="emergency" placeholder="specify" required>

                        <label for="relationship" class="form_label">relationship</label>
                        <input type="text" class="form_input" name="relationship" id="relationship" placeholder="specify" required>
                    </div>

                    <div class="form_group">
                        <label for="phone No." class="form_label">phone No.</label>
                        <input type="text" class="form_input" name="phone_No" id="phone No." placeholder="specify" required>

                        <label for="nearest healthcare" class="form_label">nearest healthcare facility</label>
                        <input type="text" class="form_input" name="nearestHealth_facility" id="nearest healthcare" placeholder="specify" required>
                    </div>
                </div>

                <div class="form_group">
                    <label for="bg" class="form_label">blood group</label>
                    <input type="text" class="form_input form_input-small" name="blood_group" id="bg" placeholder="specify" required >

                    <label for="hb" class="form_label">hb</label>
                    <input type="text" class="form_input" name="hb" id="hb" placeholder="specify" required >

                    <label for="bm" class="form_label">bm</label>
                    <input type="text" class="form_input" name="bm" id="bm" placeholder="specify" required >
                </div>

                    <div class="form_group">
                    <label for="wbc" class="form_label">wbc</label>
                    <input type="text" class="form_input" name="wbc" id="wbc" placeholder="specify" required >
                    </div>

                <div class="form_group">
                    <label for="past medic" class="form_label">past medical condition</label>
                    <input type="text" class="form_input" name="pastMedic_condition" placeholder="specify" id="past medic" required>

                    <label for="chief complaint" class="form_label">chief complaint</label>
                    <input type="text" class="form_input" name="complaint" placeholder="specify" id="chief complaint" required>
                </div>

                <div class="form_group">
                    <label for="present illness" class="form_label">present illness</label>
                    <input type="text" class="form_input" name="present_illness" placeholder="specify" id="present illness" required>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>previous hospitalization:</h5></label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="previous_hospitalization" value="no">No
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="previous_hospitalization" value="yes">Yes
                            <label for="last visit" class="form_label">(date of last visit)</label>
                            <input type="text" class="form_input" id="relationship" placeholder="specify last visit">

                            <label for="place" class="form_label">place</label>
                            <input type="text" class="form_input" id="place" placeholder="specify place">

                            <label for="reason" class="form_label">reason</label>
                            <input type="text" class="form_input" id="reason" placeholder="specify reason">
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>previous surgery:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="previous_surgery" value="No">No
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="previous_surgery" value="Yes">Yes
                            <label for="last surgery" class="form_label">(date of last surgery)</label>
                            <input type="text" class="form_input" name="lastDate_surgery" id="last surgery" placeholder="YY-MM-DD" required>
                            <label for="place" class="form_label">place</label>
                            <input type="text" class="form_input"   name="placeOf_surgery" id="place" placeholder="specify place" required>
                            <label for="reason" class="form_label">reason</label>
                            <input type="text" class="form_input" name="reasonFor_surgery" id="reason" placeholder="specify reason" required>
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>family illness:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="family_illness" value="No">No
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="family_illness" value="Yes">Yes
                            <label for="relationship" class="form_label">relationship</label>
                            <input type="text" class="form_input" name="family_relationship" id="relationship" placeholder="specify relationship" required>

                            <label for="place" class="form_label">disease</label>
                            <input type="text" class="form_input" name="family_disease" id="disease" placeholder="specify disease" required>
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>allergies:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="allergies" value="No">no
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="checkbox" name="allergies" value="Yes">yes
                            <label for="drug" class="form_label">drugs</label>
                            <input type="text" class="form_input" name="drugs" id="drug" placeholder="specify drug" required>
                            <label for="food" class="form_label">food</label>
                            <input type="text" class="form_input" name="food" id="food" placeholder="specify food" required>
                            <label for="other" class="form_label">other</label>
                            <input type="text" class="form_input" name="allergies_other" id="other" placeholder="specify other" required>
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>vaccine/immunization:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="vaccine" value="No/Forgotten">no/forgotten
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="vaccine" value="Yes">yes
                            <input type="text" class="form_input" name="vaccine_immunization" id="specify" placeholder="specify yes">
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>medication/supplements/herbals:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="medication_supplements" value="No">no
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="medication_supplements" value="Yes">yes
                            <input type="text" class="form_input" id="specify" placeholder="specify yes">
                        </div>
                    </div>
                </div>
                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label"><h5>health risk behaviors:</h5></label>
                    </div>
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="healthRisk_behaviors" value="No">No
                        </div>
                        <div class="form_hospitalization_sun">
                            <input type="radio" name="healthRisk_behaviors" value="Yes">yes

                            <label for="specify" class="form_label"><h5>specify yes by checking the following</h5></label>
                            <input type="checkbox" name="health-risk" value="smoking">smoking
                            <input type="checkbox" name="health-risk" value="alcohol">alcohol
                            <input type="checkbox" name="health-risk" value="addictive substance">addictive substance
                            <input type="checkbox" name="health-risk" value="other">other
                            <input type="text" class="form_input" placeholder="specify other">
                        </div>
                    </div>
                </div>

                <div class="form_neurological-main">
                    <div class="form_neurological_header">
                        <h3 class="u-margin-bottom-small u-margin-top-small">
                            neurological/perception
                        </h3>
                    </div>
                   <div class="form_neurological-sub">
                   <div class="form_neurological_history">
                        <div class="form_neurological_history-header">
                            <h4 class="u-margin-bottom-small">
                                history
                            </h4>
                        </div>
                        <div class="form_neurological_perception">
                            <div class="neurological_perception-sub">
                                <input type="checkbox" name="neurological_history" value="NAD">nad
                            </div>
                            <div class="neurological_perception-sub">
                                <input type="checkbox" name="neurological_history" value="impaired">impaired
                            </div>
                        </div>
                        <div class="form_neurological_migraine">
                            <div class="neurological_container-migraine-sub">
                                <input type="checkbox" name="neurological_perception" value="migraine">migraine
                            </div>
                            <div class="neurological_migraine-sub">
                                <input type="checkbox" name="neurological_perception" value="seizure">seizure
                            </div>
                            <div class="neurological_migraine-sub">
                                <label class="form_label">epilepsy</label>
                                <input type="checkbox" name="neurological_perception" value="epilepsy">epilepsy
                            </div>
                            <div class="neurological_migraine-sub">
                                <input type="checkbox" name="neurological_perception" value="cva">cva
                            </div>
                        </div>
                        <div class="form_group">
                            <input type="checkbox"name="neurological_perception" value="tumor">tumor/ca
                            <input type="text" class="form_input" id="tumor" placeholder="specify">
                        </div>
                        <div class="form_group">
                            <input type="checkbox"name="neurological_perception" value="paralysis">paralysis
                            <input type="text" class="form_input" id="paralysis" placeholder="specify">
                        </div>
                        <div class="neurological_visualhearing">
                            <div class="neurological_visualhearing-main">
                                <div class="neurological_container_visualhearing-caption">
                                    <input type="checkbox" name="visualization" value="blind">blind
                                </div>
                                <div class="neurological_sub">
                                    <input type="radio" name="visually_affected" value="right">right
                                    <input type="radio" ame="visually_affected" value="left">left
                                </div>
                            </div>

                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox" ame="poor_visual" value="poor visual">poor visual
                                </div>
                                <div class="neurological_sub">
                                    <input type="radio" name="poorVisual_affected" value="right">right
                                    <input type="radio" name="poorVisual_affected" value="left">left
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="aid" class="form_label">visual aid</label>
                            <input type="text" class="form_input" name="visual_aid" id="aid" placeholder="please specify">
                        </div>
                        <div class="neurological_visualhearing">
                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox" name="sound_hearing" value="deaf">deaf
                                </div>
                                <div class="neurological_sub">
                                    <input type="radio" name="ear_affected" value="right">right
                                    <input type="radio" name="ear_affected" value="left">left
                                </div>
                            </div>

                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox" name="poor_hearing" value="poor hearing">poor hearing
                                    <label class="form_label">poor hearing</label>
                                </div>
                                <div class="neurological_sub">
                                    <input type="radio" name="poorEar_affected" value="right">right
                                    <input type="radio" name="poorEar_affected" value="left">left
                                </div>
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="hearing" class="form_label">hearing aid</label>
                            <input type="text" class="form_input" name="hearing_aid" id="hearing" placeholder="please specify">
                        </div>
                        <div class="form_group">
                            <input type="checkbox" name="speech" value="speech">speech
                        </div>
                        <div class="form_group">
                            <label for="aid" class="form_label">speech aid</label>
                            <input type="text" class="form_input" name="speech_aid" id="aid" placeholder="please specify">
                        </div>

                        <div class="form_group">
                            <input type="checkbox" name="smell" value="smell">smell
                            <input type="text" class="form_input" name="respondTo_smell" id="smell" placeholder="please specify">
                        </div>
                        <div class="form_group">
                            <input type="checkbox" name="taste" value="taste">taste
                            <input type="text" class="form_input" name="respondTo_taste" id="taste" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox" name="perceptionHistory_other" value="other">other
                            <input type="text" class="form_input" name="perception_other" id="other" placeholder="please specify" required>
                        </div>
                  </div>
                  <!--assessment--->
                  <div class="form_neurological_assessment">
                        <div class="form_neurological_assessment-header">
                            <h4 class="u-margin-bottom-small">
                                assessment
                            </h4>
                        </div>
                        <div class="form_neurological_description">
                            <h5 class="neurological_description-detail">
                                disoriented to person,place,time,lethargic,forget,drowsy,stupor,loc(glasgow coma scale) check below
                            </h5>
                        </div>

                        <div class="form_neurological_response">
                            <div class="neurological_response-eye u-margin-bottom-small u-margin-top-small">
                                <h5 class="form_neurological_response-header">
                                    eye response
                                </h5>
                                <div class="form_neurological_response-toeye">
                                    <input type="checkbox" name="response_toeye" value="spontaneous = 4">spontaneous = 4
                                </div>
                                <div class="form_neurological_response-toeye">
                                    <input type="checkbox" name="response_toeye" value="to voice = 3">to voice = 3
                                </div>
                                <div class="form_neurological_response-toeye">
                                    <input type="checkbox"name="response_toeye" value="to pain = 2">to pain = 2
                                </div>
                                <div class="form_neurological_response-toeye">
                                    <input type="checkbox" name="response_toeye" value="none = 1">none = 1
                                </div>
                            </div>
                            <!--verbal response-->
                            <div class="neurological_response-verbal u-margin-bottom-small">
                                <h5 class="form_neurological_response-header">
                                    verbal response
                                </h5>
                                <div class="form_neurological_response-verbal">
                                <input type="checkbox" name="verbal_response" value="oriented 5">oriented = 5
                                </div>

                                <div class="form_neurological_response-verbal">
                                <input type="checkbox" name="verbal_response" value="confused 4">confused = 4
                                </div>

                                <div class="form_neurological_response-verbal">
                                    <input type="checkbox" name="verbal_response" value="inappropriate words 3">inappropriate words = 3
                                </div>
                                
                                <div class="form_neurological_response-verbal">
                                    <input type="checkbox" name="verbal_response" value="incomprehensive sounds 2">incomprehensive sounds = 2
                                </div>
                                <div class="form_neurological_response-verbal">
                                    <input type="checkbox" name="verbal_response" value="none 1"> none = 1
                                </div>
                            </div>
                            <!--motor response-->
                            <div class="neurological_response-motor u-margin-bottom-small">
                                <h5 class="form_neurological_response-header">
                                    motor response
                                </h5>
                                <div class="form_neurological_response-tomotor">
                                <input type="checkbox" name="motor_response" value="obey command 6">obey command = 6
                                </div>
                                <div class="form_neurological_response-tomotor">
                                <input type="checkbox" name="motor_response" value="localizes pain 5">localizes pain = 5
                                </div>
                                <div class="form_neurological_response-tomotor">
                                    <input type="checkbox" name="motor_response" value="withdraw to pain 4">withdraw to pain = 4
                                </div>
                                <div class="form_neurological_response-tomotor">
                                    <input type="checkbox" name="motor_response" value="flexion to pain 3">flexion to pain = 3
                                </div>
                                <div class="form_neurological_response-tomotor">
                                    <input type="checkbox" name="motor_response" value="extension to pain 2">extension to pain = 2
                                </div>
                                <div class="form_neurological_response-tomotor">
                                    <input type="checkbox" name="motor_response" value="none 1">none = 1
                                </div>
                            </div>
                            <div class="form_neurological_sum">
                                <h5 class="sum_explanation">
                                    please add all values of the checked boxes here!
                                </h5>
                                    <div class="form_group">
                                    <label class="form_label" for="total">total</label>
                                    <input type="text" class="form_input" name="total" id="total" placeholder="enter total">
                                </div>
                            </div>
                            <div class="form_group">
                                <input type="radio" name="numbness" value="numbness">sensation
                                <label class="form_label" for="other">other</label>
                                <input type="text" class="form_input" name="sensation_other" id="other" placeholder="specify other">
                            </div>
                            <div class="form_group">
                                <label class="form_label" for="location">location</label>
                                <input type="text" class="form_input" name="location" id="location" placeholder="specify">
                            </div>
                        </div>
                        <div class="form_group">
                            <label for="" class="form_label">abnormal appearance</label>
                            <input type="checkbox" name="abnormal_appearance" value="eye">eyes
                            <input type="checkbox" name="abnormal_appearance" value="ear">ears
                            <input type="checkbox" name="abnormal_appearance" value="nose">nose
                            <div class="form_group">
                                <label class="form_label" for="other">other</label>
                                <input type="text" class="form_input" name="abnormalAppearance_other" id="other" placeholder="specify">
                            </div>
                        </div>
                  </div>
                  </div>
                  <div class="form_respiratory">
                      <div class="form_respiratory_header">
                            <h3 class="u-margin-bottom-small u-margin-top-small">
                                respiratory
                            </h3>
                      </div>
                      <div class="form_respiratory_sub">
                          <div class="form_respiratory_sub-history">
                                <div class="form_respiratory_sub-history-header">
                                    <h5 class="form_respiratory_sub-header u-margin-bottom-small">
                                        history
                                    </h5>
                                </div>
                                <div class="form_respiratory_sub-history-flex">
                                    <div class="nad">
                                        <input type="checkbox" name="respiratory_history" value="nad" id="nad">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="respiratory_history" value="impaired" id="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="respiratory_disease">
                                    <input type="checkbox" name="respiratory_disease" id="chronic cough" value="chronic cough">
                                    <label for="chronic cough" class="form_label">chronic cough</label>

                                    <input type="checkbox" name="respiratory_disease" id="asthma" value="asthma">
                                    <label for="asthma" class="form_label">asthma</label>

                                    <input type="checkbox" name="respiratory_disease" id="tb" value="TB">
                                    <label for="tb" class="form_label">tb</label>

                                    <input type="checkbox" name="respiratory_disease" id="copd" value="COPD">
                                    <label for="copd" class="form_label">copd</label>
                                </div>
                                <div class="form_group">
                                    <input type="checkbox" name="respiratory_support" id="ca" value="CA">
                                    <label for="ca" class="form_label">ca</label>

                                    <input type="checkbox" name="respiratory_support" id="oxygen support" value="oxygen support">
                                    <label for="oxygen support" class="form_label">oxygen support</label>

                                    <label for="other" class="form_label">other</label>
                                    <input type="text" class="form_input" name="respiratory_diseaseOther" id="other" placeholder="specify other">
                                </div>
                          </div>
                          <div class="form_respiratory_sub-assessment">
                                <div class="form_respiratory_sub-assessment-header">
                                    <h5 class="form_respiratory_sub-assessment-header u-margin-bottom-small">
                                        assessment
                                    </h5>
                                </div>
                                <div class="form_respiratory_sub-assessment-flex">
                                    <div class="nad">
                                        <input type="checkbox" name="respiratory_assessment" id="nad" value="NAD">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="respiratory_assessment" id="impaired" value="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="form_respiratory_sub-assessment-breathing">
                                    <label for="" class="form_label">breathing</label>

                                    <input type="checkbox" name="assessment_effects" id="dyspnea">
                                    <label for="dyspnea" class="form_label">dyspnea</label>

                                    <input type="checkbox" name="assessment_effects" id="tachypnea/bradypnea">
                                    <label for="tachypnea/bradypnea" class="form_label">tachypnea/bradypnea</label>

                                    <input type="checkbox" name="assessment_effects" id="wheezes/stridor">
                                    <label for="wheezes/stridor" class="form_label">wheezes/stridor</label>

                                    <input type="checkbox" name="assessment_effects" id="orthopnea">
                                    <label for="orthopnea" class="form_label">orthopnea</label>

                                    <input type="checkbox" name="assessment_effects" id="cough">
                                    <label for="cough" class="form_label">cough</label>
                                </div>
                                <div class="ineffective_breathing">
                                    <label for="" class="form_label">ineffective breathing</label>

                                    <input type="radio" name="ineffective_breathing" id="ambu bag" value="Apply Ambu bag">
                                    <label for="ambu bag" class="form_label">apply ambu bag</label>

                                    <input type="radio" name="ineffective_breathing" id="respirator" value="Apply Ambu bag">
                                    <label for="respirator" class="form_label">respirator</label>
                                </div>
                                <div class="sputum">
                                    <label for="sputum" class="form_label">sputum</label>
                                    <input type="checkbox" name="sputum" id="sputum" value="sputum">

                                    <label for="amount" class="form_label">color/amount</label>
                                    <input type="text" class="form_input" name="color/amount" id="amount" placeholder="specify">

                                    <div class="other">
                                        <label for="other" class="form_label">other</label>
                                        <input type="text" class="form_input" name="respiratory_assOther" id="other" placeholder="specify">
                                    </div>
                                </div>
                          </div>
                      </div>
                   </div>
                   <div class="form_cardiovascular u-margin-bottom-small u-margin-top-small ">
                       <div class="form_cardiovascular_header">
                           <h3 class="cardiovascular_header">
                               cardiovascular/blood circulation
                           </h3>
                       </div>
                       <div class="form_cardiovascular_sub u-margin-top-small">
                           <div class="form_cardiovascular_sub_history">
                               <div class="form_cardiovascular_sub_history-header u-margin-bottom-small">
                                    <h5 class="form_cardiovascular_sub_history-header">
                                        history
                                    </h5>
                                </div>
                                <div class="form_cardiovascular_sub_history-flex form_group">
                                    <div class="nad">
                                        <input type="checkbox" name="cardiovascular_history" id="nad" value="NAD">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="cardiovascular_history" id="impaired" value="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="form_cardiovascular_sub_history-disease">
                                    <input type="checkbox" name="cardiovascular_disease" id="angina" value="angina">
                                    <label for="angina" class="form_label">angina</label>

                                    <input type="checkbox" name="cardiovascular_disease" id="mi" value="MI">
                                    <label for="mi" class="form_label">mi</label>

                                    <input type="checkbox" name="cardiovascular_disease" id="hypertension" value="hypertension">
                                    <label for="hypertension" class="form_label">hypertension</label>

                                    <input type="checkbox" name="cardiovascular_disease" id="leukemia" value="leukemia">
                                    <label for="leukemia" class="form_label">leukemia</label>
                                </div>
                                <div class="form_group">
                                    <input type="checkbox" name="heart_operation" id="leukemia" value="yes">
                                    <label for="heart operation" class="form_label">heart operation</label>

                                    <label for="medications" class="form_label">medications</label>
                                    <input type="text" class="form_input" name="medications" id="medications" placeholder="specify">
                                </div>
                                <div class="form_cardiovascular_sub_history-replace-device">
                                    <input type="checkbox" name="replace_device" id="replace device" value="replace device">
                                    <label for="replace device" class="form_label">replace device</label>

                                    <label for="other" class="form_label">other</label>
                                    <input type="text" class="form_input" name="other_replace_device" id="other" placeholder="specify">
                                </div>
                           </div>
                           <div class="form_cardiovascular_sub_assessment">
                                <div class="form_cardiovascular_sub_assessment-header u-margin-bottom-small">
                                    <h5 class="form_cardiovascular_sub_assessment-header">
                                        assessment
                                    </h5>
                                </div>
                                <div class="form_cardiovascular_sub_assessment-flex">
                                    <div class="nad">
                                        <input type="checkbox" name="cardiovascular_assessment" id="nad" value="NAD">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="cardiovascular_assessment" id="impaired" value="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="form_group">
                                    <label for="irregular" class="form_label">pulse irregular</label>
                                    <input type="text" class="form_input" name="pulse_irregular" id="irregular" placeholder="specify">
                                    <div class="form_group">
                                        <input type="checkbox" name="musculoskeletal_disease" id="skin" value="skin">
                                        <label for="skin" class="form_label">skin</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="cool" value="cool">
                                        <label for="cool" class="form_label">cool</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="warm/hot" value="warm/hot">
                                        <label for="warm/hot" class="form_label">warm/hot</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="pale" value="pale">
                                        <label for="pale" class="form_label">pale</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="cyanotic" value="cyanotic">
                                        <label for="cyanotic" class="form_label">cyanotic</label>
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="assessment_effect" id="bleeding" value="bleeding">
                                        <label for="bleeding" class="form_label">bleeding</label>
                                        <input type="text" class="form_input" name="bleeding" id="bleeding" placeholder="specify">

                                        <div class="form_group">
                                            <input type="checkbox" name="assessment_effect" id="edema" value="edema">
                                            <label for="edema" class="form_label">edema:</label>

                                            <label for="location" class="form_label">location</label>
                                            <input type="text" class="form_input" name="location" id="location" placeholder="specify location">

                                            <label for="scale" class="form_label">scale</label>
                                            <input type="text" class="form_input" name="scale" id="scale" placeholder="specify scale">

                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="other" id="other" placeholder="specify other">
                                            </div>
                                        
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
                   <div class="form_musculoskeletal u-margin-top-small">
                       <div class="form_musculoskeletal_header u-margin-top-small u-margin-bottom-small">
                           <h3 class="form_musculoskeletal_header">
                               musculoskeletal/activity
                           </h3>
                       </div>
                       <div class="form_musculoskeletal_sub">
                           <div class="form_musculoskeletal_sub_history u-margin-bottom-small">
                                <div class="form_musculoskeletal_sub_history-header">
                                    <h5 class="form_musculoskeletal_sub_history-header">
                                        history
                                    </h5>
                                </div>
                                <div class="form_musculoskeletal_sub_history-flex">
                                    <div class="nad form_group">
                                        <input type="checkbox" name="musculoskeletal_history" id="nad" value="Nad">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired form_group">
                                        <input type="checkbox" name="musculoskeletal_history" id="impaired" value="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="form_group">
                                        <input type="checkbox" name="musculoskeletal_disease" id="arthritis" value="arthritis">
                                        <label for="arthritis" class="form_label">arthritis</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="osteoporosis" value="osteoporosis">
                                        <label for="osteoporosis" class="form_label">osteoporosis</label>

                                        <input type="checkbox" name="musculoskeletal_disease" id="gout" value="gout">
                                        <label for="gout" class="form_label">gout</label>
                                    </div>
                                    <div class="form_group">
                                        <div class="form_group">
                                            <input type="checkbox" name="musculoskeletal_effects" id="tumor" value="tumor">
                                            <label for="tumor" class="form_label">tumor/ca</label>
                                            <input type="text" class="form_input" name="tumor" id="tumor" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="musculoskeletal_effects" id="amputation" value="amputation">
                                            <label for="amputation" class="form_label">amputation/ca</label>
                                            <input type="text" class="form_input" name="amputation" id="amputation" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="musculoskeletal_effects" id="fracture" value="fracture">
                                            <label for="fracture" class="form_label">fracture/ca</label>
                                            <input type="text" class="form_input" name="fracture" id="fracture" placeholder="specify">
                                        </div>
                                        

                                        <input type="checkbox" name="musculoskeletal_effects" id="join_replacement" value="join_replacement">
                                        <label for="join_replacement" class="form_label">join replacement/ca</label>
                                        <input type="text" class="form_input" name="join_replacement" id="join_replacement" placeholder="specify">

                                        <div class="form_group">
                                            <label for="assistive" class="form_label">assistive device:</label>

                                            <input type="checkbox" name="assistive_device" id="walker" value="walker/cane">
                                            <label for="walker" class="form_label">walker/cane</label>

                                            <input type="checkbox" name="assistive_device" id="wheelchair" value="wheelchair">
                                            <label for="wheelchair" class="form_label">wheelchair</label>

                                            <input type="checkbox" name="assistive_device" id="other" value="other">
                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="other" id="other" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <label for="reasons" class="form_label">reasons</label>
                                            <input type="text" class="form_input" name="reasons" id="reasons" placeholder="specify">
                                            <div class="form_group">
                                                <label for="other" class="form_label">other</label>
                                                <input type="text" class="form_input" name="other" id="other" placeholder="specify">
                                            </div>
                                        </div>
                                    </div>
                           </div>
                           <div class="form_musculoskeletal_sub_assessment">
                                <div class="form_musculoskeletal_sub_assessment-header u-margin-bottom-small">
                                    <h5 class="musculoskeletal_sub_assessment-header">
                                        assessment
                                    </h5>
                                </div>
                                <div class="form_musculoskeletal_sub_assessment-flex">
                                    <div class="nad form_group">
                                        <input type="checkbox" name="musculoskeletal_nad/impaired" id="nad" value="NAD">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired form_group">
                                        <input type="checkbox" name="musculoskeletal_nad/impaired" id="impaired" value="impaired">
                                        <label for="impaired" class="form_label">impaired</label>
                                    </div>
                                </div>
                                <div class="">
                                    <label for="abnormal" class="form_label">abnormal appearance</label>
                                    <input type="text" class="form_input" name="abnormal_appearance" id="abnormal" placeholder="specify">
                                    <div class="">
                                        <label for="weakness" class="form_label">weakness/paralysis</label>
                                        <div class="">
                                            <label for="hand" class="form_label"><h6>hands</h6></label>
                                            <input type="checkbox" name="weakness_paralysis" id="hand">
                                            <div>
                                                <input type="radio" name="paralysis_lem" id="right" value="right">
                                                <label for="right" class="form_label">right</label>

                                                <input type="radio" name="paralysis_lem" id="left" value="left">
                                                <label for="left" class="form_label">left</label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="arms" class="form_label"><h6>arms</h6></label>
                                            <input type="checkbox" name="weakness_paralysis" id="arms">
                                            <div>
                                                <input type="radio" name="paralysis_lem" id="right" value="right">
                                                <label for="right" class="form_label">right</label>

                                                <input type="radio" name="paralysis_lem" id="left" value="left">
                                                <label for="left" class="form_label">left</label>
                                            </div>
                                        </div>
                                        <div class="">
                                            <label for="legs" class="form_label"><h6>legs</h6></label>
                                            <input type="checkbox" name="weakness_paralysis" id="legs">
                                            <div>
                                                <input type="radio" name="paralysis_lem" id="right" value="right">
                                                <label for="right" class="form_label">right</label>

                                                <input type="radio" name="paralysis_lem" id="left" value="left">
                                                <label for="left" class="form_label">left</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_musculoskeletal_assessment_ADL-margin-top">
                                    <input type="checkbox" name="ADL" id="total_care" value="need total care">
                                    <label for="left" class="form_label">not ability to perform totally</label>
                                    <div>
                                        <input type="checkbox" name="ADL" id="partial_care" value="not total care">
                                        <label for="partial_care" class="form_label">ability to perform something</label>
                                        <input type="text" class="form_input" name="partial_paralysis" id="partial_care">
                                    </div>
                                    <div>
                                        <label for="other" class="form_label">other</label>
                                        <input type="text" class="form_input" name="ADL_other" id="other" placeholder="specify">
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
                   <div class="form_genitourinary">
                       <div class="form_genitourinary_header u-margin-bottom-small">
                           <h3 class="form_genitourinary_header">
                               genitourinary/reproductivity
                           </h3>
                       </div>
                       <div class="form_genitourinary_sub">
                           <div class="form_genitourinary_sub_history">
                               <div class="form_genitourinary_sub_history-header u-margin-bottom-small">
                                   <h5 class="form_genitourinary_sub_history-header">
                                       history
                                   </h5>
                               </div>
                               <div class="form_genitourinary_sub_history-flex">
                                   <div class="form_group nad">
                                       <input type="checkbox" name="genitourinary_history" id="nad" value="NAD">
                                       <label for="nad" class="form_label">nad</label>
                                   </div>
                                   <div class="form_group impaired">
                                       <input type="checkbox" name="genitourinary_history" id="impaired" value="impaired">
                                       <label for="impaired" class="form_label">impaired</label>
                                   </div>
                               </div>
                               <div class="form_genitourinary_sub_history-disease">
                                    <input type="checkbox" name="genitourinary_disease" id="rc" value="RC">
                                    <label for="rc" class="form_label">rc</label>

                                    <input type="checkbox" name="genitourinary_disease" id="uti" value="UTI">
                                    <label for="uti" class="form_label">uti</label>

                                    <input type="checkbox" name="genitourinary_disease" id="renal failure" value="renal failure">
                                    <label for="renal failure" class="form_label">renal failure</label>

                                    <input type="checkbox" name="genitourinary_disease" id="bph" value="BPH">
                                    <label for="bph" class="form_label">bph</label>
                                    <div>
                                        <input type="checkbox" name="genitourinary_disease" id="cancer-type" value="cancer type">
                                        <label for="cancer-type" class="form_label">cancer-type</label>
                                        <input type="text" class="form_input" name="cancer_type" id="cancer-type" placeholder="specify">
                                    </div>
                               </div>
                               <div class="form_group">
                                   <label for="voiding" class="form_label">voiding:</label>

                                   <input type="checkbox" name="genitourinary_voiding" id=" frequency" value="more frequency">
                                   <label for=" frequency" class="form_label">more frequency</label>

                                   <input type="checkbox" name="genitourinary_voiding" id=" incontinence" value="incontinence">
                                   <label for=" incontinence" class="form_label">incontinence</label>
                               </div>
                               <div class="form_group">
                                   <div class="form_group">
                                        <input type="checkbox" name="genitourinary_oliguria/dysuria" id="oliguria" value="oliguria/anuria">
                                        <label for="oliguria" class="form_label">oliguria/anuria</label>
                                        <input type="text" class="form_input" name="oliguria_day" id="oliguria" placeholder="specify day">
                                   </div>
                                   <div class="form_group">
                                        <input type="checkbox" name="genitourinary_oliguria/dysuria" id="dysuria" value="dysuria">
                                        <label for="dysuria" class="form_label">dysuria</label>
                                        <input type="text" class="form_input" name="dysuria" id="dysuria" placeholder="specify">
                                    </div>
                               </div>
                               <div class="form_group">
                                   <div class="form_group">
                                        <input type="checkbox" name="genitourinary_catheter" id="catheter" value="catheter-type">
                                        <label for="catheter" class="form_label">catheter-type</label>
                                        <input type="text" class="form_input" name="catheter_type" id="catheter" placeholder="specify day">
                                   </div>
                                   <div class="form_group">
                                        <label for="last place" class="form_label">date of last place</label>
                                        <input type="text" class="form_input" name="dateOf_lastPlace" id="last place" placeholder="specify">
                                    </div>
                               </div>
                               <div class="form_group">
                                    <input type="checkbox" name="genitourinary_intermittent" id="intermittent" value="intermittent cath q">
                                    <label for="intermittent" class="form_label">intermittent cath q</label>
                                    <input type="text" class="form_input" name="intermittent_cath_q" id="intermittent" placeholder="specify">
                               </div>
                               <div class="form_group">
                                    <input type="checkbox" name="genitourinary_dialysis" id="dialysis" value="dialysis">
                                    <label for="dialysis" class="form_label">dialysis</label>
                                    <input type="text" class="form_input" name="dialysis" id="dialysis" placeholder="specify">
                               </div>
                               <div class="form_group">
                                    <input type="checkbox" name="genitourinary_menstrual" id="menstrual" value="menstrual problem">
                                    <label for="menstrual" class="form_label">menstrual problem</label>
                                    <input type="text" class="form_input" name="menstrual_problem" id="menstrual" placeholder="specify">
                               </div>
                               <div class="form_group">
                                    <input type="checkbox" name="genitourinary_other" id="other" value="other">
                                    <label for="other" class="form_label">other</label>
                                    <input type="text" class="form_input" name="genitourinary_other" id="other" placeholder="specify">
                               </div>
                           </div>
                           <div class="form_genitourinary_sub_assessment">
                               <div class="form_genitourinary_sub_assessment-header u-margin-bottom-small">
                                   <h5 class="form_genitourinary_sub_assessment-header">
                                       assessment
                                   </h5>
                               </div>
                               <div class="form_genitourinary_sub_assessment-flex">
                                   <div class="form_group nad">
                                       <input type="checkbox" name="genitourinary_assessment" id="nad" value="NAD">
                                       <label for="nad" class="form_label">nad</label>
                                   </div>
                                   <div class="form_group nad">
                                       <input type="checkbox" name="genitourinary_assessment" id="impaired" value="impaired">
                                       <label for="impaired" class="form_label">impaired</label>
                                   </div>
                               </div>
                               <div class="form_group">
                                   <label for="breast appearance" class="form_label">breast/nipple appearance:</label>
                                   <div class="form_group">
                                        <input type="checkbox" name="breast_nipple" id="right" value="right">
                                        <label for="right" class="form_label">right</label>

                                        <input type="checkbox" name="breast_nipple" id="left" value="left">
                                        <label for="left" class="form_label">left</label>
                                   </div>
                               </div>
                               <div class="form_group">
                                   <label for="urine" class="form_label">urine</label>
                                   <div class="form_group">
                                        <input type="checkbox" name="urine" id="cloudy" value="cloudy">
                                        <label for="cloudy" class="form_label">cloudy</label>

                                        <input type="checkbox" name="urine" id="hematuria" value="hematuria">
                                        <label for="hematuria" class="form_label">hematuria</label>

                                        <input type="checkbox" name="urine" id="bloody" value="bloody">
                                        <label for="bloody" class="form_label">bloody</label>
                                        <div class="form_group">
                                            <input type="checkbox" name="urine" id="other" value="other">
                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="urine_other" id="other">
                                        </div>
                                   </div>
                               </div>
                               <div class="form_group">
                                   <label for="" class="form_label">tube/drainage</label>
                                   <div class="form_group">
                                        <input type="checkbox" name="tube_drainage" id="catheter" value="catheter">
                                        <label for="catheter" class="form_label">catheter</label>

                                        <input type="checkbox" name="tube_drainage" id="cystostomy tube" value="cystostomy tube">
                                        <label for="cystostomy tube" class="form_label">cystostomy tube</label>

                                        <input type="checkbox" name="tube_drainage" id="other" value="other">
                                        <label for="other" class="form_label">other</label>
                                   </div>
                               </div>
                               <div class="form_group">
                                   <div class="form_group">
                                        <label for="ostomy" class="form_label">ostomy-type</label>
                                        <input type="text" class="form_input" name="ostomy" id="ostomy" placeholder="specify">
                                   </div>
                                    <div class="form_group">
                                        <label for="genitor" class="form_label">abnormal genitor-appearance</label>
                                        <input type="text" class="form_input" name="genitor_appearance" id="genitor" placeholder="specify">
                                    </div>
                                    <div class="form-group">
                                        <label for="penis/vagina" class="form_label">discharge from penis/vagina</label>
                                        <input type="text" class="form_input" name="penis/vagina_discharge" id="penis/vagina" placeholder="specify">
                                    </div>
                                    <div class="form_group">
                                        <label for="other" class="form_label">other</label>
                                        <input type="text" class="form_input" name="tube_drainage_other" id="other" placeholder="specify">
                                    </div>
                               </div>
                           </div>
                       </div>
                       <div class="form_skin">
                            <div class="from_skin_header u-margin-bottom-small u-margin-top-small">
                                <h3 class="form_skin_header">
                                    skin
                                </h3>
                            </div>
                            <div class="form_skin_sub">
                                <div class="form_skin_sub_history">
                                    <div class="form_skin_sub_history-header">
                                        <h5 class="form_skin_sub_history-header">
                                            history
                                        </h5>
                                    </div>
                                    <div class="form_skin_sub_history-flex">
                                        <div class="form_group nad">
                                            <input type="checkbox" name="skin_history" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group nad">
                                            <input type="checkbox" name="skin_history" id="impaired" value="NAD">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="skin_disease" id="skin" value="skin disease">
                                        <label for="skin" class="form_label">skin disease</label>
                                        <input type="text" class="form_input" name="skin_disease_specified" placeholder="specify">
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="skin_effect" id="abrasion" value="abrasion">
                                        <label for="abrasion" class="form_label">abrasion</label>
                                        <input type="checkbox" name="skin_effect" id="burn" value="burn">
                                        <label for="burn" class="form_label">burn</label>
                                        <input type="checkbox" name="skin_effect" id="contusion" value="contusion">
                                        <label for="contusion" class="form_label">contusion</label>
                                        <input type="checkbox" name="skin_effect" id="ecchymosis" value="ecchymosis">
                                        <label for="ecchymosis" class="form_label">ecchymosis</label>
                                        <input type="checkbox" name="skin_effect" id="hematoma" value="hematoma">
                                        <label for="hematoma" class="form_label">hematoma</label>
                                        <input type="checkbox" name="skin_effect" id="laceration" value="laceration">
                                        <label for="laceration" class="form_label">laceration</label>
                                        <input type="checkbox" name="skin_effect" id="mass" value="mass">
                                        <label for="mass" class="form_label">mass</label>
                                        <input type="checkbox" name="skin_effect" id="pressure sore stage" value="pressure sore stage">
                                        <label for="pressure sore stage" class="form_label">pressure sore stage</label>
                                        <input type="checkbox" name="skin_effect" id="rash" value="rash">
                                        <label for="rash" class="form_label">rash</label>
                                        <input type="checkbox" name="skin_effect" id="suture" value="suture">
                                        <label for="suture" class="form_label">suture</label>
                                        <input type="checkbox" name="skin_effect" id="scar" value="scar">
                                        <label for="scar" class="form_label">scar</label>
                                        <input type="checkbox" name="skin_effect" id="skin reaction" value="skin reaction">
                                        <label for="skin reaction" class="form_label">skin reaction</label>
                                        <input type="checkbox" name="skin_effect" id="ostomy" value="ostomy">
                                        <label for="ostomy" class="form_label">ostomy</label>
                                        <input type="checkbox" name="skin_effect" id="wound" value="wound">
                                        <label for="wound" class="form_label">wound</label>
                                        <div class="form_group">
                                            <input type="checkbox" name="skin_effect_other" id="other" value="other">
                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="skin_effect_specified" id="other" placeholder="specify">
                                        </div>
                                    </div>
                                </div>
                                <div class="form_skin_sub_assessment">
                                    <div class="form_skin_sub_assessment-header">
                                        <h5 class="form_skin_sub_assessment-header">
                                            assessment
                                        </h5>
                                    </div>
                                    <div class="form_skin_sub_assessment-flex">
                                        <div class="form_group nad">
                                            <input type="checkbox" name="skin_assessment" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group nad">
                                            <input type="checkbox" name="skin_assessment" id="impaired" value="impaired">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="form_gastrointestinal">
                           <div class="form_gastrointestinal_header u-margin-top-small u-margin-bottom-small">
                               <h3 class="form_gastrointestinal_header">
                                   gastrointestinal/endocrine
                               </h3>
                           </div>
                           <div class="form_gastrointestinal_sub">
                               <div class="form_gastrointestinal_sub_history">
                                    <div class="form_gastrointestinal_sub_history-header">
                                        <h5 class="from_gastrointestinal_sub_history-header">
                                            history
                                        </h5>
                                    </div>
                                    <div class="form_gastrointestinal_sub_history-flex">
                                        <div class="form_group nad">
                                            <input type="checkbox" name="gastrointestinal_history" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group nad">
                                            <input type="checkbox" name="gastrointestinal_history" id="impaired" value="NAD">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="endocrine_disease" id="ulcer" value="GI Ulcer">
                                        <label for="ulcer" class="form_label">GI Ulcer</label>
                                        <input type="checkbox" name="endocrine_disease" id="bleeding" value="GI bleeding">
                                        <label for="bleeding" class="form_label">GI bleeding</label>
                                        <input type="checkbox" name="endocrine_disease" id="DM" value="dm">
                                        <label for="DM" class="form_label">dm</label>
                                        <input type="checkbox" name="endocrine_disease" id="thyroid" value="thyroid">
                                        <label for="thyroid" class="form_label">thyroid</label>
                                        <input type="checkbox" name="endocrine_disease" id="hemorrhoid" value="hemorrhoid">
                                        <label for="hemorrhoid" class="form_label">hemorrhoid</label>
                                        <div class="form_group">
                                            <input type="checkbox" name="endocrine_disease" id="liver_disease" value="liver disease">
                                            <label for="liver_disease" class="form_label">liver disease</label>
                                            <input type="text" class="form_input" name="liver_disease" id="liver_disease" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="endocrine_disease" id="CA" value="CA">
                                            <label for="CA" class="form_label">CA</label>
                                            <input type="text" class="form_input" name="CA" id="ca" placeholder="specify">
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="" class="form_label"><h6>eating</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="eating" id="none" value="None">
                                            <label for="none" class="form_label">none</label>
                                            <input type="checkbox" name="eating" id="a little" value="A little">
                                            <label for="a little" class="form_label">a little</label>
                                            <div class="form_group">
                                                <label for="feedingType" class="form_label">tube feeding-type</label>
                                                <input type="text" class="form_input" name="tube_feedingType" id="feedingType" placeholder="specify">
                                            </div>
                                            <div class="form_group">
                                                <label for="amount" class="form_label">amount</label>
                                                <input type="text" class="form_input" name="amount" id="amount" placeholder="specify">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="" class="form_label"><h6>control diet</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="control_diet" id="sweet" value="sweet">
                                            <label for="sweet" class="form_label">sweet</label>
                                            <input type="checkbox" name="control_diet" id="salt" value="salt">
                                            <label for="salt" class="form_label">salt</label>
                                            <input type="checkbox" name="control_diet" id="flat" value="flat">
                                            <label for="flat" class="form_label">flat</label>
                                            <div class="form_group">
                                                <label for="other" class="form_label">other</label>
                                                <input type="text" class="form_input" name="controlDiet_other" id="other" placeholder="specify">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="" class="form_label"><h6>inadequate intake</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="inadequate_intake" id="pregnant" value="pregnant">
                                            <label for="pregnant" class="form_label">pregnant</label>
                                            <input type="checkbox" name="inadequate_intake" id="lactation" value="lactation">
                                            <label for="lactation" class="form_label">lactation</label>
                                            <input type="checkbox" name="inadequate_intake" id="poor appetite" value="poor appetite">
                                            <label for="poor appetite" class="form_label">poor appetite</label>
                                            <input type="checkbox" name="inadequate_intake" id="difficult swallowing" value="difficult swallowing">
                                            <label for="difficult swallowing" class="form_label">difficult swallowing</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="" class="form_label"><h6>weight change</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="weight_change" id="loss" value="loss">
                                            <label for="loss" class="form_label">loss</label>
                                            <input type="text" class="form_input" name="weight_loss" id="weight change" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="weight_change" id="gain" value="gain">
                                            <label for="gain" class="form_label">gain</label>
                                            <input type="text" class="form_input" name="weight_gain" id="weight change" placeholder="specify">
                                        </div>
                                    </div>
                                    <div class="form_group">
                                            <label for="" class="form_label"><h6>elimation</h6></label>
                                            <div class="form_group">
                                            <input type="checkbox" name="elimation" id="diarrhea" value="diarrhea">
                                            <label for="diarrhea" class="form_label">diarrhea</label>
                                            <input type="checkbox" name="elimation" id="incontinent" value="incontinent">
                                            <label for="incontinent" class="form_label">incontinent</label>
                                            <input type="checkbox" name="elimation" id="constipation" value="constipation">
                                            <label for="constipation" class="form_label">constipation</label>
                                            
                                            <div class="form_group">
                                                <input type="checkbox" name="elimation" id="uses laxatives" value="uses laxatives">
                                                <label for="uses laxatives" class="form_label">uses laxatives</label>
                                                <input type="text" class="form_input" name="uses_laxatives" id="uses laxative" placeholder="specify">
                                            </div>
                                            <div class="form_group">
                                                <input type="checkbox" name="elimation" id="enema" value="enema">
                                                <label for="enema" class="form_label">enema</label>
                                                <input type="text" class="form_input" name="enema" id="enema" placeholder="specify">
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="appearance" class="form_label">stool appearance</label>
                                            <input type="text" class="form_input" name="stool_appearance" id="appearance" placeholder="specify">
                                            <div class="form_group">
                                                <input type="checkbox" name="elimation_other" id="other" value="other">
                                                <label for="other" class="form_label">other</label>
                                                <input type="text" class="form_input" name="endocrine_historyOther" id="other" placeholder="specify">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="form_gastrointestinal_sub_assessment">
                                    <div class="form_gastrointestinal_sub_assessment-header">
                                        <h5 class="from_gastrointestinal_sub_assessment-header">assessment</h5>
                                    </div>
                                    <div class="form_gastrointestinal_sub_assessment-flex">
                                        <div class="form_group nad">
                                            <input type="checkbox" name="gastrointestinal_assessment" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group impaired">
                                            <input type="checkbox" name="gastrointestinal_assessment" id="impaired" value="impaired">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="nausea" value="nausea">
                                        <label for="nausea" class="form_label">nausea</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="vomiting" value="vomiting">
                                        <label for="vomiting" class="form_label">vomiting</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="oral ulcer" value="oral ulcer">
                                        <label for="oral ulcer" class="form_label">oral ulcer</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="jaundice" value="jaundice">
                                        <label for="jaundice" class="form_label">jaundice</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="enlargement of thyroid gland" value="enlargement of thyroid gland">
                                        <label for="enlargement of thyroid gland" class="form_label">enlargement of thyroid gland</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="bulging eye" value="bulging eye">
                                        <label for="bulging eye" class="form_label">bulging eye</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="abdominal distension" value="abdominal distension">
                                        <label for="abdominal distension" class="form_label">abdominal distension</label>
                                        <input type="checkbox" name="gastrointestinal_assessment_effect" id="ascitis" value="ascitis">
                                        <label for="ascitis" class="form_label">ascitis</label>
                                        <div class="form_group">
                                            <input type="checkbox" name="assessment_ostomyType" id="ostomy" value="ostomy-type">
                                            <label for="ostomy" class="form_label">ostomy-type</label>
                                            <input type="text" class="form_input" name="OstomyType" id="ostomy" placeholder="specify">
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="assessment_ostomyType" id="other" value="other">
                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="gastro_assessmentOther" id="other" placeholder="specify">
                                        </div>
                                    </div>
                               </div>
                           </div>
                       </div>
                       <div class="form_psychosocial">
                           <div class="form_psychosocial_header u-margin-bottom-small u-margin-top-small">
                                <h3 class="form_psychosocial_header">psychosocial/spiritual/adaptation</h3>
                           </div>
                           <div class="form_psychosocial_sub">
                               <div class="form_psychosocial_sub_history">
                                    <div class="form_psychosocial_sub_history-header">
                                        <h5 class="form_psychosocial_sub_history-header">history</h5>
                                    </div>
                                    <div class="form_psychosocial_sub_history-flex">
                                        <div class="form_group">
                                            <input type="checkbox" name="psychosocial_history" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="psychosocial_history" id="impaired" value="impaired">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="psychiatric" class="form_label"><h6>psychiatric history</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="psychiatric_history" id="yes" value="yes">
                                            <label for="yes" class="form_label">yes</label>
                                            <input type="checkbox" name="psychiatric_history" id="no" value="no">
                                            <label for="no" class="form_label">no</label>
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="psychiatric_disorder" id="brain" value="psychiatric disorder related to brain">
                                            <label for="brain" class="form_label">psychiatric disorder related to brain</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="schizophrenia" value="schizophrenia">
                                            <label for="schizophrenia" class="form_label">schizophrenia</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="mood disorder" value="mood disorder">
                                            <label for="mood disorder" class="form_label">mood disorder</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="personality disorder" value="personality disorder">
                                            <label for="personality disorder" class="form_label">personality disorder</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="drug addict" value="drug addict">
                                            <label for="drug addict" class="form_label">drug addict</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="suicide attempt" value="suicide attempt">
                                            <label for="suicide attempt" class="form_label">suicide attempt</label>
                                            <input type="checkbox" name="psychiatric_disorder" id="self harm" value="self harm">
                                            <label for="self harm" class="form_label">self harm</label>
                                            <div class="form_group">
                                            <input type="checkbox" name="psychiatric_disorder" id="other" value="other">
                                            <label for="other" class="form_label">other</label>
                                            <input type="text" class="form_input" name="psychiatric_other" id="other" placeholder="specify">
                                            </div>
                                            <div class="form_group">
                                                <h6>
                                                    if indicated risk of international self harm, <span class="form_psychosocial_sub_history-underline">use additional assessment</span> 
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                   
                               </div>
                               <div class="form_psychosocial_sub_assessment">
                                    <div class="form_psychosocial_sub_assessment-header">
                                        <h5 class="form_psychosocial_sub_assessment-header">assessment</h5>
                                    </div>
                                    <div class="form_psychosocial_sub_assessment-flex">
                                    <div class="form_group">
                                            <input type="checkbox" name="psychosocial_assessment" id="nad" value="NAD">
                                            <label for="nad" class="form_label">nad</label>
                                        </div>
                                        <div class="form_group">
                                            <input type="checkbox" name="psychosocial_assessment" id="impaired" value="impaired">
                                            <label for="impaired" class="form_label">impaired</label>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="stress/anxiety" value="stress/anxiety">
                                        <label for="stress/anxiety" class="form_label">stress/anxiety</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="depression" value="depression">
                                        <label for="depression" class="form_label">depression</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="fear" value="fear">
                                        <label for="fear" class="form_label">fear</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="dying thought" value="dying thought">
                                        <label for="dying thought" class="form_label">dying thought</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="aggression" value="aggression">
                                        <label for="aggression" class="form_label">aggression</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="not friendly to other person" value="not friendly to other person">
                                        <label for="not friendly to other person" class="form_label">not friendly to other person</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="irritability" value="irritability">
                                        <label for="irritability" class="form_label">irritability</label>
                                        <input type="checkbox" name="psychosocial_assessment_effect" id="other" value="other">
                                        <label for="other" class="form_label">other</label>
                                    </div>
                                    <div class="form_group">
                                        <label for="" class="form_label"><h6>cause of problem</h6></label>
                                        <div class="form_group">
                                            <input type="checkbox" name="causeOf_problem" id="disease" value="disease">
                                            <label for="disease" class="form_label">disease</label>
                                            <div class="form_group">
                                                <input type="checkbox" name="causeOf_problem" id="body" value="body">
                                                <label for="body" class="form_label">body image change</label>
                                                <input type="text" class="form_input" name="body_change" id="body" placeholder="specify">
                                            </div>
                                            <div class="form_group">
                                                <input type="checkbox" name="causeOf_problem" id="other" value="other">
                                                <label for="other" class="form_label">other</label>
                                                <input type="text" class="form_input" name="psychosocial_assessment_other" id="other" placeholder="specify">
                                            </div>
                                        </div>
                                    </div>
                               </div>
                           </div>
                       </div>
                       <div class="form_defence_mechanism">
                           <div class="form_defence_mechanism_header u-margin-top-small u-margin-bottom-small">
                               <h3 class="defence_mechanism_header">defence mechanism for relieve stress/anxiety</h3>
                           </div>
                           <div class="form_group">
                               <input type="checkbox" name="stress_relieve" id="isolation" value="isolation">
                               <label for="isolation" class="form_label">isolation</label>
                               <input type="checkbox" name="stress_relieve" id="talking with other person" value="talking with other person">
                               <label for="talking with other person" class="form_label">talking with other person</label>
                               <input type="checkbox" name="stress_relieve" id="music" value="music">
                               <label for="music" class="form_label">music</label>
                               <input type="checkbox" name="stress_relieve" id="other" value="other">
                               <label for="other" class="form_label">other</label>
                               <input type="text" class="form_input" name="stress_relieveOther" id="other" placeholder="specify">
                           </div>
                           <div class="form_group">
                               <label for="" class="form_label"><h6>spiritual/cultural needs</h6></label>
                               <div class="form_group">
                                   <input type="checkbox" name="spiritual_needs" id="none" value="none">
                                   <label for="none" class="form_label">none</label>
                                   <input type="checkbox" name="spiritual_needs" id="yes" value="yes">
                                   <label for="yes" class="form_label">yes</label>
                               </div>
                               <div class="form_group">
                                    <input type="checkbox" name="spiritual_needs" id="religious" value="religious">
                                    <label for="religious" class="form_label">religious activity</label>
                                    <input type="text" class="form_input" name="religious_activity" id="religious" placeholder="specify">
                                    <input type="checkbox" name="spiritual_needs" id="other" value="other">
                                    <label for="other" class="form_label">other </label>
                                    <input type="text" class="form_input" name="defence_mechanism_other" id="other" placeholder="specify">
                               </div>
                           </div>
                       </div>
                       <div class="form_pain_assessment">
                           <div class="form_pain_assessment_header u-margin-bottom-small u-margin-top-small">
                               <h3 class="from_pain_assessment_header">pain assessment</h3>
                           </div>
                           <div class="form_group">
                               <label for="" class="form_label">pain</label>
                               <div class="form_group">
                                   <input type="checkbox" name="pain" id="no pain" value="no pain">
                                   <label for="no pain" class="form_label">no pain</label>
                                   <input type="checkbox" name="pain" id="pain intensity" value="pain intensity">
                                   <label for="pain intensity" class="form_label">pain intensity</label>
                                   <input type="text" class="form_input" name="pain_intensity" id="pain intensity" placeholder="specify"><span><h6>can not assesses pain scale</h6></span>
                                   <label for="pain location" class="form_label">pain location</label>
                                   <input type="text" class="form_input" name="pain_location" id="pain location" placeholder="specify">
                               </div>
                           </div>
                           <div class="form_group">
                                <label for="" class="form_label"><h6>pain relieve experienced by:</h6></label>
                                <div class="form_group">
                                    <input type="checkbox" name="pain_relieve" id="rest" value="rest/sleep">
                                    <label for="rest" class="form_label">rest/sleep</label>
                                    <input type="checkbox" name="pain_relieve" id="analgesic" value="analgesic">
                                    <label for="analgesic" class="form_label">analgesic</label>
                                    <input type="checkbox" name="pain_relieve" id="hot/cold compression" value="hot/cold compression">
                                    <label for="hot/cold compression" class="form_label">hot/cold compression</label>
                                    <input type="checkbox" name="pain_relieve" id="other" value="other">
                                    <label for="other" class="form_label">other</label>
                                    <input type="text" class="form_input" name="painRelieve_other" id="other" placeholder="specify">
                                </div>
                           </div>
                       </div>
                       <div class="form_psychosocial_support">
                           <div class="form_psychosocial_support_header u-margin-bottom-small u-margin-top-small">
                               <h3 class="form_psychosocial_support_header">psychosocial support</h3>
                           </div>
                           <div class="form_group">
                               <label for="" class="form_label">patient lives</label>
                               <div class="form_group">
                                    <input type="checkbox" name="patient_lives" id="alone" value="alone">
                                    <label for="alone" class="form_label">alone</label>
                                    <input type="checkbox" name="patient_lives" id="family" value="family">
                                    <label for="family" class="form_label">family</label>
                                    <input type="checkbox" name="patient_lives" id="other family" value="other family">
                                    <label for="other family" class="form_label">other family</label>
                                    <input type="checkbox" name="patient_lives" id="extended" value="extended care facility">
                                    <label for="extended" class="form_label">extended care facility</label>
                                    <input type="text" class="form_input" name="extendedCare_facility" id="extended" placeholder="specif">
                               </div>
                           </div>
                           <div class="form_group">
                               <label for="" class="form_label">who can help after discharge:</label>
                               <div class="form_group">
                                   <label for="helperName" class="form_label">name</label>
                                   <input type="text" class="form_input" name="helper_name" id="helperName" placeholder="specify">
                                   <label for="relationship" class="form_label">relationship</label>
                                   <input type="text" class="form_input" name="helper_relationship" id="relationship" placeholder="specify">
                                   <label for="helperTelephone" class="form_label">telephone</label>
                                   <input type="text" class="form_input" name="helper_telephone" id="helperTelephone" placeholder="specify">
                               </div>
                               <div class="form_group">
                                    <label for="problem" class="form_label">problem/needs</label>
                                    <input type="text" class="form_input" name="problem_needs" id="problem" placeholder="specify">
                                    <label for="action" class="form_label">action</label>
                                    <input type="text" class="form_input" name="action" id="action" placeholder="specify">
                               </div>
                           </div>
                           <div class="form_group">
                                <div class="form_group">
                                    <label for="" class="form_label">patient need home health services/equipment at discharge</label>
                                    <input type="checkbox" name="home_health_services" id="no" value="no">
                                    <label for="no" class="form_label">no</label>
                                    <input type="checkbox" name="home_health_services" id="yes" value="yes">
                                    <label for="yes" class="form_label">yes</label>
                                </div>
                                <div class="form_group">
                                    <label for="problem-needs" class="form_label">problem/needs</label>
                                    <input type="text" class="form_input" name="problem_Needs" id="problem-needs" placeholder="specify">
                                    <label for="action-taken" class="form_label">action</label>
                                    <input type="text" class="form_input" name="Action" id="action-taken" placeholder="specify">
                                </div>
                           </div>
                           <div class="form_group">
                                <div class="form_group">
                                    <label for="" class="form_label">patient need assistance economic:</label>
                                    <input type="checkbox" name="assistance_economic" id="no" value="no">
                                    <label for="no" class="form_label">no</label>
                                    <input type="checkbox" name="assistance_economic" id="yes" value="yes">
                                    <label for="yes" class="form_label">yes</label>
                                </div>
                                <div class="form_group">
                                    <label for="problem-needs" class="form_label">problem/needs</label>
                                    <input type="text" class="form_input" name="problem_Need" id="problem-needs" placeholder="specify">
                                    <label for="action-taken" class="form_label">action</label>
                                    <input type="text" class="form_input" name="Action_taken" id="action-taken" placeholder="specify">
                                </div>
                           </div>
                           <div class="from_psychosocial_border-top">
                               <div class="form_group">
                                   <label for="" class="form_label">information receive from:</label>
                                   <input type="checkbox" name="information_receiveFrom" id="patient" value="patient">
                                   <label for="patient" class="form_label">patient</label>
                                   <input type="checkbox" name="information_receiveFrom" id="other" value="other">
                                   <label for="other" class="form_label">other</label>
                                   <input type="text" class="form_input" name="informationReceive_other" id="other" placeholder="specify">
                                   <div class="form_group">
                                        <label for="completed" class="form_label">completed by</label>
                                        <input type="text" class="form_input" name="completed_by" id="completed" placeholder="specify">
                                        <label for="date" class="form_label">date</label>
                                        <input type="text" class="form_input" name="date" id="date" placeholder="YY/MM/DD">
                                   </div>
                               </div>
                               <div class="form_group">
                                   <label for="" class="form_label">limitation of initial assessment</label>
                                   <input type="checkbox" name="limitation_initial_ass" id="unconscious" value="unconscious">
                                   <label for="unconscious" class="form_label">unconscious</label>
                                   <input type="checkbox" name="limitation_initial_ass" id="no relatives" value="no relatives">
                                   <label for="no relatives" class="form_label">no relatives</label>
                                   <input type="checkbox" name="limitation_initial_ass" id="other" value="other">
                                   <label for="other" class="form_label">other</label>
                                   <input type="text" class="form_input" name="limitation_initial_ass_other" id="other" placeholder="specify">
                               </div>
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