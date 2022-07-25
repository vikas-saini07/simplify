<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/tokencreate_style.css">
</head>
<body>

<form class="form" action="createtokenusingmodal_post.php" method="post">
<ul class="form-style">
<li><label>Public Key<span class="required">*</span></label><input type="text" name="pubkey" value=""></li>
<li><label>Private Key<span class="required">*</span></label><input type="text" name="pvtkey" value=""></li>
<li><label>Full Name <span class="required">*</span></label><input type="text" name="name" value=""></li>
<li><label>Card Number <span class="required">*</span></label><input type="number" name="cardnum" value="5555555555554444"></li>
<li><label>Expiry Month <span class="required">*</span></label><input type="number" name="expmonth" value=01></li>
<li><label>Expiry Year <span class="required">*</span></label><input type="number" name="expyear" value=39></li>
<li><label>CVC <span class="required">*</span></label><input type="number" name="cardcvc" value=100></li>
<li><label>Address City <span class="required">*</span></label><input type="text" name="addcity" value="Brisbane"></li>
<li><label>Address State <span class="required">*</span></label>
<select name="addstate">
  <option value="Select"></option>
  <option value="QLD">QLD</option>
  <option value="NSW">NSW</option>
  <option value="WA">WA</option>
  <option value="VIC">VIC</option>
  <option value="TAS">TAS</option>
  <option value="SA">SA</option>
</select></li>
<input type="submit">
</ul>
</form>

<form class="form" action="simplify.php" method="post">
<div class="form-style">
<label>Simplify<span class="simplify"></span>
<select name="method">
  <option value="Select"></option>
  <option value="createtokenusingmodal">Create Token using Modal</option>
  <option value="createtokenusingembed">Create Token using Embed</option>
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
