<?php 
	session_start();
?>
<!-- SE CO Subjects Sem-3-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap Core CSS-->
	<link rel="stylesheet" type="text/css" href="../bootstrap.min.css">
</head>
<body>
	<a href="http://localhost/ExpPor/index.html" id="log" class="btn btn-primary btn-xl page-scroll" style="margin-left: 1150px">Logout</a>
	<div class="jumbotron text-center">
		<img src="../../students/profile/te/avatar.png" alt="Profile Pic" width="250" height="250" class="img-circle"></img>
				<h4>Welcome <?php echo $_SESSION['userName'];?></h4>
		<h4>Year:SE:CO</h4>
	</div>
	<div class="container">
		<div class="row">
			<!-- OOPM-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/oopm.png"  width="200" height="200" alt="OOPM">
  					<div class="card-block">
  						<h4 class="card-title">Object Oriented Programming</h4>
   						<p class="card-text">If you dont like Object Oriented Programming,You Dont have Class!!</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- Data Structure-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/ds.png"  width="200" height="200" alt="Data Structure">
  					<div class="card-block">
  						<h4 class="card-title">Data Structure</h4>
   						<p class="card-text">Explore World of MicroProcessors</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- ECCF-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/te/img/mp.png"  width="200" height="200" alt="Electronics Circuits">
  					<div class="card-block">
  						<h4 class="card-title">ECCF</h4>
   						<p class="card-text">Explore World of Electricity</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!--DLDA-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/dlda.png"  width="200" height="200" alt="Computer Networks">
  					<div class="card-block">
  						<h4 class="card-title">Digital Logic & Design</h4>
   						<p class="card-text">Learn Processes,Memory Management etc.</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
				
			

		</div><!-- Row End-->
	</div><!-- Container End-->
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>