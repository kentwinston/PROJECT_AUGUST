<?php 
include_once('send.php'); 
$query="select * from bdo_info"; 
$result=mysqli_query($conn, $query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>CLIENTS LIST</h2></th> 
		</tr> 
			  <th> Lastname </th> 
			  <th> Firstname </th> 
			  <th> Middlename </th> 
			  <th> Suffix </th>
              <th> Place of Birth </th>
              <th> Date of Birth </th>
              <th> Sex </th>
              <th> House No./Street/Subdivision </th>
              <th> Barangay </th>
              <th> City/Municipality </th>
              <th> Province </th>
              <th> Zip Code </th>
              <th> House No./Street/Subdivision </th>
              <th> Barangay </th>
              <th> City/Municipality </th>
              <th> Province </th>
              <th> Zip Code </th>
              <th> Telephone/Mobile Number </th>
              <th> Email Address </th>
              <th> Client ID Number </th>
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['lastname']; ?></td> 
		<td><?php echo $rows['firstname']; ?></td> 
		<td><?php echo $rows['middlename']; ?></td> 
		<td><?php echo $rows['suffix']; ?></td>
        <td><?php echo $rows['placeofbirth']; ?></td> 
        <td><?php echo $rows['dateofbirth']; ?></td> 
        <td><?php echo $rows['sex']; ?></td> 
        <td><?php echo $rows['house_street_subdivision']; ?></td>  
        <td><?php echo $rows['barangay']; ?></td>
        <td><?php echo $rows['city_municipality']; ?></td>
        <td><?php echo $rows['province']; ?></td>
        <td><?php echo $rows['zipcodes']; ?></td>
        <td><?php echo $rows['house_street_subdivision1']; ?></td>  
        <td><?php echo $rows['barangay1']; ?></td>
        <td><?php echo $rows['city_municipality1']; ?></td>
        <td><?php echo $rows['province1']; ?></td>
        <td><?php echo $rows['zipcodes1']; ?></td>
        <td><?php echo $rows['telephone_mobile_number']; ?></td>
        <td><?php echo $rows['email_address']; ?></td>
        <td><?php echo $rows['client_id_number']; ?></td>

		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>