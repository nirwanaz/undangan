<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<style type="text/css">
		section {
			margin-top: 50px;
		}
		.text-banner {
			padding-top: 220px;
		}
		@media only screen and (min-width: 876px), (max-width: 976px){
			.text-banner {
				padding-top: 120px;
			}
		}
		@media only screen and (max-width: 370px) {
			.text-banner {
				padding-top: 0;
			}
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">iniundanganmu</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Fitur</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown-menu" aria-expanded="false">
							Tema
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Action</a></li>
							<li><a class="dropdown-item" href="#">Another action</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Kontak</a>
					</li>
				</ul>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Cari</button>
				</form>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<section class="section-banner">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="text-banner">
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
						<div class="d-flex" style="overflow-x: scroll;">
							<?php foreach(range(1,5) as $number) { ?>
							<div class="col-md-3 col-lg-2">
								<div class="card m-2">
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
							<div class="col-md-3 col-lg-2">
								<div class="card m-2">
									<img 
										src="https://cdn.pixabay.com/photo/2015/11/03/08/56/question-mark-1019820_960_720.jpg" 
										alt="card-img"
										class="card-img-top" >
									
									<div class="card-body">
										<h5 class="card-title">custom</h5>
										<a href="#" class="btn btn-primary w-100">See</a>
									</div>
								</div>
							</div>
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
							<?php foreach(['countdown', 'guest-list', 'map', 'music', 'photo-album', 'schedule', 'video-player'] as $feature) {?>
							<div class="col-sm-6 col-lg-3">
								<div class="card my-2">
									<img 
										src="<?php echo './assets/icons/feature/'.$feature.'.png' ?>" 
										alt="card-img-features"
										class="card-img-top p-2"
										>
									<div class="card-body">
										<h5 class="card-title"><?php echo $feature ?></h5>
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
		<section class="section-price">
			<div class="container">
				<div class="row">
					<div class="col-md bg-warning p-3 rounded-3">
						<div class="row justify-content-center">
							<div class="col-md-6 text-center">
								<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel libero sit amet metus semper tristique in ut ipsum.</h5>
								<button class="btn btn-primary" type="button">Dapatkan Sekarang</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="footer bg-info mt-4">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-6 p-3">
					<div class="heading">
						<h3>iniundanganmu</h3>
					</div>
					<div class="mt-3">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel libero sit amet metus semper tristique in ut ipsum.</p>
					</div>
				</div>
				<div class="col-md-6 p-3">
					<div class="heading">
						<h3>Kontak Kami</h3>
					</div>
					<div class="mt-3">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel libero sit amet metus semper tristique in ut ipsum.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Popper JS and Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>