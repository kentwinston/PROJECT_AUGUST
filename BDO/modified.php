<?php
require_once('send.php');

function checkEmpty($data) {
    return empty(trim($data));
}

if (isset($_POST['submit'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $suffix  = $_POST['suffix'];
    $placeofbirth = $_POST['placeofbirth'];
    $dateofbirth = $_POST['dateofbirth'];
    $sex = $_POST['sex'];
    $house_street_subdivision = $_POST['house_street_subdivision'];
    $barangay = $_POST['barangay'];
    $city_municipality = $_POST['city_municipality'];
    $province = $_POST['province'];
    $zipcodes = $_POST['zipcodes'];
    $house_street_subdivision1 = $_POST['house_street_subdivision1'];
    $barangay1 = $_POST['barangay1'];
    $city_municipality1 = $_POST['city_municipality1'];
    $province1 = $_POST['province1'];
    $zipcodes1 = $_POST['zipcodes1'];
    $telephone_mobile_number = $_POST['telephone_mobile_number'];
    $email_address = $_POST['email_address'];
    $client_id_number = $_POST['client_id_number'];


    // Check for empty fields
    if (checkEmpty($lastname) || checkEmpty($firstname) || /* Add other fields here */checkEmpty($middle) || checkEmpty($suffix) || checkEmpty($placeofbirth) || checkEmpty($dateofbirth) || checkEmpty($sex)) {
        echo "<script>alert('Please fill in all required fields');</script>";
    } else {
        $sql = "INSERT INTO bdo_info VALUES('$lastname', '$firstname', '$middlename', '$suffix', '$placeofbirth', '$dateofbirth', '$sex', '$house_street_subdivision', '$barangay', '$city_municipality', '$province', '$zipcodes', '$house_street_subdivision1', '$barangay1', '$city_municipality1', '$province1', '$zipcodes1', '$telephone_mobile_number', '$email_address', '$client_id_number')";
        mysqli_query($conn, $sql);
        echo "<script>alert('Data Inserted');</script>";
    }
}
?>
