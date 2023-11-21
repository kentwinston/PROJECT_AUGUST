<?php
if(isset($_POST['login'])) {
   $user = $_POST['username'];
   $pass = $_POST['password'];

   if(empty($user) || empty($pass)) {
      echo "<script type='text/javascript'>alert('Empty Username or Password');
      window.location='staff_login_page.php';
      </script>";
   } else {
      if($user == "admin" && $pass == "admin") {
      echo "<script type='text/javascript'>alert('Success');
      window.location='database_view.php';
      </script>";
         //echo '<script> alert("Login successful."); </script>';
         // Redirect to another PHP file on success
         // header("Location: another_php_file.php");
         // exit(); // Ensure that code execution stops after redirection
      } else {
         echo "<script type='text/javascript'>alert('Wrong Username or Password');
         window.location='staff_login_page.php';
         </script>";
         //echo '<script> alert("Login failed. Please try again."); </script>';
         //header("Location: staff_login_page.php");
      }
   }
}
?>
