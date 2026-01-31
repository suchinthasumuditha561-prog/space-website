
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opinions | Explore Space</title>
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
</nav>

<section>
    <h1>Share Your Opinion About Space</h1>

    <!-- Comment Form -->
    <form method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Opinion" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <?php
    include("db/config.php");

    // Submit comment
    if(isset($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        mysqli_query($conn,"INSERT INTO comments (name,email,message) VALUES ('$name','$email','$message')");
        echo "<p style='text-align:center;color:#00bfff;'>Thank you! Your opinion has been submitted.</p>";
    }

    // Display approved comments
    $result = mysqli_query($conn,"SELECT * FROM comments WHERE approved=1 ORDER BY created_at DESC");
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='comment-card'>";
        echo "<img src='images/avatar.png' alt='User Avatar'>";
        echo "<div class='comment-content'>";
        echo "<h3>".$row['name']."</h3>";
        echo "<small>".$row['created_at']."</small>";
        echo "<p>".$row['message']."</p>";
        echo "</div>";
        echo "</div>";
    }
    ?>
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


</body>
</html>
