<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CI-CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">CI-CRUD</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="#">Mahasiswa</a>
					<a class="nav-item nav-link disabled" href="#">Disabled</a>
				</div>
			</div>
		</div>
	</nav>

    <!-- area table mahasiswa -->
	<div class="row">
		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-striped">
						<h2>Data Mahasiswa</h2>
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nim</th>
								<th scope="col">Name</th>
								<th scope="col">Gender</th>
								<th scope="col">Address</th>
							</tr>
						</thead>
						<tbody>
							
								<?php 
								$no=1;
								foreach ($record->result() as $r) {
									echo "
									<tr>
									<td>$no</td>
									<td>$r->nim</td>
									<td>$r->name</td>
									<td>$r->gender</td>
									<td>$r->address</td>
									</tr>";
									$no++;

								}
								?>
							
						</tbody>
					</table>	
			</div>
		</div>
	</div>
	<!-- end area table mahasiswa -->

	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>