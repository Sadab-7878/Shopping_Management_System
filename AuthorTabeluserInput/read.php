<html>
<head>
<title>An Online Book Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>

<body>

<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM Author" )
		or die("Can not execute query");

	echo "<table class='ui celled table'style='max-width: 500px; margin :0 auto;'> \n";
	echo "<tr><thead><th>A_ID</th> <th>Author_Name</th> <th>Email</th> <th>Phone</th> <th>Delete</th> <th>Update</th> </tr>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $A_ID </td>";
		echo "<td> $Author_Name </td>";
		echo "<td> $Email </td>";
		echo "<td> $Phone</td>";
		echo "<td> <a href = 'delete.php?id=$A_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$A_ID&f0=$Author_Name&f1=$Email&f2=$Phone'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</thead></table> \n";

	echo "<p style='max-width: 500px; margin :0 700;'><br><a href=create_input.php><button  class='ui black button' >Create New Product</button></a>";
?>

</body>
</head>
