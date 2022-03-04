<html>
<head>
<title>An Online Book Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>

<body>




<?php

	$Category = $_GET["Category"];

	$Book_Title = $_GET["Book_Title"];
	
	$Page_Count = $_GET["Page_Count"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO Book VALUES (NULL,'$Category', '$Book_Title', $Page_Count )" )
		or die("Can not execute query");



	echo "<h1><p style='max-width: 500px; margin :0 auto;'>Record inserted:<br></h1>
	<p style='max-width: 500px; margin :0 auto;'> Category = $Category <br> 
	<p style='max-width: 500px; margin :0 auto;'> Book_Title = $Book_Title <br> 
	<p style='max-width: 500px; margin :0 auto;'>Page_Count = $Page_Count ";



	echo "<p style='max-width: 500px; margin :0 auto;'><a href=read.php>READ all records</a>";

?>
</body>
</html>