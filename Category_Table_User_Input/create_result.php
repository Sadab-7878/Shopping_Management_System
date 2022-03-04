<html>
    <head>
    <title>An Online Book Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    </head>
    
    <body>



<?php

	$Book_Title = $_GET["Book_Title"];

	$Book_Category = $_GET["Book_Category"];
	
	$Author_Name = $_GET["Author_Name"];

	


   
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO Category VALUES (NULL,'$Book_Title', '$Book_Category', '$Author_Name' )" )
		or die(mysqli_error($connect));



	echo "<p style='max-width: 500px; margin :0 auto;'>Record inserted:<br> 
	<p style='max-width: 500px; margin :0 auto;'>Book_Title = $Book_Title <br>
	<p style='max-width: 500px; margin :0 auto;'> Book_Category = $Book_Category <br>
	<p style='max-width: 500px; margin :0 auto;'> Author_Name = $Author_Name ";



	echo "<p style='max-width: 500px; margin :0 auto;'><a href=read.php>READ all records</a>";

?>
</body>
</html>