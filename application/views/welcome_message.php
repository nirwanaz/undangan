<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style type="text/css">
		section {
			margin-top: 50px;
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">iniundanganmu</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Product</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Article
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<section class="section-banner">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="text-banner" style="padding-top: 220px;">
							<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Etiam vel libero sit amet metus semper tristique in ut ipsum.
							</p>
							<a href="#" class="btn btn-info">Read More</a>
						</div>
					</div>
					<div class="col-md">
						<img 
							src="https://cdn.pixabay.com/photo/2022/01/02/22/06/couple-6911271_960_720.png" 
							alt="img-couple"
							class="img-fluid" />
					</div>
				</div>
			</div>
		</section>
		<section class="section-product">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<h1 style="text-transform: capitalize;" class="text-center">contoh template undangan pernikahan online</h1>
						<div class="row">
							<?php foreach(range(0,5) as $number) { ?>
							<div class="col-md">
								<div class="card">
									<img 
										src="https://cdn.pixabay.com/photo/2022/01/02/22/06/couple-6911271_960_720.png" 
										alt="card-img"
										class="card-img-top" >
									
									<div class="card-body">
										<h5 class="card-title"><?php echo 'Template'.$number ?></h5>
										<a href="#" class="btn btn-primary w-100">See</a>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-features">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<h1 style="text-transform: capitalize;" class="text-center">fitur undangan pernikahan online</h1>
						<div class="row">
							<?php foreach(range(0,5) as $number) {?>
							<div class="col-md-4">
								<div class="card my-2">
									<img 
										src="https://cdn-icons-png.flaticon.com/512/498/498919.png" 
										alt="card-img-features"
										class="card-img-top">
									<div class="card-body">
										<h5 class="card-title"><?php echo 'Fetaure'.$number ?></h5>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel libero sit amet metus semper tristique in ut ipsum.</p>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

</body>
</html>