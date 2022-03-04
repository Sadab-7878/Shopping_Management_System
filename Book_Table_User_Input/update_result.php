<?php

	$A_ID = $_GET["A_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Book SET Category='$f0', Book_Title='$f1',Page_Count='$f2' WHERE ISBN = $A_ID";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Category = $f0 <br> Book_Title = $f1 <br> Page_Count = $f2";



	echo "<p><a href=read.php>READ all records</a>";

?>
