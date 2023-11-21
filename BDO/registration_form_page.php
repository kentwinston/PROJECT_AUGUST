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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 17 - https://www.wysiwygwebbuilder.com">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="Final_Project.css" rel="stylesheet">
<link href="registration_form_page.css" rel="stylesheet">
<script src="jquery-3.6.0.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wwb17.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Checkbox1").change(function()
   {
      if ($('#Checkbox1').is(':checked'))
      {
         $('#housestreetsubdivision1_id').prop('disabled', false);
         $('#barangay1_id').prop('disabled', false);
         $('#citymunicipality1_id').prop('disabled', false);
         $('#province1_id').prop('disabled', false);
         $('#zipcodes1_id').prop('disabled', false);

        var housestreetsubdivision_id = $('#housestreetsubdivision_id').val();
        $('#housestreetsubdivision1_id').val(housestreetsubdivision_id);

        var barangay_id = $('#barangay_id').val();
        $('#barangay1_id').val(barangay_id);

        var citymunicipality_id = $('#citymunicipality_id').val();
        $('#citymunicipality1_id').val(citymunicipality_id);

        var province_id = $('#province_id').val();
        $('#province1_id').val(province_id);

        var zipcodes_id = $('#zipcodes_id').val();
        $('#zipcodes1_id').val(zipcodes_id);
      }
      if (!$('#Checkbox1').is(':checked'))
      {
         $('#housestreetsubdivision1_id').prop('enabled', false);
         $('#barangay1_id').prop('enabled', false);
         $('#citymunicipality1_id').prop('enabled', false);
         $('#province1_id').prop('enabled', false);
         $('#zipcodes1_id').prop('enabled', false);
      }
   });
   $("#Checkbox1").trigger('change');
});
</script>
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:1350px;height:720px;z-index:59;">
<img src="images/test.png" id="Image1" alt="" width="1350" height="759"></div>
<div id="wb_Form1" style="position:absolute;left:58px;top:51px;width:1230px;height:650px;z-index:60;">
<form name="Form2" method="post" action="" enctype="multipart/form-data" id="Form1">
<div id="wb_Image2" style="position:absolute;left:790px;top:172px;width:0px;height:0px;z-index:0;">
<img src="" id="Image2" alt=""></div>
<div id="wb_Text1" style="position:absolute;left:16px;top:5px;width:599px;height:22px;z-index:1;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Please fill out this form as honestly and accurately as possible.</span></div>
<div id="wb_Text2" style="position:absolute;left:16px;top:45px;width:102px;height:22px;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Last Name</span></div>
<input type="text" id="lastname_id" style="position:absolute;left:17px;top:68px;width:250px;height:30px;z-index:3;" name="lastname" value="" spellcheck="false">
<div id="wb_Text3" style="position:absolute;left:280px;top:45px;width:104px;height:22px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:20px;">First Name</span></div>
<input type="text" id="firstname" style="position:absolute;left:281px;top:68px;width:250px;height:30px;z-index:5;" name="firstname" value="" spellcheck="false">
<div id="wb_Text4" style="position:absolute;left:545px;top:45px;width:123px;height:22px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Middle Name</span></div>
<input type="text" id="middlename" style="position:absolute;left:546px;top:68px;width:250px;height:30px;z-index:7;" name="middlename" value="" spellcheck="false">
<div id="wb_Text5" style="position:absolute;left:802px;top:45px;width:57px;height:22px;z-index:8;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Suffix</span></div>
<div id="wb_Text6" style="position:absolute;left:16px;top:108px;width:130px;height:22px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Place of Birth</span></div>
<div id="wb_Text7" style="position:absolute;left:280px;top:108px;width:122px;height:22px;z-index:10;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Date of Birth</span></div>
<div id="wb_Text8" style="position:absolute;left:545px;top:108px;width:37px;height:22px;z-index:11;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Sex</span></div>
<input type="text" id="placeofbirth_id" style="position:absolute;left:17px;top:131px;width:250px;height:30px;z-index:12;" name="placeofbirth" value="" spellcheck="false">
<input type="date" id="dateofbirth_id" style="position:absolute;left:281px;top:131px;width:250px;height:30px;z-index:13;" name="dateofbirth" value="" spellcheck="false">
<div id="wb_Text9" style="position:absolute;left:16px;top:169px;width:158px;height:22px;z-index:14;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Current Address</span></div>
<div id="wb_Text10" style="position:absolute;left:16px;top:202px;width:279px;height:22px;z-index:15;">
<span style="color:#000000;font-family:Arial;font-size:20px;">House No./Street/Subdivision</span></div>
<div id="wb_Text11" style="position:absolute;left:355px;top:202px;width:92px;height:22px;z-index:16;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Barangay</span></div>
<input type="text" id="housestreetsubdivision_id" style="position:absolute;left:17px;top:225px;width:316px;height:30px;z-index:17;" name="house_street_subdivision" value="" spellcheck="false">
<input type="text" id="barangay_id" style="position:absolute;left:356px;top:225px;width:250px;height:30px;z-index:18;" name="barangay" value="" spellcheck="false">
<div id="wb_Text12" style="position:absolute;left:16px;top:265px;width:158px;height:22px;z-index:19;">
<span style="color:#000000;font-family:Arial;font-size:20px;">City/Municipality</span></div>
<div id="wb_Text13" style="position:absolute;left:355px;top:265px;width:85px;height:22px;z-index:20;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Province</span></div>
<div id="wb_Text14" style="position:absolute;left:625px;top:265px;width:85px;height:22px;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Zip Code</span></div>
<div id="wb_Checkbox1" style="position:absolute;left:16px;top:336px;width:25px;height:25px;z-index:22;">
<input type="checkbox" id="Checkbox1" name="Checkbox1" value="on" style="position:absolute;left:0;top:0;"><label for="Checkbox1"></label></div>
<div id="wb_Text15" style="position:absolute;left:53px;top:338px;width:239px;height:22px;z-index:23;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Same as current address</span></div>
<div id="wb_Text16" style="position:absolute;left:16px;top:371px;width:188px;height:22px;z-index:24;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Permanent Address</span></div>
<div id="wb_Text17" style="position:absolute;left:16px;top:403px;width:279px;height:37px;z-index:25;">
<span style="color:#000000;font-family:Arial;font-size:20px;">House No./Street/Subdivision<br></span></div>
<div id="wb_Text18" style="position:absolute;left:355px;top:403px;width:92px;height:22px;z-index:26;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Barangay</span></div>
<input type="text" id="housestreetsubdivision1_id" style="position:absolute;left:17px;top:426px;width:316px;height:30px;z-index:27;" name="house_street_subdivision1" value="" spellcheck="false">
<input type="text" id="barangay1_id" style="position:absolute;left:356px;top:426px;width:250px;height:30px;z-index:28;" name="barangay1" value="" spellcheck="false">
<div id="wb_Text19" style="position:absolute;left:17px;top:465px;width:158px;height:22px;z-index:29;">
<span style="color:#000000;font-family:Arial;font-size:20px;">City/Municipality</span></div>
<div id="wb_Text20" style="position:absolute;left:355px;top:465px;width:85px;height:22px;z-index:30;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Province</span></div>
<div id="wb_Text21" style="position:absolute;left:625px;top:463px;width:85px;height:22px;z-index:31;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Zip Code</span></div>
<div id="wb_Text22" style="position:absolute;left:16px;top:527px;width:190px;height:22px;z-index:32;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Contact Information</span></div>
<div id="wb_Text23" style="position:absolute;left:17px;top:548px;width:249px;height:22px;z-index:33;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Telephone/Mobile Number</span></div>
<div id="wb_Text24" style="position:absolute;left:355px;top:548px;width:137px;height:22px;z-index:34;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Email Address</span></div>
<input type="text" id="telephonemobilenumber" style="position:absolute;left:16px;top:571px;width:290px;height:25px;z-index:35;" name="telephone_mobile_number" value="" spellcheck="false">
<input type="text" id="emailaddress" style="position:absolute;left:356px;top:571px;width:290px;height:25px;z-index:36;" name="email_address" value="" spellcheck="false">
<div id="wb_Text25" style="position:absolute;left:687px;top:548px;width:161px;height:22px;z-index:37;">
<span style="color:#000000;font-family:Arial;font-size:20px;">Client ID Number</span></div>
<input type="text" id="clientidnumber" style="position:absolute;left:683px;top:571px;width:290px;height:25px;z-index:38;" name="client_id_number" value="" spellcheck="false">
<div id="wb_Checkbox2" style="position:absolute;left:16px;top:608px;width:25px;height:25px;z-index:39;">
<input type="checkbox" id="Checkbox2" name="Checkbox2" value="on" style="position:absolute;left:0;top:0;"><label for="Checkbox2"></label></div>
<div id="wb_Text26" style="position:absolute;left:56px;top:612px;width:896px;height:22px;z-index:40;">
<span style="color:#000000;font-family:Arial;font-size:20px;">I hereby certify that the information given and all statements made herein are true and correct.</span></div>
<div id="wb_Text27" style="position:absolute;left:1166px;top:5px;width:52px;height:15px;text-align:center;z-index:41;">
&nbsp;</div>
<select name="suffix" size="1" id="suffix_id" style="position:absolute;left:810px;top:69px;width:250px;height:35px;z-index:42;">
<option selected value="">Select</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Miss">Miss</option>
<option value="Ms">Ms</option>
<option value="Dr">Dr</option>
</select>
<select name="sex" size="1" id="sex_id" style="position:absolute;left:547px;top:132px;width:260px;height:40px;z-index:43;">
<option selected value="">Select</option>
<option value="F">Female</option>
<option value="M">Male</option>
</select>
<select name="zipcodes" size="1" id="zipcodes_id" style="position:absolute;left:627px;top:289px;width:260px;height:40px;z-index:44;">
<option selected value="">Select</option>
<option value="6033">6033</option>
<option value="6034">6034</option>
<option value="6035">6035</option>
<option value="6036">6036</option>
<option value="6037">6037</option>
<option>6038</option>
<option>6039</option>
<option>6040</option>
<option>6041</option>
<option>6042</option>
<option>6043</option>
<option>6044</option>
<option>6045</option>
<option>6046</option>
<option>6047</option>
<option>6048</option>
<option>6049</option>
<option>6050</option>
<option>6051</option>
<option>6052</option>
<option>6053</option>
<option>6054</option>
<option>6055</option>
<option>6056</option>
<option>6057</option>
<option>6058</option>
<option>6059</option>
<option>6060</option>
<option>6061</option>
<option>6062</option>
<option>6063</option>
<option>6064</option>
<option>6065</option>
<option>6066</option>
<option>6067</option>
<option>6068</option>
<option>6069</option>
<option>6070</option>
<option>6071</option>
<option>6072</option>
<option>6073</option>
<option>6074</option>
<option>6075</option>
<option>6076</option>
<option>6077</option>
<option>6078</option>
<option>6079</option>
<option>6080</option>
<option>6081</option>
<option>6082</option>
<option>6083</option>
<option>6084</option>
<option>6085</option>
<option>6086</option>
</select>
<select name="zipcodes1" size="1" id="zipcodes1_id" style="position:absolute;left:627px;top:487px;width:260px;height:40px;z-index:45;">
<option selected value="">Select</option>
<option value="6033">6033</option>
<option value="6034">6034</option>
<option value="6035">6035</option>
<option value="6036">6036</option>
<option value="6037">6037</option>
<option>6038</option>
<option>6039</option>
<option>6040</option>
<option>6041</option>
<option>6042</option>
<option>6043</option>
<option>6044</option>
<option>6045</option>
<option>6046</option>
<option>6047</option>
<option>6048</option>
<option>6049</option>
<option>6050</option>
<option>6051</option>
<option>6052</option>
<option>6053</option>
<option>6054</option>
<option>6055</option>
<option>6056</option>
<option>6057</option>
<option>6058</option>
<option>6059</option>
<option>6060</option>
<option>6061</option>
<option>6062</option>
<option>6063</option>
<option>6064</option>
<option>6065</option>
<option>6066</option>
<option>6067</option>
<option>6068</option>
<option>6069</option>
<option>6070</option>
<option>6071</option>
<option>6072</option>
<option>6073</option>
<option>6074</option>
<option>6075</option>
<option>6076</option>
<option>6077</option>
<option>6078</option>
<option>6079</option>
<option>6080</option>
<option>6081</option>
<option>6082</option>
<option>6083</option>
<option>6084</option>
<option>6085</option>
<option>6086</option>
</select>
<select name="city_municipality" size="1" id="citymunicipality_id" style="position:absolute;left:18px;top:289px;width:326px;height:40px;z-index:46;">
<option selected value="">Select</option>
<option value="ALCANTARA">ALCANTARA</option>
<option value="ALCOY">ALCOY</option>
<option value="ALEGRIA">ALEGRIA</option>
<option value="ALOGUINSAN">ALOGUINSAN</option>
<option value="ARGAO">ARGAO</option>
<option>ASTURIAS</option>
<option>BADIAN</option>
<option>BALAMBAN</option>
<option>BANTAYAN</option>
<option>BARILI</option>
<option>BOLJOON</option>
<option>BORBON</option>
<option>CARMEN</option>
<option>CATMON</option>
<option>COMPOSTELA</option>
<option>CONSOLACION</option>
<option>CORDOVA</option>
<option>DAANBANTAYAN</option>
<option>DALAGUETE</option>
<option>DUMANJUG</option>
<option>GINATILAN</option>
<option>LILOAN</option>
<option>MADRIDEJOS</option>
<option>MALABUYOC</option>
<option>MEDELLIN</option>
<option>MINGLANILLA</option>
<option>MOALBOAL</option>
<option>OSLOB</option>
<option>PILAR</option>
<option>PINAMUNGAJAN</option>
<option>PORO</option>
<option>RONDA</option>
<option>SAMBOAN</option>
<option>SAN FERNANDO</option>
<option>SAN FRANCISCO</option>
<option>SAN REMIGIO</option>
<option>SANTA FE</option>
<option>SANTANDER</option>
<option>SIBONGA</option>
<option>SOGOD</option>
<option>TABOGON</option>
<option>TABUELAN</option>
<option>TUBURAN</option>
<option>TUDELA</option>
<option>BOGO</option>
<option>CARCAR</option>
<option>DANAO</option>
<option>NAGA</option>
<option>TALISAY</option>
<option>TOLEDO</option>
<option>CEBU</option>
<option>LAPU-LAPU</option>
<option>MANDAUE</option>
</select>
<select name="city_municipality1" size="1" id="citymunicipality1_id" style="position:absolute;left:18px;top:487px;width:326px;height:40px;z-index:47;">
<option selected value="">Select</option>
<option value="ALCANTARA">ALCANTARA</option>
<option value="ALCOY">ALCOY</option>
<option value="ALEGRIA">ALEGRIA</option>
<option value="ALOGUINSAN">ALOGUINSAN</option>
<option value="ARGAO">ARGAO</option>
<option>ASTURIAS</option>
<option>BADIAN</option>
<option>BALAMBAN</option>
<option>BANTAYAN</option>
<option>BARILI</option>
<option>BOLJOON</option>
<option>BORBON</option>
<option>CARMEN</option>
<option>CATMON</option>
<option>COMPOSTELA</option>
<option>CONSOLACION</option>
<option>CORDOVA</option>
<option>DAANBANTAYAN</option>
<option>DALAGUETE</option>
<option>DUMANJUG</option>
<option>GINATILAN</option>
<option>LILOAN</option>
<option>MADRIDEJOS</option>
<option>MALABUYOC</option>
<option>MEDELLIN</option>
<option>MINGLANILLA</option>
<option>MOALBOAL</option>
<option>OSLOB</option>
<option>PILAR</option>
<option>PINAMUNGAJAN</option>
<option>PORO</option>
<option>RONDA</option>
<option>SAMBOAN</option>
<option>SAN FERNANDO</option>
<option>SAN FRANCISCO</option>
<option>SAN REMIGIO</option>
<option>SANTA FE</option>
<option>SANTANDER</option>
<option>SIBONGA</option>
<option>SOGOD</option>
<option>TABOGON</option>
<option>TABUELAN</option>
<option>TUBURAN</option>
<option>TUDELA</option>
<option>BOGO</option>
<option>CARCAR</option>
<option>DANAO</option>
<option>NAGA</option>
<option>TALISAY</option>
<option>TOLEDO</option>
<option>CEBU</option>
<option>LAPU-LAPU</option>
<option>MANDAUE</option>
</select>
<select name="province" size="1" id="province_id" style="position:absolute;left:357px;top:289px;width:260px;height:40px;z-index:48;">
<option selected value="">Select</option>
<option value="Cebu">Cebu</option>
</select>
<select name="province1" size="1" id="province1_id" style="position:absolute;left:357px;top:487px;width:260px;height:40px;z-index:49;">
<option selected value="">Select</option>
<option value="Cebu">Cebu</option>
</select>
<div id="wb_Text33" style="position:absolute;left:720px;top:156px;width:42px;height:15px;text-align:center;z-index:50;">
&nbsp;</div>
<hr id="Line1" style="position:absolute;left:16px;top:37px;width:1200px;z-index:51;">
<input type="submit" id="submit_id" onclick="ShowObjectWithEffect('wb_Shape1', 1, 'fade', 500);ShowObjectWithEffect('wb_Text28', 1, 'fade', 500);ShowObjectWithEffect('wb_Text29', 1, 'fade', 500);ShowObjectWithEffect('yes', 1, 'fade', 500);ShowObjectWithEffect('Button2', 1, 'fade', 500);return false;" name="submit" value="Submit" style="position:absolute;left:1112px;top:605px;width:96px;height:31px;z-index:52;">
<a id="Button1" href="./index.php" style="position:absolute;left:1004px;top:604px;width:96px;height:32px;z-index:53;">Cancel</a>
<div id="wb_Shape1" style="position:absolute;left:391px;top:157px;width:400px;height:300px;visibility:hidden;z-index:54;">
<img src="images/img0003.png" id="Shape1" alt="" width="400" height="300" style="width:400px;height:300px;"></div>
<div id="wb_Text28" style="position:absolute;left:467px;top:215px;width:248px;height:30px;visibility:hidden;text-align:center;z-index:55;">
<span style="color:#000000;font-family:Arial;font-size:27px;">Are you sure?</span></div>
<div id="wb_Text29" style="position:absolute;left:466px;top:284px;width:250px;height:54px;visibility:hidden;text-align:center;z-index:56;">
<span style="color:#000000;font-family:Arial;font-size:24px;">All the information you entered is correct?</span></div>
<input type="submit" id="Button2" onclick="ShowObjectWithEffect('wb_Shape1', 0, 'fade', 500);ShowObjectWithEffect('wb_Text28', 0, 'fade', 500);ShowObjectWithEffect('wb_Text29', 0, 'fade', 500);ShowObjectWithEffect('Button2', 0, 'fade', 500);ShowObjectWithEffect('yes', 0, 'fade', 500);return false;" name="" value="Cancel" style="position:absolute;left:627px;top:379px;width:100px;height:40px;visibility:hidden;z-index:57;">
<input type="submit" id="yes" name="Yes" value="Yes" style="position:absolute;left:456px;top:379px;width:100px;height:40px;visibility:hidden;z-index:58;">
</form>
</div>
<div id="wb_IconFont1" style="position:absolute;left:1237px;top:48px;width:40px;height:40px;text-align:center;z-index:61;">
<a href="./index.php"><div id="IconFont1"><i class="fa fa-times"></i></div></a></div>

</body>
</html>