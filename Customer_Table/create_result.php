<?php

	$Name = $_GET["Name"];

	$Email = $_GET["Email"];
	
	$Address = $_GET["Address"];

	$Phone = $_GET["Phone"];
	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Customer VALUES (NULL,'$Name', '$Email', '$Address','$Phone' )" )
		or die("Can not execute query");



	echo "Record inserted:<br> Name = $Name <br> Email = $Email <br> Address = $Address <br> Phone = $Phone ";



	echo "<p><a href=read.php>READ all records</a>";

?>
