<html>
<head>
	<title>View Records</title>
</head>
<body>
<?php
/* 
	VIEW.PHP
	Displays all data from 'players' table
*/
        // connect to the database
	include('connect-db.php');

	// get results from database
	$result = mysql_query("SELECT * FROM testimonials ORDER BY id") 
		or die(mysql_error());  
		
	// display data in table
	echo "<p><b>View All</b>";
	
	echo "<table border='1' cellpadding='10'>";
	echo "<tr> <th>ID</th> <th>Company Name</th> <th>Content</th> <th>Individuals Name</th><th></th><th></th></tr>";

	// loop through results of database query, displaying them in the table
	while($row = mysql_fetch_array( $result )) {
		
		// echo out the contents of each row into a table
		echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['companyname'] . '</td>';
		echo '<td>' . $row['testimonialcontent'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
		echo '<td><a href="records.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>"; 
	} 

	// close table>
	echo "</table>";
?>
<p><a href="records.php">Add a new record</a></p>

</body>
</html>	


