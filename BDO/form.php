<?php

require_once('send.php');

function insertData() {
    global $conn;

    if (isset($_POST['Yes'])) {
        
        $data = [
            'lastname', 'firstname', 'middlename', 'suffix', 'placeofbirth', 'dateofbirth',
            'sex', 'house_street_subdivision', 'barangay', 'city_municipality', 'province',
            'zipcodes', 'house_street_subdivision1', 'barangay1', 'city_municipality1',
            'province1', 'zipcodes1', 'telephone_mobile_number', 'email_address', 'client_id_number'
        ];


        foreach ($data as $field) {
            if (empty($_POST[$field])) {

                echo "<script>alert('Please fill all the fields.'); window.history.back();</script>";
                exit();
            }
        }


        $values = array_map(function ($field) use ($conn) {
            return mysqli_real_escape_string($conn, $_POST[$field]);
        }, $data);

        $sql = "INSERT INTO bdo_info VALUES ('" . implode("', '", $values) . "')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Data Inserted');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
        }
    }
}


insertData();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>project august</title>
        <link rel="stylesheet" href="assets/css/form_style.css" />
        <script type="text/javascript" src="assets/js/jquery-3.7.1.min.js"></script>
    </head>
    <body>
        <div class="center">
            <div>
                <img src="assets/img/logo.png" />
            </div>
            <div>
                <button type="button"><a href="index.php">EXIT</a></button>
            </div>
            <div>
                <div class="npt">
                    <p>Please fill out this form as honestly and accurately as possible.</p>
                    <hr />
                    <form name="Form2" method="post" action="" enctype="multipart/form-data" id="Form1">
                        <div>
                            <label>Last Name</label><br />
                            <input type="text" name="lastname" />
                        </div>
                        <div>
                            <label>First Name</label><br />
                            <input type="text" name="firstname" />
                        </div>
                        <div>
                            <label>Middle Name</label><br />
                            <input type="text" name="middlename" />
                        </div>
                        <div>
                            <label>Suffix</label><br />
                            <select name="suffix" id="suffix_id">
                                <option selected value="">Select</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Ms">Ms</option>
                                <option value="Dr">Dr</option>
                            </select>
                        </div>
                        <div>
                            <label>Place of Birth</label><br />
                            <input type="text" name="placeofbirth" />
                        </div>
                        <div>
                            <label>Date of Birth</label><br />
                            <input type="date" name="dateofbirth" />
                        </div>
                        <div>
                            <label>Sex</label><br />
                            <select name="sex" id="sex_id">
                                <option selected value="">Select</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                        </div>
                        <p>Current Address</p>
                        <div>
                            <label>House No./Street/Subdivision</label><br />
                            <input id="housestreetsubdivision_id" type="text" name="house_street_subdivision" />
                        </div>
                        <div>
                            <label>Barangay</label><br />
                            <input id="barangay_id" type="text" name="barangay" />
                        </div>
                        <br />
                        <div>
                            <label>City Municipality</label><br />
                            <select id="citymunicipality_id" name="city_municipality" size="1" id="citymunicipality_id">
                                <option selected value="">Select</option>
                                <?php
                                $zips = array("Alcantara","Alcoy","Alegria","Aloguinsan","Argao","Asturias","Badian","Balamban","Bantayan","Barile","Bogo","Boljoon","Borbon","Carcar","Carmen","Catmon","Cebu City","Compostela","Consolacion","Cordova","Daang-Bantayan","Dalaguete","Danao","Dumanjug","Ginatilan","Lapu-Lapu City","Liloan","Mactan Airport","Madridejos","Malabuyoc","Mandaue City","Medellin","Minglanilla","Moalboal","Naga","Oslob","Pilar","Pinamungahan","Poro","Ronda","Samboan","San Fernando","San Francisco","San Remegio","Santa Fe","Santander","Sibonga","Sogod","Tabogon","Tabuelan","Talisay","Toledo City","Tuburan","Todela",);
                                for ($x = 0; $x <=53 ; $x++) {
                                    echo '<option value="'.$zips[$x].'">'.$zips[$x].'</option>"';
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label>Province</label><br />
                            <select id="province_id" name="province" size="1" id="province_id">
                                <option selected value="">Select</option>
                                <option value="Cebu">Cebu</option>
                                <option value="Cebu">Bohol</option>
                            </select>
                        </div>
                        <div>
                            <label>Zip Code</label><br />
                            <select id="zipcodes_id" name="zipcodes" size="1" id="zipcodes_id">
                                <option selected value="">Select</option>
                                <?php
                                $zips = array(6033,6023,6030,6040,6021,6042,6031,6041,6042,6036,6010,6024,6008,6019,6005,6006,6000,6003,6001,6017,6013,6022,6004,6035,6026,6015,6002,6016,6053,6029,6014,6012,6046,6032,6037,6025,6048,6039,6049,6034,6027,6018,6050,6011,6047,6026,6020,6007,6009,6044,6045,6038,6043,6051,);
                                for ($x = 0; $x <=53 ; $x++) {
                                    echo '<option value="'.$zips[$x].'">'.$zips[$x].'</option>"';
                                }
                                ?>
                            </select>
                        </div>
                        <br />
                        <div>
                            <input type="checkbox" id="Checkbox1" name="Checkbox1" value="on"/>
                            <label>Same as current address</label>
                        </div>
                        <p>Permanent Address</p>
                        <div>
                            <label>House No./Street/Subdivision</label><br />
                            <input id="housestreetsubdivision1_id" type="text" name="house_street_subdivision1" />
                        </div>
                        <div>
                            <label>Barangay</label><br />
                            <input id="barangay1_id" type="text" name="barangay1" />
                        </div>
                        <br />
                        <div>
                            <label>City Municipality</label><br />
                            <select id="citymunicipality1_id" name="city_municipality1" size="1" id="citymunicipality_id">
                                <option selected value="">Select</option>
                                <?php
                                $zips = array("Alcantara","Alcoy","Alegria","Aloguinsan","Argao","Asturias","Badian","Balamban","Bantayan","Barile","Bogo","Boljoon","Borbon","Carcar","Carmen","Catmon","Cebu City","Compostela","Consolacion","Cordova","Daang-Bantayan","Dalaguete","Danao","Dumanjug","Ginatilan","Lapu-Lapu City","Liloan","Mactan Airport","Madridejos","Malabuyoc","Mandaue City","Medellin","Minglanilla","Moalboal","Naga","Oslob","Pilar","Pinamungahan","Poro","Ronda","Samboan","San Fernando","San Francisco","San Remegio","Santa Fe","Santander","Sibonga","Sogod","Tabogon","Tabuelan","Talisay","Toledo City","Tuburan","Todela",);
                                for ($x = 0; $x <=53 ; $x++) {
                                    echo '<option value="'.$zips[$x].'">'.$zips[$x].'</option>"';
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label>Province</label><br />
                            <select id="province1_id" name="province1" size="1" id="province_id">
                                <option selected value="">Select</option>
                                <option value="Cebu">Cebu</option>
                                <option value="Cebu">Bohol</option>
                            </select>
                        </div>
                        <div>
                            <label>Zip Code</label><br />
                            <select id="zipcodes1_id" name="zipcodes1" size="1" id="zipcodes_id">
                                <option selected value="">Select</option>
                                <?php
                                $zips = array(6033,6023,6030,6040,6021,6042,6031,6041,6042,6036,6010,6024,6008,6019,6005,6006,6000,6003,6001,6017,6013,6022,6004,6035,6026,6015,6002,6016,6053,6029,6014,6012,6046,6032,6037,6025,6048,6039,6049,6034,6027,6018,6050,6011,6047,6026,6020,6007,6009,6044,6045,6038,6043,6051,);
                                for ($x = 0; $x <=53 ; $x++) {
                                    echo '<option value="'.$zips[$x].'">'.$zips[$x].'</option>"';
                                }
                                ?>
                            </select>
                        </div>
                        <p>Contact Information</p>
                        <div>
                            <label>Telephone/Mobile Number</label><br />
                            <input type="text" name="telephone_mobile_number" />
                        </div>
                        <div>
                            <label>Email Address</label><br />
                            <input type="email" name="email_address" />
                        </div>
                        <div>
                            <label>Client ID Number</label><br />
                            <input type="text" name="client_id_number" />
                        </div>
                        <br />
                        <div>
                            <input type="checkbox" id="Checkbox2" name="Checkbox2" value="on" />
                            <label>I hereby certify that the information given and all statements made herein are true and correct.</label>
                        </div>
                        <footer>
                            <span id="cancel">CANCEL</span>
                            <span id="submit_now">SUBMIT</span>
                        </footer>
                        <div id="prompt_in">
                            <input type="submit" id="Button2" name="" value="Cancel">
                            <input type="submit" id="yes" name="Yes" value="Yes">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="prompt">
            <div>
                <p>Are you sure?</p>
                <p>All the information you entered is correct?</p>
                <span class="btn_req">
                    <button type="submit" id="btn_yes">Yes</button>
                    <button type="submit" id="btn_cancel">Cancel</button>
                </span>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="assets/js/form.js"></script>
</html>
