<?php
include "send.php";

if(isset($_POST["userid"])) {
    $userid = $_POST["userid"];
    
    // Prevent SQL injection using prepared statements char oy
    $sql = "SELECT * FROM bdo_info WHERE client_id_number=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $userid);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
?>
            <table id="meta_table">
                <tr>
                    <td>
                        <p>Name:</p>
                        <p>Place of Birth:</p>
                        <p>Date of Birth:</p>
                        <p>Sex:</p>
                        <p>Current Address:</p>
                        <p>Permanent Address:</p>
                        <p>Telephone/Mobile Number:</p>
                        <p>Email Address:</p>
                        <p>Client ID Number:</p>
                    </td>
                    <td id="text-to-copy">
                        <p><?php echo htmlspecialchars($row['suffix']." ".$row['firstname']." ".$row['middlename']." ".$row['lastname']); ?></p>
                        <p><?php echo htmlspecialchars($row['placeofbirth']); ?></p>
                        <p><?php echo htmlspecialchars($row['dateofbirth']); ?></p>
                        <p><?php echo htmlspecialchars($row['sex']); ?></p>
                        <p><?php echo htmlspecialchars($row['house_street_subdivision'].", ".$row['barangay'].", ".$row['city_municipality'].", ".$row['province'].", ".$row['zipcodes']); ?></p>
                        <p><?php echo htmlspecialchars($row['house_street_subdivision1'].", ".$row['barangay1'].", ".$row['city_municipality1'].", ".$row['province1'].", ".$row['zipcodes1']); ?></p>
                        <p><?php echo htmlspecialchars($row['telephone_mobile_number']); ?></p>
                        <p><?php echo htmlspecialchars($row['email_address']); ?></p>
                        <p><?php echo htmlspecialchars($row['client_id_number']); ?></p>
                    </td>
                </tr>
            </table>
<?php
        }
    } else {
        echo "Error executing the query: " . mysqli_error($conn);
    }
} else {
    echo "No userid provided.";
}
?>
