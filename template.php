<?php
    // Allow the config file
    define("__CONFIG__", true);
    // Require the config file
    require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trail Hiking</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="navigation-bar">
            <nav>
                <div class="menu-icon">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Trails</a></li>
                    <li><a href="#">Stories</a></li>
                </ul>
                <div class="user-options">
                    <!-- <button class="signin-btn">Sign In</button> -->
                    <a href="signin.php">  
                        <button class="signin-btn">Sign In</button>  
                    </a>
                    <!-- <button class="register-btn">Register</button> -->
                    <a href="register.php">  
                        <button class="register-btn">Register</button>  
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <!-- Search Box -->
        <form>
            <div class="container">
                
            </div>
        </form>
    </main>
    <?php require_once "inc/footer.php"; ?>
</body>

</html>