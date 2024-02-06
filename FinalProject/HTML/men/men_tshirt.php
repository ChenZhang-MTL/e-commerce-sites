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
        <link href="../../CSS/men_tshirt.css" rel="stylesheet"/>
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
        			<li><a href="men.php">MEN</a></li>
        			<li><a href="../women/women.php">WOMEN</a></li>
        			<li><a href="../kids/kids.php">KIDS</a></li>
        			<li><a href="../about.php">ABOUT US</a></li>
        		</ul>
        	</nav>
        </header>
        <div class="men-category">
            <nav class="options">
                <ul>
                    <li><a href="men_pants.php">Pants</a></li>
                    <li><a href="men_shirts.php">Shirts</a></li>
                    <li><a href="men_tshirt.php">T-Shirts</a></li>
                </ul>
            </nav>
           
            
            
<h2 style="text-align:center"><br>BLACK FRIDAY ON SALE</h2>

<div class="Row">
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_1.jpg" alt="Denim Jeans" class="img-top">  
        <h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt2.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt3.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_3.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt4.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_4.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>



<div class="Row">
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/1-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/1-2.jpg" alt="Denim Jeans" class="img-top">  
        <h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/2-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/2-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Men/T-SHIRTS/3-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/3-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Men/T-SHIRTS/4-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/4-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>

<div class="Row">
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/5-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/5-2.jpg" alt="Denim Jeans" class="img-top">  
        <h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/6-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/6-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Men/T-SHIRTS/7-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/7-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Men/T-SHIRTS/8-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/8-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>

<div class="Row">
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_1.jpg" alt="Denim Jeans" class="img-top">  
        <h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt2.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt3.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_3.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt4.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/hmgoepprodt_4.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>


<div class="Row">
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/9-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/9-2.jpg" alt="Denim Jeans" class="img-top">  
        <h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Men/T-SHIRTS/10-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/10-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Men/T-SHIRTS/11-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/11-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Men/T-SHIRTS/12-1.jpg" alt="Denim Jeans">
        <img src="../../images/Men/T-SHIRTS/12-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>





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