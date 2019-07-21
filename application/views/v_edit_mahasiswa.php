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
			<a class="navbar-brand" href="home">CI-CRUD</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="http://localhost/ci-crud/index.php/mahasiswa">Mahasiswa</a>
				</div>
			</div>
		</div>
	</nav>

    <!-- area input mahasiswa -->
    <div class="row">
    	<div class="container">
    		<div class="panel mt-3">
    		<div class="col-sm-12 col-md-12 col-lg-12">
    			<h3>Form update</h3>
    			<hr>
    			<form>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Nim</label>
    					<div class="col-sm-10">
    						<input type="text" name="name" class="form-control">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Name</label>
    					<div class="col-sm-10">
    						<input type="text" name="name" class="form-control">
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Gender</label>
    					<div class="col-sm-10">
    						<select name="gender" class="form-control">
    							<option value="">-- Choose --</option>
    							<option value="male">Male</option>
    							<option value="female">female</option>
    							
    						</select>
    					</div>
    				</div>
    				<div class="form-group row">
    					<label class="col-sm-2 col-form-label">Address</label>
    					<div class="col-sm-10">
    						<textarea name="address" class="form-control"></textarea>
    					</div>
    				</div>
    				<hr>
    				<div class="form-group row">
    					<div class="col-sm-10">
    						<label class="col-sm-2 col-form-label"> </label>
    						<button type="button" name="submit" class="btn btn-sm btn-primary"> Update</button>
    						<?php echo anchor('mahasiswa','Cancel',array('class'=>'btn btn-sm btn-danger'))?>
    					</div>
    				</div>
    			</form>

    		</div>
    	    </div>
    	</div>
    </div>
	<!-- end area input mahasiswa -->

	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>