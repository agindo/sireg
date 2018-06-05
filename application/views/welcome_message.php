<!doctype html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    	<title>...</title>
  	</head>
  	<body style="background-color: #3498db">
    	<div class="container">
			<div class="row" style="margin-top: 150px">
			    <div class="col-sm-4"></div>
			    <div class="col-sm-4" style="background-color:#fff;padding: 80px 25px 80px 25px">
			    	<?php echo $this->session->flashdata('message');?>
					<form method="POST" action="<?php site_url() ?>signin">
					  	<div class="form-group">
					    	<!-- <label for="exampleInputEmail1">Email address</label> -->
					    	<input type="email" class="form-control" name="email" id="" placeholder="Enter email" autofocus>
					    	<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
					  	</div>
					  	<div class="form-group">
					    	<!-- <label for="exampleInputPassword1">Password</label> -->
					    	<input type="password" class="form-control" name="password" id="" placeholder="Password">
					  	</div>
					  	<div class="form-group">
					    	<a href="<?php site_url() ?>forgot">Forgot Password ?</a>
					  	</div>
					  	<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</form>
			    </div>
			    <div class="col-sm-4"></div>
			 </div>
		</div>
    	<!-- Optional JavaScript -->
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  	</body>
</html>