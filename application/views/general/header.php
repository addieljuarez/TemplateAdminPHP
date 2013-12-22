<!DOCTYPE html>
<!-- border-style:solid; border-color:red; border-width:1px; position:absolute; -->
<html>
	<head>
		
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="template ABC"/>
		<meta name="author" content="Addiel Juarez"/>

		<link rel="shortcut icon" href=""/>
		<!-- <link href="offcanvas.css" rel="stylesheet"> -->


	  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
	  	<title>template</title>

		<link href="/resource/css/bootstrap.css" rel="stylesheet"/>
		<link href="/resource/css/bootstrap.min.css" />
		<link href="/resource/css/bootstrap-theme.css" />
		<link href="/resource/css/bootstrap-theme.min.css" />
		
		<script src="/resource/js/bootstrap.js"></script>
		<script src="/resource/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

		
	</head>

	<body>
		<div class="navbar navbar-fixed-top navbar-inverse" role="navigation" ><!--contenedor del menu header-->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
						<span class="sr-only">
							Toggle navigation
						</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						Principal de template
					</a>
				</div>

				<div class="colapse navbar-colapse">
					<ul class='nav navbar-nav'>
						<li class='active'>
							<a href="#">
								Home
							</a>
						</li>
						<li>
							<a href="#">
								Quienes Somos?
							</a>
						</li>
						<li>
							<a href="#">
								Servicios
							</a>
						</li>
						<li>
							<a href="#">
								Clientes
							</a>
						</li>
						<li>
							<a href="#">
								Contacto
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> <!-- end. contenedor del menu header-->



		<div class='container'  style='position:absolute; top:70px; left:100px'><!--contenedor del body-->
			<div class='row row-offcanvas row-offcanvas-right'>
				<div class='col-xs-12 col-sm-9'>
					<p class='pull-right visible-xs'>
						<button type='button' class='btn btn-primary btn-xs' data-toggle='offcanvas'>
							Toogle nav
						</button>
					</p>
					<div class='jumbotron'>
						<h1>
							titulo de plantilla
						</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class='row'><!--row-->
						<div class='col-6 col-sm-6 col-lg-4'>
							<h2>
								Heading
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								<a href="#" class='btn btn-default' role='button'>
									detalles &raquo;
								</a>
							</p>
						</div>
						<div class='col-6 col-sm-6 col-lg-4'>
							<h2>
								Heading
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								<a href="#" class='btn btn-default' role='button'>
									detalles &raquo;
								</a>
							</p>
						</div>
						<div class='col-6 col-sm-6 col-lg-4'>
							<h2>
								Heading
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<p>
								<a href="#" class='btn btn-default' role='button'>
									detalles &raquo;
								</a>
							</p>
						</div>
					</div><!--end.row-->
				</div><!--span-->
				<div class='col-xs-6 col-sm-3 sidebar-offcanvas' id='sidebar' role='navigation'>
					<div class='list-group'>
						<a href="#" class='list-group-item active'>
							Login Clientes
						</a>
						<a href="#" class='list-group-item'>
							Login Shopers
						</a>
						<a href="#" class='list-group-item'>
							Shopers Alta
						</a>
						<a href="#" class='list-group-item'>
							Administrador
						</a>
					</div><!--listGroup-->
				</div><!--span-->

			</div>

			<hr>
			<footer>
				<p>
					&copy; Negoapps 2014
				</p>
			</footer>



		</div><!--end. contenedor del body de la plantilla-->





	