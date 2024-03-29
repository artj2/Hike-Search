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
                    <a href="signin.php">  
                        <button class="signin-btn">Sign In</button>  
                    </a>
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
                <div class="heading">Find your perfect trail!</div>
                <div class="search-options">
                    <div class="search-bar">
                        <label for="location-input">Location:</label>
                        <input type="text" id="location-input" name="place" placeholder="Type a location...">
                    </div>
                    <div class="distance-range">
                        <label for="min-length">Please enter the distance range in miles:</label>
                        <input type="number" id="length" name="min-length">
                        <label for="max-length">and:</label>
                        <input type="number" id="length" name="max-length">
                    </div>
                    
                    <div class="check-boxes">
                        <div class="label">
                            <input type="checkbox" name="dog-friendly" value="yes">
                            Dog Friendly
                        </div>
                        <div class="label">
                            <input type="checkbox" name="car-park-start" value="yes">
                            Car Park at Start
                        </div>
                        <div class="label">
                            <input type="checkbox" name="car-park-finish" value="yes">
                            Car Park at Finish
                        </div>
                        <div class="label">
                            <input type="checkbox" name="public-transport" value="yes">
                            Public Transport
                        </div>
                        <div class="label">
                            <input type="checkbox" name="food" value="yes">
                            Food on Trail (e.g. shops)
                        </div>
                        <div class="label">
                            <input type="checkbox" name="bothies" value="yes">
                            Bothies
                        </div>
                    </div>
                </div>
                <button class="default-btn" onclick="myFunction()">Search</button>
            </div>
        </form>
    </main>
    <?php require_once "inc/footer.php"; ?>
</body>

</html>