<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Vijay Lopes Kapoor">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="stylesheet" href="../library/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
  		<link rel="stylesheet" type="text/css" href="../library/bootstrap/css/bootstrap.min.css">
	</head>
	<style type="text/css">
		.navbar-brand{
			font-family: 'Parisienne', cursive;
		}
		.container-fluid{
			box-shadow: 1px 1px 1px #E0E0E0;
		}
		.navbar-white{
			background-color: #ffffff;
		}
		.navbar-header{
			margin-left: 43%;
		}
		#menu{
			padding:0;
			margin:0;
			border: 1px solid #E0E0E0;
			width:15%;
			/*height: 100%; -> fazer com jquery */
		}
	</style>
	<body>
		<nav class="navbar navbar-white">
			<div class="container-fluid">
				<div>
					<ul class="nav navbar-nav">
						<li>
							<a href="javascript:void(0);" id="menu-toggle">
								<img src="../images/menu.png" id="menu-toggle-img">
							</a>
						</li>
					</ul>
					<div class="navbar-header">
						<a class="navbar-brand" href="#">
							Restauran't
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
			<div id="menu">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" class="active"><a href="#">Home</a></li>
					<li role="presentation"><a href="#">Profile</a></li>
					<li role="presentation"><a href="#">Messages</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">