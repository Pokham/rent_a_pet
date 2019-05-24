<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rentapetv3'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM Animals';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Animals Table</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>AnimalID</th>
				<th>Animal Type</th>
				<th>Animal Name</th>
				<th>Animal Breed</th>
				<th>Animal Age</th>
				<th>Animal Spay or Neutered</th>
				<th>Animal Adopted</th>
				<th>Animal Rented</th>
				<th>Animal Retired</th>
				<th>Animal Picture</th>
				<th>MedicalID</th>
				<th>Medical InsuranceNo</th>
				<th>GroomerID</th>
				<th>CustomerID</th>
				<th>OrganisationID</th>
				<th>BranchID</th>
			
			</tr>
		</thead>
		<tbody>
		<?php

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
			
					<td>'.$row['animalID'].'</td>
					<td>'.$row['animal_type'].'</td>
					<td>'.$row['animal_name'].'</td>
					<td>'.$row['animal_breed'].'</td>
					<td>'.$row['animal_age'].'</td>
					<td>'.$row['animal_spayORneutered'].'</td>
					<td>'.$row['animal_adopt'].'</td>
					<td>'.$row['animal_rent'].'</td>
					<td>'.$row['animal_retire'].'</td>
					<td>'.$row['animal_picture'].'</td>
					<td>'.$row['medicalID'].'</td>
					<td>'.$row['medical_insuranceNo'].'</td>
					<td>'.$row['groomerID'].'</td>
					<td>'.$row['customerID'].'</td>
					<td>'.$row['organizationID'].'</td>
					<td>'.$row['branchID'].'</td>
				
				</tr>';

		}?>
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
</body>
</html>