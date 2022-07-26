<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/tokencreate_style.css">
</head>
<body>

<form class="form" action="createtokenusingmodal_post.php" method="post">
<ul class="form-style">
<li><label>Public Key<span class="required">*</span></label><input type="text" name="pubkey" value=""></li>
<li><label>Private Key<span class="required">*</span></label><input type="text" name="pvtkey" value=""></li>
<li><label>Reference <span class="required">*</span></label><input type="text" name="ref" value=""></li>
<li><label>Currency <span class="required">*</span></label><input type="text" name="currency" value="AUD"></li>
<li><label>Name<span class="required">*</span></label><input type="text" name="name" value=""></li>
<li><label>Description<span class="required">*</span></label><input type="text" name="desc" value=""></li>
<li><label>Email <span class="required">*</span></label><input type="email" name="email" value="test@testtest0077.com"></li>
<li><label>Amount<span class="required">*</span></label><input type="number" name="amount" value=""></li>
<input type="submit">
</ul>
</form>

<form class="form" action="../simplify.php" method="post">
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

<form class="form" action="index.php" method="post">
<ul class="form-style">
<li><input type="submit" name="back" value="Go Back"></li>
</ul>
</form>

</body>
</html>
