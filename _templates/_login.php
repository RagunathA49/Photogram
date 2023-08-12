<?

$username = $_POST['emailaddress'];
$password = $_POST['pass'];
print($username);
$result = User::login($username, $password);
if($result){
	?>
	<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Login Success</h1>
    <p class="lead">Login form in html and css<a href="../index.php"></p>
  </div>
</main>
<?
}
else{
    ?>
<main class="form-signin w-100 m-auto">
	<form method="post" action="login.php">
		<img class=" mb-4"
			src="https://img.freepik.com/free-vector/flat-design-ninja-logo-template_23-2149008465.jpg?w=2000" alt=""
			width="50%" height="50%">
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="emailaddress" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
		<!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
	</form>
</main>
<?}?>