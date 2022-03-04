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



	mysqli_query( $connect, "DELETE FROM Category WHERE ISBN=$A_ID" )

		or die("Can not execute query");




	echo "<p style='max-width: 500px; margin :0 auto;'>Record deleted<br>";



	echo "<p style='max-width: 500px; margin :0 auto;'><a href=read.php>READ all records</a>";

?>
</body>
</html>