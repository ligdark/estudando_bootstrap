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
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>
					
						<ul class="dropdown-menu">
							<li><a href="#">Bootstrap Tutorials</a></li>
							<li><a href="#">PHP Tutorials</a></li>
							<li><a href="#">Java Tutorials</a></li>
						</ul>
					</li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Carousel -->
	<!-- ============ -->

	<!-- <div class="container span2"> -->
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="../imgs/1.png">

					<div class="container">
						<div class="carousel-caption">
							<h1>My Heading Text</h1>
							<p>This tag will contain the text whitch we want to appear on our slide</p>
							<p><a href="#" class="btn btn-large btn-primary">Sign Up</a></p>
						</div>
					</div>
				</div>

				<div class="item container">
					<img src="../imgs/2.png">

					<div class="container">
						<div class="carousel-caption">
							<h1>My Heading Text</h1>
							<p>This tag will contain the text whitch we want to appear on our slide</p>
							<p><a href="#" class="btn btn-large btn-primary">Sign Up</a></p>
						</div>
					</div>
				</div>

				<div class="item">
					<img src="../imgs/3.png">

					<div class="container">
						<div class="carousel-caption">
							<h1>My Heading Text</h1>
							<p>This tag will contain the text whitch we want to appear on our slide</p>
							<p><a href="#" class="btn btn-large btn-primary">Sign Up</a></p>
						</div>
					</div>
				</div>

				<div class="item">
					<img src="../imgs/4.png">

					<div class="container">
						<div class="carousel-caption">
							<h1>My Heading Text</h1>
							<p>This tag will contain the text whitch we want to appear on our slide</p>
							<p><a href="#" class="btn btn-large btn-primary">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>

			<a href="#myCarousel" class="left carousel-control" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>

			<a href="#myCarousel" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	<!-- </div> -->

	
	<!-- Grid -->
	<!-- ============ -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2>First Heading</h2>
				<p>Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here </p>
			</div>

			<div class="col-md-4">
				<h2>First Heading</h2>
				<p>Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here </p>
			</div>

			<div class="col-md-4">
				<h2>First Heading</h2>
				<p>Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here Some text will go here </p>
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<h1>First Heading</h1>
				<p>
					Some text will go here Some text will go hereSome text will go hereSome text will go hereSome text will go here
					Some text will go hereSome text will go hereSome text will go hereSome text will go hereSome text will go here
				</p>
			</div>

			<div class="col-md-6">
				<h1>First Heading</h1>
				<p>
					Some text will go here Some text will go hereSome text will go hereSome text will go hereSome text will go here
					Some text will go hereSome text will go hereSome text will go hereSome text will go hereSome text will go here
				</p>
			</div>
		</div>
	</div>

	<!-- Font Awesome Icons -->
	<!-- ============ -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="well">
					<a href="#"><i class="largeIcon fa fa-android"></i></a>
					<i class="largeIcon fa fa-linkedin"></i>
					<i class="largeIcon fa fa-twitter"></i>
				</div>
			</div>
		</div>
	</div>
</body>
</html>