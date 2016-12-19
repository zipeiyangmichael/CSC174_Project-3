<?php
	// 1. Create a database connection
    include "db-info.php";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);










	// 2. Perform database query
	$query  = "SELECT * FROM Customers";



	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Phonebook</title>
</head>
<body>

	<h1>Customer Phonebook</h1>

<table border="1">
    <tr>
    <th>Id</th>
    <th>Name</th> 
    <th>Email</th> 
    <th>Phone Number</th>
    <th>Message</th>
    </tr>


<?php
	// 3. Use returned data (if any)
	while($pages = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["id"]; ?></td> 
			<td><?php echo $pages["name"]; ?></td> 
			<td><?php echo $pages["email"]; ?></td> 
			<td><?php echo $pages["phone"]; ?></td>
			<td><?php echo $pages["message"]; ?></td>

		</tr>

<?php } ?>

	</table>

	<br>
	<a href=".">Back to the Index</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>