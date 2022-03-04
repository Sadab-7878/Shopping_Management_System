<html>
<head>
<title>An Online Book Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>

<body>

<?php

	$Author_Name = $_GET["Author_Name"];

	$Email = $_GET["Email"];
	
	$Phone = $_GET["Phone"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Author VALUES (NULL,'$Author_Name', '$Email', '$Phone' )" )
		or die("Can not execute query");



	echo "<h1><p style='max-width: 500px; margin :0 auto;'>Record inserted:</h1>
	<p style='max-width: 500px; margin :0 auto;'>Author_Name = $Author_Name <br> 

	<p style='max-width: 500px; margin :0 auto;'> Email = $Email <br> 

    <p style='max-width: 500px; margin :0 auto;'>Phone = $Phone ";



	echo "<p style='max-width: 500px; margin :0 auto;'>
	<a href=read.php>READ all records</a>";

?>
</body>
</html>