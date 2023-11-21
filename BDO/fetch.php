<?php
$connect = mysqli_connect("localhost", "root", "", "bdo");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM bdo_info
	WHERE lastname LIKE '%".$search."%'
	OR firstname LIKE '%".$search."%' 
	OR middlename LIKE '%".$search."%' 
	OR suffix LIKE '%".$search."%' 
	OR placeofbirth LIKE '%".$search."%'
	OR dateofbirth LIKE '%".$search."%'
	OR sex LIKE '%".$search."%'
	OR house_street_subdivision LIKE '%".$search."%'
	OR barangay LIKE '%".$search."%'
	OR city_municipality LIKE '%".$search."%'
	OR province LIKE '%".$search."%'
	OR zipcodes LIKE '%".$search."%'
	OR telephone_mobile_number LIKE '%".$search."%'
	OR email_address LIKE '%".$search."%'
	OR client_id_number LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM bdo_info ORDER BY client_id_number";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
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
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["lastname"].'</td>
				<td>'.$row["firstname"].'</td>
				<td>'.$row["middlename"].'</td>
				<td>'.$row["suffix"].'</td>
				<td>'.$row["placeofbirth"].'</td>
				<td>'.$row["dateofbirth"].'</td>
				<td>'.$row["sex"].'</td>
				<td>'.$row["house_street_subdivision"].'</td>
				<td>'.$row["barangay"].'</td>
				<td>'.$row["city_municipality"].'</td>
				<td>'.$row["province"].'</td>
				<td>'.$row["zipcodes"].'</td>
				<td>'.$row["house_street_subdivision1"].'</td>
				<td>'.$row["barangay1"].'</td>
				<td>'.$row["city_municipality1"].'</td>
				<td>'.$row["province1"].'</td>
				<td>'.$row["zipcodes1"].'</td>
				<td>'.$row["telephone_mobile_number"].'</td>
				<td>'.$row["email_address"].'</td>
				<td>'.$row["client_id_number"].'</td>

			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>