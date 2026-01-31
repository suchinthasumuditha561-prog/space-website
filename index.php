<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Explore Space</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div class="logo">
        <img src="images/logo.png" alt="Explore Space Logo" width="50">
        <span>Explore Space</span>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="planets.php">Planets</a></li>
        <li><a href="missions.php">Missions</a></li>
        <li><a href="comments.php">Opinions</a></li>
        <li><a href="about.php">About</a></li>
    </ul>

    <div class="search-box">
    <input type="text" id="planetSearch" placeholder="Search planets...">
</div>

</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Explore Space</h1>
        <p>Discover the wonders of our universe, planets, stars, and space missions.  
        Learn fascinating facts about space exploration and the solar system.</p>
        <a href="planets.php" class="btn">Explore Planets</a>
    </div>
</section>

<!-- Featured Planets Section -->
<section class="featured-planets">
    <h2>Our Solar System Highlights</h2>
    <div class="planet">
        <a href="https://en.wikipedia.org/wiki/Earth" target="_blank">
        <img src="images/earth.jfif" alt="Earth">
        </a>
        <h3>Earth</h3>
        <p>The only planet known to support life, with oceans and diverse ecosystems.</p>
    </div>
    <div class="planet">
        <a href="https://en.wikipedia.org/wiki/Mars" target="_blank">
        <img src="images/mars.jfif" alt="Mars">
        </a>
        <h3>Mars</h3>
        <p>The Red Planet, target of ongoing exploration missions searching for signs of life.</p>
    </div>
    <div class="planet">
        <a href="https://en.wikipedia.org/wiki/Jupiter" target="_blank">
        <img src="images/jupiter.jfif" alt="Jupiter">
        </a>
        <h3>Jupiter</h3>
        <p>The largest planet in our solar system with a massive magnetic field.</p>
    </div>
</section>

<!-- Footer -->
 <footer class="site-footer">

     <div class="footer-center">
        <p>Prepared by Suchiya &copy; <?php echo date("Y"); ?></p>
    </div>
   
    <div class="footer-left">
        <a href="https://www.facebook.com" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.whatsapp.com" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://t.me" target="_blank">
            <i class="fab fa-telegram"></i>
        </a>
        <a href="https://www.youtube.com" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
    
</footer>


<script src="js/script.js"></script>

</body>

   

</html>
