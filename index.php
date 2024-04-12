<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Git Introducation</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.3.3-dist/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar expand-lg fixed-top" style="background-color: #e3f2fd;">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      	<img src="img/logo.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
	      Encodevilla
	    </a>
	    <?php
	    	include 'hitesh/offcanvas.php';
	    ?>
	  </div>
	</nav>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-sm-12 col-lg-4 col-md-6">
				<div class="card  mx-auto mb-3" style="width: 18rem;">
				  <img src="img/apurv.jpeg" class="card-img-top" alt="..." style="height: 300px;">
				  <div class="card-body">
				    <h5 class="card-title">Apurv</h5>
				    <p class="card-text">
				    	Apurv is a student and doing BE in Gujarat power 
				    	Computer Eng : 4th Sem
				    	City : Mahesana
				    	Mo : 7874182201
				    </p>
				    <div class="text-center">
				    	<a href="apurv/index.php" class="btn btn-primary">Go to My Webite</a>
				    </div>
				  </div>
				</div>	
			</div>
			<div class="col-sm-12 col-lg-4 col-md-6">
				<div class="card mx-auto mb-3" style="width: 18rem;">
				  <img src="img/hitesh.jpeg" class="card-img-top" alt="..." style="height: 300px;">
				  <div class="card-body">
				    <h5 class="card-title">Hitesh</h5>
				    <p class="card-text">
				    	Hitesh is a student and doing Diploma in Ganpat University 
				    	Computer Eng : 4th Sem
				    	City : Mahesana
				    	Mo : 9054966947
				    </p>
				    <div class="text-center">
				    	<a href="hitesh/index.php" class="btn btn-primary">Go to My Webite</a>
				    </div>
				  </div>
				</div>	
			</div>
			<div class="col-sm-12 col-lg-4 col-md-6">
				<div class="card mx-auto mb-3" style="width: 18rem;">
				  <div class="card-body">
				  	<div style="text-align: center; margin: 165px 0px; font-size: 100px; ">
				  		<a href="model.php" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;">+</a>
				  	</div>
				  </div>
				</div>	
			</div>	
		</div>
	</div>
	<?php
		include 'model.php';
	?>
</body>
</html>