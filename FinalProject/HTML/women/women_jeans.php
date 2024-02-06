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
        <link href="../../CSS/men_shirts.css" rel="stylesheet"/>
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
           
            
            
<h2 style="text-align:center"><br>BLACK FRIDAY ON SALE</h2>

<div class="Row">
	<div class="card">
  	    <img src="../../images/Women/JEANS/1hmgoepprod.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/1_hmgoepprod.jpg" alt="Denim Jeans" class="img-top">
       	<h1>Slim Jeans</h1>
        <p class="price">$24.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Women/JEANS/2hmgoepprod.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/2_hmgoepprod.jpg" alt="Denim Jeans" class="img-top">
        <h1>Loose Jeans</h1>
        <p class="price">$39.99</p>
        <p>New Arrival<br>Loose-fit, 5-pocket jeans in thick cotton denim. Regular waist, zip fly with button, and wide legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Women/JEANS/3hmgoepprod.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/3_hmgoepprod.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Women/JEANS/4hmgoepprod.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/4_hmgoepprod.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>



<div class="Row">
	<div class="card">
        <img src="../../images/Women/JEANS/1-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/1-2.jpg" alt="Denim Jeans" class="img-top">
  	    <h1>Freefit® Jeans</h1>
  	    <p class="price">$19.99</p>
  	    <p>Made with Lycra® Freefit® technology for super-generous stretch, maximum freedom of movement and comfort.</p>
  	    <p><button>Add to Cart</button></p>
  	    <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Women/JEANS/2-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/2-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Slim Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Women/JEANS/7-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/7-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$39.99</p>
        <p>5-pocket jeans in washed stretch denim with heavily distressed details. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Women/JEANS/9-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/9-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket crop jeans in stretch cotton denim. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
</div>


<div class="Row">
	<div class="card">
        <img src="../../images/Women/JEANS/8-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/8-2.jpg" alt="Denim Jeans" class="img-top">
  	    <h1>Freefit® Jeans</h1>
  	    <p class="price">$19.99</p>
  	    <p>Made with Lycra® Freefit® technology for super-generous stretch, maximum freedom of movement and comfort.</p>
  	    <p><button>Add to Cart</button></p>
  	    <p><button>Add to Wish List</button></p>
	</div>
	<div class="card">
        <img src="../../images/Women/JEANS/11-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/11-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Slim Jeans</h1>
        <p class="price">$29.99</p>
        <p>New Arrival<br>5-pocket jeans in stretch cotton denim. Regular waist, zip fly with button, and slim legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
  	<div class="card">
        <img src="../../images/Women/JEANS/4-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/4-2.jpg" alt="Denim Jeans" class="img-top">
        <h1>Skinny Jeans</h1>
        <p class="price">$39.99</p>
        <p>5-pocket jeans in washed stretch denim with heavily distressed details. Regular waist, zip fly with button, and skinny legs.</p>
        <p><button>Add to Cart</button></p>
        <p><button>Add to Wish List</button></p>
    </div>
    <div class="card">
        <img src="../../images/Women/JEANS/12-1.jpg" alt="Denim Jeans">
        <img src="../../images/Women/JEANS/12-2.jpg" alt="Denim Jeans" class="img-top">
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