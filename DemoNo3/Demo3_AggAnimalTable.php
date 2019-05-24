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

print "<h2>MySQL: AGGREGATE Sum Price by Type</h2>";

// $query = "SELECT Type, SUM(price) FROM product_sale GROUP BY type";
$query = "SELECT AVG(animal_age) FROM Animals";


$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)){

  echo "Average: ". number_format($row['AVG(animal_age)']);
}

mysqli_close($conn);
?>

// // <?php
// // Make a MySQL Connection
// $con=mysql_connect("localhost","root","");
// if (!$con)
//   {   die('Could not connect: ' . mysql_error()); }
// mysql_select_db("mysql");
// print "<h2>MySQL: Sum Price by Type</h2>";
// $query = "SELECT Type, SUM(price) FROM product_sale GROUP BY type";        
// $result = mysql_query($query);

// // Print out result
// while($row = mysql_fetch_array($result)){
//       echo "Total ". $row['Type']. " = ". $row['SUM(price)'];
//       echo "<br />";
// }

// $query = "SELECT  SUM(price) FROM product_sale "; 
 

// print "<h2>MySQL: Total Price</h2>";    

// $result = mysql_query($query);


// // Print out result

// while($row = mysql_fetch_array($result)){

//       echo "Total= ". $row['SUM(price)'];

//       echo "<br />";

// }

// ?>