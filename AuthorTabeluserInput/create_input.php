<html>
<head>
<title>An Online Book Store</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

</head>

<body>
<h1><p style='max-width: 500px; margin :0 auto;'>Create Record</h1>
<form class="ui form" style ="max-width: 500px;
 margin : 0 auto;"action=create_result.php>
  <div class="field">
    <label>Author Name</label>
   <input type=text name="Author_Name" placeholder="Author Name">
  </div>
  <div class="field">
    <label>Email</label>
    <input type=text name="Email" placeholder="Email Address">
  </div>
  <div class="field">
    <label>Phone</label>
    <input type=text name="Phone" placeholder="Phone Number">
  </div>
 
  <button class="ui button" type="submit">ADD NEW PRODUCT</button>
</form>


</body>
</html>