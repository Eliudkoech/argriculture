<?php
$pages = ['home', 'about', 'services', 'gallery', 'contact'];
$page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($page); ?> - Agriculture Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the place where natural flavor is born</h1>
        <nav>
            <ul>
                <li><a href="index.php?page=home" class="<?php echo $page === 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="index.php?page=about" class="<?php echo $page === 'about' ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="index.php?page=services" class="<?php echo $page === 'services' ? 'active' : ''; ?>">Services</a></li>
                <li><a href="index.php?page=gallery" class="<?php echo $page === 'gallery' ? 'active' : ''; ?>">Gallery</a></li>
                <li><a href="index.php?page=contact" class="<?php echo $page === 'contact' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        switch ($page) {
            case 'about':
                echo "<h2>About Us</h2>
                <div class='about-section'>
                    <p>We are dedicated to educating and supporting farmers by promoting modern and sustainable farming techniques.</p>
                    <div class='about-images'>
                        <img src='images/about1.jpg' alt='About Image 1'>
                        <img src='images/about2.jpg' alt='About Image 2'>
                    </div>
                </div>";
                break;
            case 'services':
                echo "<h2>Our Services</h2>
                <div class='services'>
                    <div class='service-item'>
                        <img src='images/soil-test.jpg' alt='Soil Testing'>
                        <p>Soil Testing Services</p>
                    </div>
                    <div class='service-item'>
                        <img src='images/irrigation.jpg' alt='Irrigation Solutions'>
                        <p>Irrigation Solutions</p>
                    </div>
                    <div class='service-item'>
                        <img src='images/pest-control.jpg' alt='Pest Control'>
                        <p>Pest Control Strategies</p>
                    </div>
                </div>";
                break;
            case 'gallery':
                echo "<h2>Gallery</h2>
                <div class='gallery'>
                    <img src='images/farm1.jpg' alt='Farm Image 1'>
                    <img src='images/farm2.jpg' alt='Farm Image 2'>
                    <img src='images/farm3.jpg' alt='Farm Image 3'>
                </div>";
                break;
            case 'contact':
                echo "<h2>Contact Us</h2><p>Email: info@agriculturehub.com | Phone: +254727045550</p>";
                break;
            default:
                echo "<div class='home-background'>
                        <h2>Welcome</h2>
                        <p>Welcome to our Agriculture Hub. Explore our services and learn more about sustainable farming.</p>
                      </div>
                      <div class='home-images'>
                          <img src='images/home1.jpg' alt='Home Image 1'>
                          <img src='images/home2.jpg' alt='Home Image 2'>
                          <img src='images/home3.jpg' alt='Home Image 3'>
                      </div>";
                break;
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Agriculture Hub. All Rights Reserved.</p>
    </footer>
</body>
</html>
