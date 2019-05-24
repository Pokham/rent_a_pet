

<html>
<head>
	<title>Demo3 Join Query on Tables</title>
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
			/*margin: 25px auto 0;*/
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			padding: 0;
			margin: 0;
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
			text-align: left;
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
	<h1>Join Query - List of branches issued invoice from supplier</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>BranchID</th>
				<th>Branch Address</th>
				<th>Supplier InvNo</th>
			</tr>
		</thead>
		<tbody>
			<!--<tr><td>-->
        <?php
            $db_host = 'localhost'; // Server Name
            $db_user = 'root'; // Username
            $db_pass = ''; // Password
            $db_name = 'rentapetv3'; // Database Name
            
            // create connection
            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            
            // check connection
            if (!$conn) {
            	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
            }

        
            $query = "SELECT Branch.branchID, Branch.branch_address, Supplies.supply_inv_no 
            			FROM Supplies 
            			INNER JOIN Branch ON Branch.branchID = Supplies.branchID";
            $result = mysqli_query($conn,$query);
            // $formatted = (substr($result,0,3)) .substr($result,3,3)."-".substr($result,6);
        
            while($row = mysqli_fetch_array($result))
            {
            	echo '<tr>
            			<td>'. $row['branchID'].'</td>
            			<td>'. $row['branch_address']. '</td>
            			<td>'. $row['supply_inv_no']. '</td>';
            }
        
            mysqli_close($conn);
            ?>
		<!--</td></tr>-->
		</tbody>
		
		<tfoot>
		    
		</tfoot>
	</table>
</body>
</html>
		    