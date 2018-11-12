<?php
    session_start();
   require "db_config/config.php";

?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

<link rel="stylesheet" href="login.css">
</head>
<body style="background-color:#7f8c8d">
<div id="main-wrapper">
<center><h2>Login Form </h2></center>
<center><img src="images/login.png" class="login"/></center>

<form class="myform" action="login.php" method="post">
<label><b>Username:</label><br>
<input name="username" type="text" class="inputvalues" placeholder="Type your username"/><br>
<label><b>Password:</label><br>
<input name="password" type="password" class="inputvalues" placeholder="Type your password"/><br>
<input name="login" type="submit" id="login_btn" value="Login"/><br>
<input type="button" id="reg_btn" value="Register"/>

</form>

<?php
  if(isset($_POST['login']))
  {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $query="select uname,password from registered_users where uname='$username' AND password='$password'";
      $loyalty="select uname,password from registered_users where uname='$username' AND password='$password' AND (pprice>100000)";
  
      $query_run=mysqli_query($con,$query);
	  $result = mysqli_query($con,$loyalty);
	  
	  if(mysqli_num_rows($result) == 1)
	  {
		//$_SESSION['username'] = $username;
  	     //$_SESSION['loggedin'] = TRUE;
  	     header('location: web_home3.php');
	  }  
      elseif(mysqli_num_rows($query_run) == 1)
	  {
		  //$_SESSION['username'] = $username;
  	      //$_SESSION['loggedin'] = TRUE;
  	      header('location: web_home2.php');
    }
    else{
      echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
    }
	  
  }
	  
?>


</div>

</body>
</html>
