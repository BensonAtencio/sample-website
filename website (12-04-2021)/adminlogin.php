<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login </title>
  <link rel="stylesheet" type="text/css" href="./style.css?Version=0">
</head>
<body>
  <div class="header" >
  	<h3>ADMIN</h3>
      <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "missingfield"){
                    echo '<p class="mess"> Fill in all fields! </p>';
                }
                elseif($_GET["error"] == "wrongpwd"){
                    echo '<p class="mess"> Invalid Credentials! </p>';
                }
                elseif($_GET["error"] == "nouser"){
                    echo '<p class="mess"> Invalid Credentials! </p>';
                }
                elseif($_GET["login"] == "success"){
                    echo '<p class="mess"> Logged in Successfully! </p>';
                }
            }
        ?>
  </div>
	 
  <form method="POST" action="admin.php">
  	<div class="input">
  		<label>Username</label>
  		<input type="text" name="uname" required>
  	</div>
  	<div class="input">
  		<label>Password</label>
  		<input type="password" name="pwd" required>
  	</div>
  	<div class="input">
  		<button type="submit" class="btn" name="loginB">Log In</button>
  	</div>
	<p style="font-size:14px;">
  		Not yet a member? <a href="index.php">Sign up</a>
  	</p>
  </form>
</body>
</html>