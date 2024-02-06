<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
   <head>
        <title>HOME</title>
        <link href="../CSS/header.css" rel="stylesheet"/>
        <link href="../CSS/footer.css" rel="stylesheet"/>
        <link href="../CSS/index.css" rel="stylesheet"/>
		<link href="../CSS/signUp.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
			<a href="index.php">
        	<img src="../images/logo.png" class="logo" alt="Papaya logo" />
			</a>
        	<nav class="features">
        		<ul>
        			<?php 
        			 if(!isset($_SESSION["client_id"]))
        			 {
        			?>
        			<li><a href="login.php"><img src="../images/user.png" alt="Login"/></a></li>
        			<?php 
        			 }
        			 else
        			 {
        			?>
        			<li><a href="../PHP/Includes/logout.inc.php"><img src="../images/logout.png" alt="Login"/></a></li>
        			<?php 
        			 }
        			?>
        			<li><a href="#"><img src="../images/addToCart.png" alt="Add To Cart"/></a></li>
        			<li><a href="#"><img src="../images/wishlist.png" alt="Wishlist"/></a></li>
					<form action="result.php" method = "get">
					<li><input type="image" src="../images/search.png" alt="Search" value="Submit" class="searchimg" name="submit"/></li>
              		<li><input type="text" placeholder="Search for product..." name="key" class="searchText"/></li>
              		</form>
        		</ul>
        	</nav>
        	<nav class="category">
        		<ul>
        			<li><a href="men/men.php">MEN</a></li>
        			<li><a href="women/women.php">WOMEN</a></li>
        			<li><a href="kids/kids.php">KIDS</a></li>
        			<li><a href="about.php">ABOUT US</a></li>
        		</ul>
        	</nav>
        </header>
			<div class="signUp-container">
				<form class="signUpForm" action="../PHP/Includes/signUp.inc.php" method="post">
					<h3>SIGN UP</h3>
					<style><?php include '../CSS/signUp.css';?></style>
					<?php 
            			if(isset($_GET["error"])){
            			    if($_GET["error"] == "emptyinput") {
            			        echo "<p>Fill in all fields!</p>";
            			    }
            			    elseif($_GET["error"] == "invalidEmail") {
            			        echo "<p>Enter a valid email</p>";
            			    }
            			    elseif($_GET["error"] == "passwordNotMatch") {
            			        echo "<p>Password doesn't match!</p>";
            			    }
            			    elseif($_GET["error"] == "stmtfailed") {
            			        echo "<p>Something went wrong. Try again!</p>";
            			    }
            			    elseif($_GET["error"] == "clientExist") {
            			        echo "<p>Email address already exist!</p>";
            			    }
            			    elseif($_GET["error"] == "none") {
            			        echo "<p>You have successfully signed up!</p>";
            			    }
            			}
        			?>
					   
					<div class="personalInfo">
						<input type="text" name="name" placeholder="Name"><br/>
						<input type="text" name="address" placeholder="Address"><br/>
						<input type="text" name="phone" placeholder="Phone Number"><br/>
					</div>
					<div class="loginInfo">
						<input type="email" name="email" placeholder="Email"><br/>
						<input type="password" name="pwd" placeholder="Password"><br/>
						<input type="password" name="confirmPwd" placeholder="Confirm Password"><br/>
					</div>
						<input type="submit" name="submit" value="CREATE ACCOUNT"/>
						<a href="login.php"><input type="button" value="BACK"/></a>
				</form>
			</div>
        <footer>
        	<div class="social">
                <a href="http://www.facebook.com" class="fa fa-facebook"></a>
                <a href="http://www.twitter.com" class="fa fa-twitter"></a>
                <a href="http://www.google.com" class="fa fa-google"></a>
                <a href="http://www.instagram.com" class="fa fa-instagram"></a>
            </div>
            <p>LaSalle College &copy; 2022 - Fall</p>
        </footer>
    </body>
</html>