<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

.singupslide{
    position: absolute;
    right: 10%;
    font-weight: bold;
}
	</style>

	<title>Signin | Stock</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/login.css">
	<script type = 'text/javascript' src = "<?php echo base_url(); ?>JS/login.js"></script>


</head>
	<body>
		<a href="<?= base_url() ?>Login" class="singupslide my-5">login<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		<div id="loginBox" class="mx-auto">
			<h1>Create Acount</h1>
			<form method="POST" action="<?= base_url() ?>login/signup" class="form-group">
            <div class="my-4">
					<input type="text" class="form-control mx-auto  w-50" name="name" id="" placeholder="Full Name">
					
				</div>
                <div class="my-4">
					<input type="text" class="form-control mx-auto  w-50" name="email" id="" placeholder="Email">
					<?php echo form_error('email') ?>
				</div>
				<div class="my-4">
					<input type="password" class=" form-control mx-auto  w-50" name="pass" id="" placeholder="Password">
					<?php echo form_error('pass') ?>
				</div>
				<input type="submit" name="signin" class="form-control mx-auto  w-50" value="signin">
			</form>
 		</div>
	</body>
</html>