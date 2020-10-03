

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
                        <input type="text" class="form_input" name="name" id="name" placeholder="enter name" required>

                        <label for="height" class="form_label">height</label>
                        <input type="text" class="form_input" name="height" id="height" placeholder="enter height" required>

                        <label for="weight" class="form_label">weight</label>
                        <input type="text" class="form_input" name="weight" id="weight" placeholder="enter weight" required>
                    </div>

                    <div class="form_group">
                        <label for="address" class="form_label">address</label>
                        <input type="text" class="form_input" name="address" id="address" placeholder="enter address" required>

                        <label for="age" class="form_label">age</label>
                        <input type="text" class="form_input" name="age" id="age" placeholder="enter age" required>

                        <label for="bmi" class="form_label">bmi</label>
                        <input type="text" class="form_input" name="bmi" id="bmi" placeholder="enter bmi" required>
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
                        <input type="text" class="form_input" id="education" placeholder="enter qualification" required>

                        <label for="occupation" class="form_label">occupation</label>
                        <input type="text" class="form_input" id="occupation" placeholder="enter occupation" required>
                    </div>

                    <div class="form_language">
                        <div class="form_label" >
                            <label class="form_label">language:</label>
                        </div>
                        <div class="language_spoken">
                            <input type="checkbox">
                            <label for="english" class="form_label">english</label>
                        </div>
                        <div class="language_spoken">
                            <input type="checkbox">
                            <label for="other" class="form_label">other</label>
                            <input type="text" class="form_input" id="other" placeholder="please specify" required>
                        </div>
                    </div>

                    <div class="form_group">
                        <label for="emergency" class="form_label">emergency contact (name)</label>
                        <input type="text" class="form_input" id="emergency" placeholder="enter emergency name" required>

                        <label for="relationship" class="form_label">relationship</label>
                        <input type="text" class="form_input" id="relationship" placeholder="enter relationship" required>
                    </div>

                    <div class="form_group">
                        <label for="phone No." class="form_label">phone No.</label>
                        <input type="text" class="form_input" id="phone No." placeholder="enter phone No." required>

                        <label for="nearest healthcare" class="form_label">nearest healthcare facility</label>
                        <input type="text" class="form_input" id="nearest healthcare" placeholder="enter nearest healthcare facility" required>
                    </div>
                </div>

                <div class="form_group">
                    <label for="bg" class="form_label">blood group</label>
                    <input type="text" class="form_input form_input-small" id="bg" placeholder="enter blood group" required >

                    <label for="hb" class="form_label">hb</label>
                    <input type="text" class="form_input form_input-small" id="hb" placeholder="enter hb" required >

                    <label for="bm" class="form_label">bm</label>
                    <input type="text" class="form_input form_input-small" id="bm" placeholder="enter bm" required >
                </div>

                    <div class="form_group">
                    <label for="wbc" class="form_label">wbc</label>
                    <input type="text" class="form_input form_input-small" id="wbc" placeholder="enter wbc" required >
                    </div>

                <div class="form_group">
                    <label for="past medic" class="form_label">past medical condition</label>
                    <input type="text" class="form_input" placeholder="enter past medical condition" id="past medic" required>

                    <label for="chief complaint" class="form_label">chief complaint</label>
                    <input type="text" class="form_input" placeholder="enter chief complaint" id="chief complaint" required>
                </div>

                <div class="form_group">
                    <label for="present illness" class="form_label">present illness</label>
                    <input type="text" class="form_input" placeholder="enter present illness" id="present illness" required>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">previous hospitalization:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">no</label>
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">yes</label>

                            <label for="last visit" class="form_label">(date of last visit)</label>
                            <input type="text" class="form_input" id="relationship" placeholder="specify last visit" required>

                            <label for="place" class="form_label">place</label>
                            <input type="text" class="form_input" id="place" placeholder="specify place" required>

                            <label for="reason" class="form_label">reason</label>
                            <input type="text" class="form_input" id="reason" placeholder="specify reason" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">previous surgery:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">no</label>
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">yes</label>

                            <label for="last surgery" class="form_label">(date of last surgery)</label>
                            <input type="text" class="form_input" id="last surgery" placeholder="specify date" required>

                            <label for="place" class="form_label">place</label>
                            <input type="text" class="form_input" id="place" placeholder="specify place" required>

                            <label for="reason" class="form_label">reason</label>
                            <input type="text" class="form_input" id="reason" placeholder="specify reason" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">family illness:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">no</label>
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">yes</label>

                            <label for="last visit" class="form_label">(relationship)</label>
                            <input type="text" class="form_input" id="last visit" placeholder="specify date" required>

                            <label for="place" class="form_label">place</label>
                            <input type="text" class="form_input" id="place" placeholder="specify place" required>

                            <label for="reason" class="form_label">reason</label>
                            <input type="text" class="form_input" id="reason" placeholder="specify reason" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">allergies:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">no</label>
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <input type="checkbox">
                            <label class="form_label">yes</label>

                            <label for="drug" class="form_label">drugs</label>
                            <input type="text" class="form_input" id="drug" placeholder="specify drug" required>

                            <label for="food" class="form_label">food</label>
                            <input type="text" class="form_input" id="food" placeholder="specify food" required>

                            <label for="other" class="form_label">other</label>
                            <input type="text" class="form_input" id="other" placeholder="specify other" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">vaccine/immunization:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <label class="form_label">no/forgotten</label>
                            <input type="radio" name="vaccine">
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <label class="form_label">yes</label>
                            <input type="radio" name="vaccine">

                            <label for="specify" class="form_label">(specify)</label>
                            <input type="text" class="form_input" id="specify" placeholder="specify" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">medication/supplements/herbals:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <label class="form_label">no</label>
                            <input type="radio" name="medic">
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <label class="form_label">yes</label>
                            <input type="radio" name="medic">

                            <label for="specify" class="form_label">(specify)</label>
                            <input type="text" class="form_input" id="specify" placeholder="specify" required>
                        </div>
                    </div>
                </div>

                <div class="form_group form_hospitalization">
                    <div class="form_label">
                        <label class="form_label">health risk behaviors:</label>
                    </div>
                    
                    <div class="form_hospitalization_main">
                        <div class="form_hospitalization_sun">
                            <label class="form_label">no</label>
                            <input type="radio" name="medic">
                        </div>
                       
                        <div class="form_hospitalization_sun">
                            <label class="form_label">yes</label>
                            <input type="radio" name="medic">

                            <label for="specify" class="form_label">(specify)</label>
                            <input type="checkbox" class="form_hospitalization_sun_health-risk" value="smoking">smoking
                            <input type="checkbox" class="form_hospitalization_sun_health-risk" value="alcohol">alcohol
                            <input type="checkbox" class="form_hospitalization_sun_health-risk" value="addictive substance">addictive substance
                            <input type="checkbox" class="form_hospitalization_sun_health-risk" value="other">other
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
                                <label class="form_label">nad</label>
                                <input type="checkbox">
                            </div>

                            <div class="neurological_perception-sub">
                                <label class="form_label">impaired</label>
                                <input type="checkbox">
                            </div>
                        </div>

                        <div class="form_neurological_migraine">
                            <div class="neurological_container-migraine-sub">
                                <label class="form_label">migraine</label>
                                <input type="checkbox">
                            </div>

                            <div class="neurological_migraine-sub">
                                <label class="form_label">seizure</label>
                                <input type="checkbox">
                            </div>

                            <div class="neurological_migraine-sub">
                                <label class="form_label">epilepsy</label>
                                <input type="checkbox">
                            </div>

                            <div class="neurological_migraine-sub">
                                <label class="form_label">cva</label>
                                <input type="checkbox">
                            </div>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="tumor" class="form_label">tumor/ca</label>
                            <input type="text" class="form_input" id="tumor" placeholder="specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="paralysis" class="form_label">paralysis</label>
                            <input type="text" class="form_input" id="paralysis" placeholder="specify" required>
                        </div>

                        <div class="neurological_visualhearing">
                            <div class="neurological_visualhearing-main">
                                <div class="neurological_container_visualhearing-caption">
                                    <input type="checkbox">
                                    <label class="form_label">blind</label>
                                </div>

                                <div class="neurological_sub">
                                    <input type="radio" name="blind">
                                    <label class="form_label">rt</label>

                                    <input type="radio" name="blind">
                                    <label class="form_label">lt</label>
                                </div>
                            </div>

                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox">
                                    <label class="form_label">poor visual</label>
                                </div>

                                <div class="neurological_sub">
                                    <input type="radio" name="poor visual">
                                    <label class="form_label">rt</label>

                                    <input type="radio" name="poor visual">
                                    <label class="form_label">lt</label>
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <label for="aid" class="form_label">visual aid</label>
                            <input type="text" class="form_input" id="aid" placeholder="please specify" required>
                        </div>

                        <div class="neurological_visualhearing">
                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox">
                                    <label class="form_label">deaf</label>
                                </div>

                                <div class="neurological_sub">
                                    <input type="radio" name="blind">
                                    <label class="form_label">rt</label>

                                    <input type="radio" name="blind">
                                    <label class="form_label">lt</label>
                                </div>
                            </div>

                            <div class="neurological_visualhearing-main">
                                <div class="neurological_visualhearing-caption">
                                    <input type="checkbox">
                                    <label class="form_label">poor hearing</label>
                                </div>

                                <div class="neurological_sub">
                                    <input type="radio" name="poor visual">
                                    <label class="form_label">rt</label>

                                    <input type="radio" name="poor visual">
                                    <label class="form_label">lt</label>
                                </div>
                            </div>
                        </div>

                        <div class="form_group">
                            <label for="hearing" class="form_label">hearing aid</label>
                            <input type="text" class="form_input" id="hearing" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="speech" class="form_label">speech</label>
                            <input type="text" class="form_input" id="speech" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <label for="aid" class="form_label">speech aid</label>
                            <input type="text" class="form_input" id="aid" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="smell" class="form_label">smell</label>
                            <input type="text" class="form_input" id="smell" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="taste" class="form_label">taste</label>
                            <input type="text" class="form_input" id="taste" placeholder="please specify" required>
                        </div>

                        <div class="form_group">
                            <input type="checkbox">
                            <label for="other class="form_label>other</label>
                            <input type="text" class="form_input" id="other" placeholder="please specify" required>
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
                                <label class="form_label">spontaneous = 4</label>
                                <input type="checkbox">
                                </div>

                                <div class="form_neurological_response-toeye">
                                <label class="form_label">to voice = 3</label>
                                <input type="checkbox">
                                </div>

                                <div class="form_neurological_response-toeye">
                                <label class="form_label">to pain = 2</label>
                                <input type="checkbox">
                                </div>
                                
                                <div class="form_neurological_response-toeye">
                                <label class="form_label">none = 1</label>
                                <input type="checkbox">
                                </div>
                            </div>
                            <!--verbal response-->
                            <div class="neurological_response-verbal u-margin-bottom-small">
                                <h5 class="form_neurological_response-header">
                                    verbal response
                                </h5>
                                <div class="form_neurological_response-toeye">
                                <label class="form_label">oriented = 5</label>
                                <input type="checkbox" value="oriented 5">
                                </div>

                                <div class="form_neurological_response-toeye">
                                <label class="form_label">confused = 4</label>
                                <input type="checkbox" value="confused 4">
                                </div>

                                <div class="form_neurological_response-toeye">
                                <label class="form_label">inappropriate words = 3</label>
                                <input type="checkbox" value="inappropriate words 3">
                                </div>
                                
                                <div class="form_neurological_response-toeye">
                                <label class="form_label">incomprehensive sounds = 2</label>
                                <input type="checkbox" value="incomprehensive sounds 2">
                                </div>

                                <div class="form_neurological_response-toeye">
                                <label class="form_label">none = 1</label>
                                <input type="checkbox" value="none 1">
                                </div>
                            </div>
                            <!--motor response-->
                            <div class="neurological_response-motor u-margin-bottom-small">
                                <h5 class="form_neurological_response-header">
                                    motor response
                                </h5>
                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">obey command = 6</label>
                                <input type="checkbox" value="obey command 6">
                                </div>

                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">localizes pain = 5</label>
                                <input type="checkbox" value="localizes pain 5">
                                </div>

                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">withdraw to pain = 4</label>
                                <input type="checkbox" value="withdraw to pain 4">
                                </div>
                                
                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">flexion to pain = 3</label>
                                <input type="checkbox" value="flexion to pain 3">
                                </div>

                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">extension to pain = 2</label>
                                <input type="checkbox" value="extension to pain 2">
                                </div>

                                <div class="form_neurological_response-tomotor">
                                <label class="form_label">none = 1</label>
                                <input type="checkbox" value="none 1">
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
                                <label class="form_label">sensation</label>
                                <input type="radio" name="numbness" value="numbness">

                                <label class="form_label" for="other">other</label>
                                <input type="text" class="form_input" name="other" id="other" placeholder="specify other">
                            </div>

                            <div class="form_group">
                                <label class="form_label" for="location">location</label>
                                <input type="text" class="form_input" name="location" id="location" placeholder="specify">
                            </div>
                        </div>

                        <div class="form_group">
                            <label for="" class="form_label">abnormal appearance</label>

                            <label for="tumor" class="form_label">eyes</label>
                            <input type="checkbox">

                            <label for="tumor" class="form_label">ears</label>
                            <input type="checkbox">

                            <label for="tumor" class="form_label">nose</label>
                            <input type="checkbox">

                            <label class="form_label" for="other">other</label>
                            <input type="text" class="form_input" name="other" id="other" placeholder="specify">
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
                                        <input type="checkbox" name="nad/impaired[]" value="nad" id="nad">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="nad/impaired[]" value="impaired" id="impaired">
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
                                    <input type="text" class="form_input" name="other" id="other" placeholder="specify other">
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

                                    <input type="checkbox" name="assessment_breathing" id="dyspnea">
                                    <label for="dyspnea" class="form_label">dyspnea</label>

                                    <input type="checkbox" name="assessment_breathing" id="tachypnea/bradypnea">
                                    <label for="tachypnea/bradypnea" class="form_label">tachypnea/bradypnea</label>

                                    <input type="checkbox" name="assessment_breathing" id="wheezes/stridor">
                                    <label for="wheezes/stridor" class="form_label">wheezes/stridor</label>

                                    <input type="checkbox" name="assessment_breathing" id="orthopnea">
                                    <label for="orthopnea" class="form_label">orthopnea</label>

                                    <input type="checkbox" name="assessment_breathing" id="cough">
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
                                        <input type="text" class="form_input" name="other" id="other" placeholder="specify">
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
                                        <input type="checkbox" name="cardiovascular_nad/impaired" id="nad" value="NAD">
                                        <label for="nad" class="form_label">nad</label>
                                    </div>
                                    <div class="impaired">
                                        <input type="checkbox" name="cardiovascular_nad/impaired" id="impaired" value="impaired">
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
                                        <input type="checkbox" name="blood_assessment" id="skin" value="skin">
                                        <label for="skin" class="form_label">skin</label>

                                        <input type="checkbox" name="blood_assessment" id="cool" value="cool">
                                        <label for="cool" class="form_label">cool</label>

                                        <input type="checkbox" name="blood_assessment" id="warm/hot" value="warm/hot">
                                        <label for="warm/hot" class="form_label">warm/hot</label>

                                        <input type="checkbox" name="blood_assessment" id="pale" value="pale">
                                        <label for="pale" class="form_label">pale</label>

                                        <input type="checkbox" name="blood_assessment" id="cyanotic" value="cyanotic">
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
                                <div class="form_musculoskeletal_sub_history-flex">
                                    <div class="form_musculoskeletal_sub_history-header">
                                        <h5 class="form_musculoskeletal_sub_history-header">
                                            history
                                        </h5>
                                    </div>
                                </div>
                           </div>
                           <div class="form_musculoskeletal_sub_assessment u-margin-bottom-small">

                           </div>
                       </div>
                   </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>