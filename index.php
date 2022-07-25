<html>
<head>
<link rel="stylesheet" type="text/css" href="css/homestyle.css">
</head>
<body>


<div class="title">Please do your selection</div>


<form class="form" action="simplify.php" method="post">
<div class="form-style">
<label>Simplify<span class="simplify"></span>
<select name="method">
  <option value="Select"></option>
  <option value="createtokenusingmodal">Create Token and Payment using Modal</option>
  <option value="createtokenusingembed">Create Token and Payment using Embed</option>
  <option value="createtokenusingdirect">Create Token and Payment using Direct API</option>
  </select>
<input type="submit"></label>
</div></form>
</body>
</html>
