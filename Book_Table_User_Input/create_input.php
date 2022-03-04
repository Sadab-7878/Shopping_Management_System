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
    <label>Category</label>
   <input type=text name="Category" placeholder="Book Category">
  </div>
  <div class="field">
    <label>Book_Title</label>
    <input type=text name="Book_Title" placeholder="Book Title">
  </div>
  <div class="field">
    <label>Page Count</label>
    <input type=text name="Page_Count" placeholder="No of Pages">
  </div>
 
  <button class="ui button" type="submit">ADD NEW PRODUCT</button>
</form>

</body>
</html>