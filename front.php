<?php //include('session.php');?>
<!--<html lang="en" dir="ltr">
  <head>
     
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <h1>Welcome to our Website!</h1>
    <h2><a href = "logout.php">Sign Out</a></h2>
    <hr><p>  <b>Please make a selection</b>
    <form action="" method="post">
      Make a selection:
      <input type = "radio" name = "radio" value = "email">Email
      <input type = "radio" name = "radio" value = "sms">SmS<br>
      <input type = "submit" name = "submit" value = "Submit">
    </form>
  </p>-->
      <?php
             
        /*if(isset($_POST['radio']) && ($_POST['radio']) == "email")
        {
          header("Location:http://easytomail.in/email/upload/index.php");
        }
        if(isset($_POST['radio']) && ($_POST['radio']) == "sms" )
        {
          header("Location:http://easytomail.in/sms/index.php");

        }*/



      ?>




 <!-- </body>
</html>-->






<?php include('session.php');?>
<html lang="en" dir="ltr">
  <head>
     <link rel="stylesheet" href="demo.css">
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <h1><center>Welcome to our Website!</center></h1><br><br>
    <h2><a href = "logout.php">Sign Out</a></h2>
    
    <h3>  <b><center>Please make a selection</center></b></h3>
    <br><br><br><br><br>
    <div class="radio-group">
    <form action="" method="post">
      
      
      <div class="card">
	
	
	<ul>
		<li>
			<input type="radio" name="radio" id="one" value = "email" checked />
			<label for="one">Email</label>
			
			<div class="check"></div>
		</li>
		
		<li>
			<input type="radio" name="radio" id="two" value = "sms" />
			<label for="two">SMS</label>
			
			<div class="check"></div>
		</li>
	</ul>
</div>
      
     
      <input type = "submit" name = "submit" value = "Submit">
    </form>
  </p>
  </div>
      <?php
             
        if(isset($_POST['radio']) && ($_POST['radio']) == "email")
        {
          header("Location:http://easytomail.in/email/upload/index.php");
        }
        if(isset($_POST['radio']) && ($_POST['radio']) == "sms" )
        {
          header("Location:http://easytomail.in/sms/index.php");

        }



      ?>




  </body>
</html>

