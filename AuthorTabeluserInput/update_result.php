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



	$query 	= "UPDATE Author SET Author_Name='$f0', Email='$f1',Phone='$f2' WHERE A_ID = $A_ID";

	//echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p><p style='max-width: 500px; margin :0 auto;'><b>Record updated:</b><br> name = $f0 <br>
	<p style='max-width: 500px; margin :0 auto;'>email = $f1 <br> 
	<p style='max-width: 500px; margin :0 auto;'>phone = $f2";



	echo "<p><a href=read.php><p style='max-width: 500px; margin :0 auto;'>READ all records</a>";

?>
</body>
</html>