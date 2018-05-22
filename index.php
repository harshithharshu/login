<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<center>
<body background="https://i.ytimg.com/vi/qBnmy7d2JSc/maxresdefault.jpg">
<table border="0" cellspacing = "10">
<div class="form">
<th><p>Welcome <?php echo $_SESSION['username']; ?>!</p></th>
<th><a href="logout.php">&nbsp;&nbsp;&nbsp;Logout</a></th>
</table>
<br>
<table border="2">
<form name="myfrom" action="">
<input type="file" name="f1" id="f1"><br>
<input type="submit" value="submit" name="submit">
</form>

</body>
</html>
