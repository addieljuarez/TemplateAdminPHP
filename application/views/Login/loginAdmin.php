<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="template ABC"/>
		<meta name="author" content="Addiel Juarez"/>

		<link rel="shortcut icon" href=""/>
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

			$formStyle = array(
				'class' => 'form-signin', 
				'role' => 'form',
			);

			$email = array(
				'name' => 'email',
				'placeholder' => 'email',
				'class' => 'form-control',
				'type' => 'text',
				'autofocus' => 'autofocus',
				'required' => 'required',
			);

			$password = array(
				'type' => 'password',
				'name' => 'Password',
				'class' => 'form-control',
				'placeholder' => 'Password',
				'required' => 'required',
			);

			$checkbox = array(
				'type' => 'checkbox',
				'value' => 'remember-me', 
			);

			$buttonSubmit = array(
				'class' => 'btn btn-lg btn-primary btn-block',
				'type' => 'submit', 
			);
			
		?>


		<div class="container"><!--div container-->

			<?= form_open('administrador/loginSucces', $formStyle); ?>
				<h2 class='form-signin-heading'>
					Login Admin
				</h2>
				<?= form_input($email);?>
				<?= form_input($password);?>
				<label class='checkbox'>
					<?= form_input($checkbox);?> Remember me
				</label>
				<?php echo form_submit($buttonSubmit, 'Login'); ?>
			<?= form_close();?>
			
		</div><!--end div container-->

	</body>
</html>