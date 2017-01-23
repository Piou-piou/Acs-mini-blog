<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Off Canvas Template for Bootstrap</title>
		
		<!-- Bootstrap core CSS -->
		<link href="<?=WEBROOT?>css/bootstrap.min.css" rel="stylesheet">
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="<?=WEBROOT?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="<?=WEBROOT?>css/offcanvas.css" rel="stylesheet">
		
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]>
		<script src="<?=WEBROOT?>js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="<?=WEBROOT?>js/ie-emulation-modes-warning.js"></script>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<nav class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div><!-- /.container -->
		</nav><!-- /.navbar -->
		
		<div class="container">
			
			<?php include($page);?>
			
			<div class="row row-offcanvas row-offcanvas-right">
				
				<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
					<div class="list-group">
						<a href="#" class="list-group-item active">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
						<a href="#" class="list-group-item">Link</a>
					</div>
				</div><!--/.sidebar-offcanvas-->
			</div><!--/row-->
			
			<hr>
			
			<footer>
				<p>&copy; 2016 Company, Inc.</p>
			</footer>
		
		</div><!--/.container-->
		
		
			  <!-- Bootstrap core JavaScript
			  ================================================== -->
			  <!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
		<script src="<?=WEBROOT?>js/bootstrap.min.js"></script>
			  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?=WEBROOT?>js/ie10-viewport-bug-workaround.js"></script>
		<script src="<?=WEBROOT?>js/offcanvas.js"></script>
	</body>
</html>
