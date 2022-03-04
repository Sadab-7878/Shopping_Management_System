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


	$results = mysqli_query( $connect, "SELECT * FROM Book" )
		or die("Can not execute query");

	echo "<table class='ui celled table'style='max-width: 500px; margin :0 auto;'> \n";
	echo "<tr><thead><th>ISBN</th> <th>Category</th> <th>Book_Title</th> <th>Page_Count</th> <th>Delete</th> <th>Update</th></tr> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ISBN </td>";
		echo "<td> $Category </td>";
		echo "<td> $Book_Title </td>";
		echo "<td> $Page_Count</td>";
		echo "<td> <a href = 'delete.php?id=$ISBN'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$ISBN&f0=$Category&f1=$Book_Title&f2=$Page_Count'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</thead></table> \n";

	echo "<br><p style='max-width: 500px; margin :0 auto;'><a href=create_input.php><button  class='ui black button' >Create New Product</button></a>";
?>
</body>
</html>






