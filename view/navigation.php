<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");
    
?>
<div class="container">
    <ul class="">
        <!-- create a link that point to the post file -->
         <li><a href="<?php echo $path. "login.php" ?>">Log In</a></li>
         <li><a href="<?php echo $path. "register.php" ?>">Register</a></li>
         <li><a href="<?php echo $path. "todo.php" ?>">tasks</a></li>

    </ul>
</div>