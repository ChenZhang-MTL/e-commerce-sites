<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>PAPAYA CA | Online Clothing Company</title>
        <link rel="icon" type="image/x-icon" href="../images/logo.png">
        <link href="../CSS/header.css" rel="stylesheet"/>
        <link href="../CSS/footer.css" rel="stylesheet"/>
        <link href="../CSS/index.css" rel="stylesheet"/>
        <link href="../CSS/men_shirts.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:lightgray">
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
<?php

include '../PHP/Includes/Dbh.inc.php';

if(isset($_GET['key']))
{
    $getValue = $_GET['key'];
    $query = "SELECT * FROM products WHERE ProductName LIKE '%$getValue%'";
    $run_query = mysqli_query($conn,$query);
    
    if (mysqli_num_rows($run_query)>0) {
        ?>
        <h3 style="text-align: center">The Search Result of <?= $getValue?></h3>
        <?php 
        $counter = 0;
        foreach ($run_query as $items) {
            if($counter == 0) {
        ?>
            	<div class="Row">
            	<?php }?>
            		<div class="card">
                        <img src="<?php echo $items["Img"]; ?>">
                        <h1><?php echo $items["ProductName"]; ?></h1>
                        <p class="price"><?php echo "$".$items["Price"]; ?></p>
                        <p>New Arrival<br><?php echo $items["Description"]; ?></p>
                        <p><button type="submit">Add to Cart</button></p>
                        <p><button>Add to Wish List</button></p>
            		</div>   	
           	<?php
           	$counter++;
           	if($counter == 4) {
           	    echo "</div>";
           	    $counter = 0;
            }
         }   
    }
    else
    {
    	?>    		
    			<h3 style="text-align: center">No Record Found on <?= $getValue?></h3>
    		
    	<?php 
    }    
    
}

?>     
        <footer>
        	<div class="social">
                <a href="http://www.facebook.com" class="fa fa-facebook"></a>
                <a href="http://www.twitter.com" class="fa fa-twitter"></a>
                <a href="http://www.google.com" class="fa fa-google"></a>
                <a href="http://www.instagram.com" class="fa fa-instagram"></a>
            </div>
            <p>LaSalle College &copy; 2022 - Fall</p>
        </footer>
        <script src="../JS/index.js"></script>
    </body>
</html>