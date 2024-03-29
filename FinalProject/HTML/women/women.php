<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PAPAYA CA | Online Clothing Company</title>
        <link rel="icon" type="image/x-icon" href="../../images/logo.png">
        <link href="../../CSS/header.css" rel="stylesheet"/>
        <link href="../../CSS/footer.css" rel="stylesheet"/>
        <link href="../../CSS/index.css" rel="stylesheet"/>
        <link href="../../CSS/men.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <a href="../index.php">
        	<img src="../../images/logo.png" class="logo" alt="Papaya logo" />
            </a>
        	<nav class="features">
        		<ul>
        			<?php 
        			 if(!isset($_SESSION["client_id"]))
        			 {
        			?>
        			<li><a href="../login.php"><img src="../../images/user.png" alt="Login"/></a></li>
        			<?php 
        			 }
        			 else
        			 {
        			?>
        			<li><a href="../../PHP/Includes/logout.inc.php"><img src="../../images/logout.png" alt="Logout"/></a></li>
        			<?php 
        			 }
        			?>
        			<li><a href="#"><img src="../../images/addToCart.png" alt="Add To Cart"/></a></li>
        			<li><a href="#"><img src="../../images/wishlist.png" alt="Wishlist"/></a></li>
					<form action="../result.php" method = "get">
					<li><input type="image" src="../../images/search.png" alt="Search" value="Submit" class="searchimg" name="submit"/></li>
              		<li><input type="text" placeholder="Search for product..." name="key" class="searchText"/></li>
              		</form>
        		</ul>
        	</nav>
        	<nav class="category">
        		<ul>
        			<li><a href="../men/men.php">MEN</a></li>
        			<li><a href="women.php">WOMEN</a></li>
        			<li><a href="../kids/kids.php">KIDS</a></li>
        			<li><a href="../about.php">ABOUT US</a></li>
        		</ul>
        	</nav>
        </header>
        <div class="men-category">
            <nav class="options">
                <ul>
                    <li><a href="women_tops.php">Tops</a></li>
                    <li><a href="women_jeans.php">Jeans</a></li>
                    <li><a href="women_dresses.php">Dresses</a></li>
                </ul>
            </nav>
            <section class="men-images">
                <div class="img-container">
                    <img src="../../images/pexels-photo-247204.jpg" alt="TOPS"/>
                    <a href="women_tops.php"><button class="btn"> TOPS</button></a>
                </div>
                <div class="img-container">
                    <img src="../../images/sale.jpg" alt="Sale"/>
                    <a href="../men_tshirt.php"><button class="btn">On Sale</button></a> 
                </div> 
                <div class="img-container">              
                    <img src="../../images/pexels-photo-928008.jpg" alt="Pants"/>
                    <a href="women_jeans.php"><button class="btn">JEANS</button></a>
                </div>
                <div class="img-container">
                    <img src="../../images/pexels-photo-975006.jpg" alt="Shirts"/>
                    <a href="women_dresses.php"><button class="btn">DRESSES</button></a>   
                </div> 
            </section>
            
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