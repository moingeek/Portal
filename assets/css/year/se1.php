<?php 
	session_start();
?>
<!-- SE CO Subjects Sem-4-->
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
			<!-- CG-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/oopm.png"  width="200" height="200" alt="CG">
  					<div class="card-block">
  						<h4 class="card-title">Computer Graphics</h4>
   						<p class="card-text">Fill Your Screen with Colors!!</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- DBMS-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/ds.png"  width="200" height="200" alt="DBMS">
  					<div class="card-block">
  						<h4 class="card-title">Database Systems</h4>
   						<p class="card-text">Let's Learn The Backend</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!-- AOA-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/te/img/mp.png"  width="200" height="200" alt="AOA">
  					<div class="card-block">
  						<h4 class="card-title">Analaysis of Algorithm</h4>
   						<p class="card-text">Want to control the flow of your Program</p>
  						<a href="#" class="btn btn-primary" target="_blank">Lets Upload Experiments</a>
					</div>
				</div>
			</div>
			<!--COA-->
			<div class="col-lg-3">			
				<div class="card" style="width: 20rem;">
 					<img class="card-img-top" src="../../students/subjects/se/img/dlda.png"  width="200" height="200" alt="COA">
  					<div class="card-block">
  						<h4 class="card-title">Computer Organization</h4>
   						<p class="card-text">Learn Processors,Memory Management etc.</p>
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