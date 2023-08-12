
<?
$signup=false;
if(isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email_address'];
	$phone = $_POST['phone'];
	$error = User::signup($username,$password, $email, $phone);
	$signup=true;
}

?>
	<?php
	if ($signup) {
		if (!$error) {
		?>
			<main class="flex-shrink-0">
			<div class="container">
			<h1 class="mt-5">Signup Success</h1>
			<p class="lead">Now you can login<a href="login.php">Login</p>
			</div>
		</main>
		<?php
		} else {
			?>
			<main class="flex-shrink-0">
			<div class="container">
			<h1 class="mt-5">Signup Fail</h1>
			<p class="lead">Something went wrong,<?=$error?></p>
			</div>
		</main>
		<?php
		}
	}else{
		?>
<main class="form-signup w-100 m-auto">

	<form method="post" action="signup.php">
		<img class=" mb-4"
			src="https://img.freepik.com/free-vector/flat-design-ninja-logo-template_23-2149008465.jpg?w=2000" alt=""
			width="50%" height="50%">
		<h1 class="h3 mb-3 fw-normal">Signup here</h1>

		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInputUsername" placeholder="Default input">
			<label for="floatingInputUsername">Username</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="Default input">
			<label for="floatingInputphone">Phone</label>
		</div>
		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	</form>
</main>
<?}?>