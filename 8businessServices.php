<html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<meta http-equiv="content-type" content="text/html"; charset=utf-8>
<title>Бизнес и услуги</title>
<body>
	<?php session_start(); include('header1.php'); ?>
<h1 class='categoryName'>Бизнес и услуги</h1>
<?php
include("connection.php");
	$query = "SELECT * FROM good WHERE Torf='true' AND Category='8' ORDER BY DateOfAdd DESC";
	include('searchBox.php');
	include('footer.php');
?>
</body>
</html>