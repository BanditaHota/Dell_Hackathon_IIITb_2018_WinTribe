<?php
  if(isset($_POST['login']))
  {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $query="select uname,password from registered_users where uname='$username' AND password='$password'";
  
      $query_run=mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
      {
         //$_SESSION['username']=$_username;
         //header('location:');
         echo '<script type="text/javascript"> alert("good") </script>';
      }
      else{
         echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
      }
  
    }

?>