<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>

<h1 class="register">Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div class="user2">
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div class="password2">
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div class="button2">
		<button type="submit" class="button3">Submit:</button>
	</div>
</form>
