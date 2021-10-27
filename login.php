<?php
require_once 'includes/config.inc.php';
$title = 'Login Page';
$body_classes = 'h-100';
$html_classes = 'h-100';
require_once 'fragments/_header.tpl.php';
?>
<div class='bg-grey d-flex h-100 justify-content-center align-items-center'>
	<div class='container'>
		<div class='row'>
			<div class='col-12 text-center'>
				<form method='post' action='process_login.php'>
					<h2>Login</h2>
					<div class='form-group'>
						<label for='username'>Username</label>
						<input type='text' name='username' value='' id='username'/>
					</div>
					<div class='form-group'>
						<label for='password'>Password</label>
						<input type='password' name='password' value='' id='password'/>
					</div>
					<div class='form-group text-center'>
						<button class='btn btn-primary' type='submit' name='submit'>Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
require_once 'fragments/_footer.tpl.php';
?>
