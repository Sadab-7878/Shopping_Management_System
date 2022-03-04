<html>
    <head>
    <title>An Online Book Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    </head>
    
    <body>



<?php

	$A_ID = $_GET["id"];

	$f0 = $_GET["f0"];

	$f1 = $_GET["f1"];

	$f2 = $_GET["f2"];

?>



<h1><p style='max-width: 500px; margin :0 auto;'>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=A_ID value='<?php echo $A_ID; ?>'> <br>



	<p style='max-width: 500px; margin :0 auto;'>Book_Title: <input type=text name=f0 value='<?php echo $f0; ?>'>

	<p>

	<p style='max-width: 500px; margin :0 auto;'>Book_Category: <input type=text name=f1 value='<?php echo $f1; ?>'>

	<p>
	
	<p style='max-width: 500px; margin :0 auto;'>Author_Name: <input type=text name=f2 value='<?php echo $f2; ?>'>

	<p>


	<p style='max-width: 500px; margin :0 auto;'><input type=submit value=Update>

</form>
</body>
</html>