  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

<?php 
// mengaktifkan session php
session_start();
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
if( ($username == "admin")&&($password == "admin123") ) {
  //set the session on the login page
  $_SESSION['loggedIn_admin'] = true;  
	header("location:main_admin.php");
}
else if ( ($username == "user")&&($password == "user123" ) ){
  //set the session on the login page
	header("location:main_user.php");
  $_SESSION['loggedIn_user'] = true; 
}	
else {
  echo '<script type="text/javascript">'; 
  echo 'alert("ID atau password salah");'; 
  echo 'window.location.href = "index.html";';
  echo '</script>';
}	
?>