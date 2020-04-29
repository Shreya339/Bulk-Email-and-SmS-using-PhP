<?php include ('config.php');
session_start();?>
<!DOCTYPE html >
<html>
<head>
<title>LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="1.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</head>
<body id="body_bg">
    
<form  method="post" action="" >
<div class="login-box">
    
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="user_id" id="user_id">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"  type="password" name="user_pass" id="user_pass"></input>
  </div>

  <!--<input type="button" class="btn" value="Submit">
  <input type="button" class="btn" value="Reset"/> -->
   
   <input type="submit" class="btn" value="Submit" />
                <input type="reset" class="btn" value="Reset"/>

      </div>  
    </form>
		
		
		<?php 
	
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM email WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
    $_SESSION['username'] = ''; 
     $_SESSION['login_user'] = $username;
    
         header("Location:http://easytomail.in/front.php");
}

    else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
?>

</body>
</html>
