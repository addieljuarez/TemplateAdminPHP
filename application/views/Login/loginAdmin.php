
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="template ABC"/>
		<meta name="author" content="Addiel Juarez"/>

		<link rel="shortcut icon" href=""/>
		<!-- <link href="offcanvas.css" rel="stylesheet"> -->


	  	<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" /> -->
	  	<title>template</title>

		<link href="../../resource/css/bootstrap.css" rel="stylesheet"/>
		<link href="../../resource/css/bootstrap.min.css" />
		<link href="../../resource/css/bootstrap-theme.css" />
		<link href="../../resource/css/bootstrap-theme.min.css" />
		<link href="../../resource/css/signin.css" rel="stylesheet" />


		
		<script src="../../resource/js/bootstrap.js"></script>
		<script src="../../resource/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

		<title>Login Admin</title>
	</head>
	<body>

		<!-- arrays de style input que se inserta en php -->
		<?
			$email = array(
				'name' => 'email',
				'placeholder' => 'email',
				'class' => 'form-control',
				'type' => 'text',
			);

			$formStyle = array(
				'class' => 'form-signin', 
				'role' => 'form',
				'required',
				'autofocus',
				);
		?>


		<div class="container"><!--div container-->

			<?= form_open('adminstrador/login', $formStyle); ?>
			<!-- <form class='form-signin' role='form'> -->
				<h2 class='form-signin-heading'>
					Login Admin
				</h2>
				<!-- <input type='text' class='form-control' placeholder='Email' required autofocus> -->
				<?= form_input($email);?>
				<input type='password' class='form-control' placeholder='Password' required>
				<label class='checkbox'>
					<input type='checkbox' value='remember-me'>Remember me
				</label>
				<!-- <button class='btn btn-lg btn-primary btn-block' type='submit'>
					Login
				</button> -->
				<?php echo form_submit(); ?>

			<!-- </form> -->
			<?php form_close();?>
			
		</div><!--end div container-->

	</body>
</html>