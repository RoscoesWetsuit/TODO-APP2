<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
 <h1 class="header">Login</h1>

 <form method="post" action="<?php echo $path . "controller/login-user.php"; ?>"> 	
      <div class="user">
		<label for="username">Username: </label>
		<input type="text" name="username" />
	</div>

	<div class="password">
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div class="button">
		<button type="submit" class="button2">Submit</button>
	</div>
 </form>

