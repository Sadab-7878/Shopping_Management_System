<html>
    <head>
    <title>An Online Book Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    </head>
    
    <body>



<?php

	$A_ID = $_GET["A_ID"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE Category SET Book_Title='$f0', Book_Category='$f1', Author_Name='$f2' WHERE ISBN = $A_ID";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p style='max-width: 500px; margin :0 auto;'>Record updated:<br> Category = $f0 <br> Book_Title = $f1 <br> Page_Count = $f2";



	echo "<p style='max-width: 500px; margin :0 auto;'><a href=read.php>READ all records</a>";

?>
</body>
</html>