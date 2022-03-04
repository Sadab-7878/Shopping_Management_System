<?php

	$C_ID = $_GET["C_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

    $f3 = $_GET["f3"];
	
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Customer SET Name='$f0',Email='$f1',Address='$f2',Phone='$f3' WHERE C_ID = $C_ID";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $f0 <br> Email = $f1 <br> Address = $f2 <br> Phone=$f3";



	echo "<p><a href=read.php>READ all records</a>";

?>
