<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="./style.css?Version=0">
</head>
<body>
  <div class="header">
  	<h3>REGISTER</h3>
      <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "missingfield"){
                    echo '<p class="mess"> Fill in all fields! </p>';
                }
                elseif($_GET["error"] == "invalidusername"){
                    echo '<p class="mess"> Invalid Username! </p>';
                }
                elseif($_GET["error"] == "pwddontmatch"){
                    echo '<p class="mess"> Password do not Match! </p>';
                }
                elseif($_GET["error"] == "usernametaken"){
                    echo '<p class="mess"> Username Taken! </p>';
                }
                elseif($_GET["signup"] == "signedupsuccesfully"){
                    echo '<p class="mess"> Signed up Successfully! </p>';
                }
            }
        ?>
  </div>
	
  <form method="POST" action="signup.php">
  	<div class="input">
  	  <label>Username</label>
  	  <input type="text" name="uname" required>
  	</div>
  	<div class="input">
  	  <label>Password</label>
  	  <input type="password" name="pwd" required>
  	</div>
  	<div class="input">
  	  <label>Confirm password</label>
  	  <input type="password" name="pwdR" required>
  	</div>
  	<div class="input">
  	  <button type="submit" class="btn" name="signupB">Register</button>
  	</div>
  	<p style="font-size:14px;">
  		Already a member? <a href="loginpage.php">Sign in</a> or <a href="adminlogin.php"> Admin.</a>
  	</p>
  </form>
</body>
</html>