<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_GET['subject'];?></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
</head>
<body>
	<div>
		<h3><center><?php echo $_GET['subject'];?></center></h3>
		<form name="uploadform" id="uploadform" method="post" enctype="multipart/form-data" action="uploadProcess.php?subject=<?php echo $_GET['subject'];?>">
		<input type="file" name="uploadExp" id="uploadExp">
		<input type="hidden" name="MAX_FILE_SIZE" value="32768">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
	</div>
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>