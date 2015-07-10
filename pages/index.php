<?php 
	require '../database/connect.php';
	session_name();
	session_start();
?>
<html>
	<head>
		<title>eLojA</title>
		<link rel="stylesheet" type="text/css" href="..\templates\sky.css">
	</head>

	<body>
		<?php require 'login.php'; ?>
	</body>
</html>