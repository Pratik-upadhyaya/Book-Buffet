<?php 
session_start();

include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookbuffet</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <h1>BOOK BUFFET</h1>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <!--<li><a href="#">Category</a></li>-->
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="signup.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Discover Your Next Favorite Book</h2>
        <p>Explore our vast collection of books covering various genres.</p>
        <h4>In order to see the content,please <a href="login.php">login</a></h4>
        
        
    </section>

    <section class="featured-books">
      <h2>Featured Books</h2>
      <div class="book">
          <img src="book1.jpg" alt="Book Title">
          <h3> Call of the Wild</h3>
          
      </div>
      <div class="book">
          <img src="book2.jpg" alt="Book Title">
          <h3>Gone Girl</h3>
          
      </div>
      <div class="book">
          <img src="book3.jpg" alt="Book Title">
          <h3>The Wedding Date</h3>
          
      </div>
      <div class="book">
          <img src="book4.jpg" alt="Book Title">
          <h3>American Cheese</h3>
          
      </div>
      
  </section>

    <footer>
        <p>&copy; 2024 Bookbuffet. All rights reserved.</p>
    </footer>
    <script src="/assets/js/home.js"></script>
</body>
</html>