
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


	$results = mysqli_query( $connect, "SELECT * FROM Customer" )
		or die("Can not execute query");

	echo "<table class='ui celled table'style='max-width: 500px; margin :0 auto;'> \n";
	echo "<tr><thead><th>C_ID</th> <th>Name</th> <th>Email</th> <th>Address</th>  <th>Phone</th> <th>Delete</th> <th>Update</th> </tr>\n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $C_ID </td>";
		echo "<td> $Name </td>";
		echo "<td> $Email </td>";
		echo "<td> $Address</td>";
		echo "<td> $Phone </td>";
		echo "<td> <a href = 'delete.php?id=$C_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$C_ID&f0=$Name&f1=$Email&f2=$Address&f3=$Phone'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</thead></table> \n";

	echo "<br ><p style='max-width: 500px; margin :0 auto;'><a href=create_input.php><button  class='ui black button' >Create New Product</button></a>";
?>



</body>
</html>





