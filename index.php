o <?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head> 
	<meta charset="utf-8">
	<title> Projet marathon</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" type="text/css" href="css/sheet.css">
	<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>

	<h1>web marathon</h1>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<div class="container">
    <button type="button" class="xs-buttons pull-left btn btn-clear" data-toggle="collapse" data-target="#nav-right">
	<img id="th" src="images/th.jpg" />
	
	<style>
	  #th {width : 80px;}
	</style>
    
    <a class="navbar-brand" href="#">web marathon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive"
      <style>
        #navbarResponsive{
          margin-left : 20%;
        }
      </style>
     
		
		
		<?php if (!isset($_SESSION['autoriser'])) { ?>
					<ul class="navbar-nav ml-auto">	
						<li class="nav-item active">
						<a class="nav-link" href="visualition.php">visualition d'image</a>
						</li>
					
			
					</ul>
		
		<?php } else { ?>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
						<a class="nav-link" href="index.html">Home</a>
						</li>
					
						<li class="nav-item">
						<a class="nav-link" href="nouvelle.html">About</a>
						</li>
					
						<li class="nav-item">
						<a class="nav-link" href="visualition.html">visualition d'image</a>
						</li>
					
						<li class="nav-item">
						<a class="nav-link" href="model.html">Model</a>
						</li>

					</ul>	
    	
			 <?php } ?>
			 
    </div>
  </div>
</nav>


<div class="content">
<p>
marathon du  <?php$_SESSION['autoriser']?>  web est une competition entre les etudiants miashs.
</p>
</div>


</body>


</html>