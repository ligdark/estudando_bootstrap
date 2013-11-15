<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../plugins/bootstrap/css/bootstrap.css">
	<!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="../plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.js" > </script>
</head>
<body>

	<!-- Menu -->
	<!-- ============ -->

	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="#" class="navbar-brand">Willian</a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="feature.php">Features</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>
					
						<ul class="dropdown-menu">
							<li><a href="#">Bootstrap Tutorials</a></li>
							<li><a href="#">PHP Tutorials</a></li>
							<li><a href="#">Java Tutorials</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Form -->
	<!-- ============ -->

	<br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Contact Form</h2>

				<form class="form-horizontal">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" placeholder="Enter Name...">
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" placeholder="Enter email...">
						</div>
					</div>

					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Messege</label>
						<div class="col-sm-6">
							<textarea class="form-control" row="3" placeholder="Enter Message..."></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="website" class="col-sm-2 control-label">Favoutite Websites</label>
						<div class="col-sm-6">
							<label class="checkbox-inline">
								<input type="checkbox" value="option1" /> YouTube
							</label>

							<label class="checkbox-inline">
								<input type="checkbox" value="option2" /> Facebook
							</label>

							<label class="checkbox-inline">
								<input type="checkbox" value="option3" /> Orkut
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="gender" class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-6">
							<label class="radio-inline">
								<input type="radio" value="option1" name="genderRadio"/> Male
							</label>

							<label class="radio-inline">
								<input type="radio" value="option2" name="genderRadio"/> Female
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="city" class="col-sm-2 control-label">City</label>
						<div class="col-sm-6">
							<select class="form-control">
								<option>Brazil</option>
								<option>London</option>
								<option>Birminghan</option>
								<option>Liverpool</option>
								<option>London</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6">
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="reset" class="btn btn-defautl">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<!-- ============ -->

	<div class="container">
		<div class="row">
			<div class="col=md-12">

				<hr>
				<p>
					Copyright &copy; LigDark.
					<a data-toggle="modal" href="#myModal">Termos e Condições</a>
				</p>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tobinex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1>Termos e Condições</h1>
							</div>
							
							<div class="modal-body">
								<p>The text will go here...</p>
							</div>
							
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>