<html>
<head>
<title>An Online Book Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>

<body>


<?php

	$A_ID = $_GET["id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM Author WHERE A_ID=$A_ID" )

		or die("Can not execute query");




	echo "Record deleted<br>";



	echo "<a href=read.php>READ all records</a>";

?>
</body>
</html>