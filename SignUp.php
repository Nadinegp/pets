<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet"  href="SignIn.css">
<link rel="stylesheet" href="main_new.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<header class="header" style="background-color:#efeef1; ">
            <p class="left_header_adopt"> <a href="index.php"><img src="images/logoo.png" width="130" height="100"></a></p>
                <div class="link">
                <a href="SignUp.php" ><button style="border:none; cursor:pointer;"><p class="link"> Sign Up</p></button></a>
                <a href="SignIn.php"><button style="border:none;cursor:pointer;"><p class="link">Login</button></p></a>
                </div>
        </header>
<body style="background-color:#c5b5e2" onunload="return myFunction()">
	<center>
		<div class="main" style="height: 750px;">  	
			<div class="signup">
				<form action="add.php" method="post" >
					<label>Sign Up</label>
					<input type="text" name="fname" placeholder="First Name" required="">
					<input type="text" name="lname" placeholder="Last Name" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<input type="number" name="age" placeholder="Age" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="file" name="image" placeholder="image">
					<button class="button_submit" type="submit" value="Signup"></button>
				</form>
        
        <script>
            function myFunction() {
            return "Are you sure you want to close the site?";
            }
        </script>
			</div>
		</div>
		</center>
    <footer>
      <?php include 'footer.html';?>
    </footer>
    </body>
</html>