

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>initial patient assessment form</title>
    <link rel="stylesheet" href="/sass/main.css">
</head>
<body>
    <div class="assessment-main">
        <div class="assessment">
            <div class="assessment_header">
                <h1 class="u-margin-bottom-medium">
                    initial patient assessment form
                </h1>
            </div>
            <form action="#" class="form">
                <div class="personal_data">
                    <div class="personal_data-header">
                        <h3 class="u-margin-bottom-small">
                            personal data
                        </h3>
                    </div>
                    <div class="form_group">
                        <label for="name" class="form_label">name</label>
                        <input type="text" class="form_input" id="name" placeholder="enter name" required>

                        <label for="height" class="form_label">height</label>
                        <input type="text" class="form_input" id="height" placeholder="enter height" required>
                    </div>

                    <div class="form_group">
                        <label for="weight" class="form_label">weight</label>
                        <input type="text" class="form_input" id="weight" placeholder="enter weight" required>

                        <label for="age" class="form_label">age</label>
                        <input type="text" class="form_input" id="age" placeholder="enter age" required>
                    </div>

                    <div class="form_group">
                        <label for="address" class="form_label">address</label>
                        <input type="text" class="form_input" id="address" placeholder="enter address" required>

                        <label for="bmi" class="form_label">bmi</label>
                        <input type="text" class="form_input" id="bmi" placeholder="enter bmi" required>
                    </div>
                </div>

                <div class="health_history">
                    <div class="health_history-header">
                        <h3 class="u-margin-bottom-small">
                            health history
                        </h3>
                    </div>

                    <div class="form_group">
                        <label for="education" class="form_label">education</label>
                        <input type="text" class="form_input" id="education" placeholder="enter qualification" required>

                        <label for="occupation" class="form_label">occupation</label>
                        <input type="text" class="form_input" id="occupation" placeholder="enter occupation" required>
                    </div>

                    <div class="form_group">
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

                    <label for="wbc" class="form_label">wbc</label>
                    <input type="text" class="form_input form_input-small" id="wbc" placeholder="enter wbc" required >
                </div>


                <div class="form_group">
                    <label for="past medic" class="form_label">past medical condition</label>
                    <input type="text" class="form_input" placeholder="enter past medical condition" id="past medic" required>

                    <label for="chief complaint" class="form_label">chief complaint</label>
                    <input type="text" class="form_input" placeholder="enter chief complaint" id="chief complaint" required>

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

                <div class="neurological">
                    <div class="neurological_header">
                        <h3 class="u-margin-bottom-small">
                            neurological/perception
                        </h3>
                    </div>

                    <div class="neurological_container">
                        <div class="neurological_container-history">
                            <div class="neurological_container-history-header">
                                <h4 class="u-margin-bottom-small">
                                    history
                                </h4>
                            </div>
                            <div class="neurological_container-perception">
                                <div class="neurological_container-perception-sub">
                                    <label class="form_label">nad</label>
                                    <input type="checkbox">
                                </div>

                                <div class="neurological_container-perception-sub">
                                    <label class="form_label">impaired</label>
                                    <input type="checkbox">
                                </div>
                            </div>

                            <div class="neurological_container-migraine">
                                <div class="neurological_container-migraine-sub">
                                    <label class="form_label">migraine</label>
                                    <input type="checkbox">
                                </div>

                                <div class="neurological_container-migraine-sub">
                                    <label class="form_label">seizure</label>
                                    <input type="checkbox">
                                </div>

                                <div class="neurological_container-migraine-sub">
                                    <label class="form_label">epilepsy</label>
                                    <input type="checkbox">
                                </div>

                                <div class="neurological_container-migraine-sub">
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

                            <div class="neurological_container-visualhearing">
                                <div class="neurological_container-visualhearing-main">
                                    <div class="neurological_container_visualhearing-caption">
                                        <input type="checkbox">
                                        <label class="form_label">blind</label>
                                    </div>

                                    <div class="neurological_container-sub">
                                        <input type="radio" name="blind">
                                        <label class="form_label">rt</label>

                                        <input type="radio" name="blind">
                                        <label class="form_label">lt</label>
                                    </div>
                                </div>

                                <div class="neurological_container-visualhearing-main">
                                    <div class="neurological_container_visualhearing-caption">
                                        <input type="checkbox">
                                        <label class="form_label">poor visual</label>
                                    </div>

                                    <div class="neurological_container-sub">
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

                            <div class="neurological_container-visualhearing">
                                <div class="neurological_container-visualhearing-main">
                                    <div class="neurological_container_visualhearing-caption">
                                        <input type="checkbox">
                                        <label class="form_label">deaf</label>
                                    </div>

                                    <div class="neurological_container-sub">
                                        <input type="radio" name="blind">
                                        <label class="form_label">rt</label>

                                        <input type="radio" name="blind">
                                        <label class="form_label">lt</label>
                                    </div>
                                </div>

                                <div class="neurological_container-visualhearing-main">
                                    <div class="neurological_container_visualhearing-caption">
                                        <input type="checkbox">
                                        <label class="form_label">poor hearing</label>
                                    </div>

                                    <div class="neurological_container-sub">
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>