<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pujan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Home Page</title>
</head>
<body>
    <div class="menu-bar">
        <h1 class="logo">Quick<span>Fix</span></h1>
        <ul>
            <li><a href="#">Services</a></li>
            <li><button>BookNow</button></li>
            <li>
                <?php if (isset($_SESSION['username'])): ?>
                    <a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a>
                <?php else: ?>
                    <a href="login.html">Login/Signup</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>

    

    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome to Our Services</h1>
            <p>Find the best services tailored for you</p>
            <div class="search-box">
                <input type="text" placeholder="Search for services...">
                <button>Search</button>
            </div>
        </div>
    </div>
</div>
<div class="serviceSection">
  <!-- Handyman Services Section -->
  <section class="handyman-services">
            <h2>Our Services:</h2>
            <div class="card-container">
                <a href="plumbing.html">
                    <div class="card">
                        <img src="plumbing.jpg" alt="plumbing">
                        <h3>plumbing</h3>
                    </div>
                </a>
               
                <a href="painting.html">
                <div class="card">
                    <img src="painting.jpg" alt="Painting">
                    <h3>Painting</h3>
                    </a>
                </div>

                <a href="carpenter.html">
                <div class="card">
                    <img src="carpenter.jpg" alt="carpenter">
                    <h3>Carpenter</h3>
                </div>
                </a>
                <a href="moving.html">
                    <div class="card">
                        <img src="moving.jpg" alt="Moving">
                        <h3>Moving</h3>
                    </div>
                </a>
                <!-- <div class="card">
                    <img src="moving.jpg" alt="Moving">
                    <h3>Moving</h3>
                </div> -->
                <a href="electrician.html">
                <div class="card">
                    <img src="Electrical.jpg" alt="Electrical">
                    <h3>Electrical</h3>
                </div>
                </a>
            </div>
        </section>
    </div>

    <div class="advertisement">
        <div class="ad-text">
            <h2>Special Offer!</h2>
            <p>Get 20% off on all handyman services this summer. Hurry up and book your service now!</p>
            <button>Learn More</button>
        </div>
        <div class="ad-image">
            <img src="adimg.jpg" alt="Handyman Services">
        </div>
    </div>
    


    <footer>
        <div class="footerContainer">
            <div class="contactus">
                <h2>Contact Us</h2>
                <p>Email:rpsb234@gmail.com</p>
            </div>
            <div class="socialIcons">
                <a href="https://www.facebook.com/" target=”_blank”><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/" target=”_blank”><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/?lang=en" target=”_blank”><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/@rajeshniure567" target=”_blank”><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul><li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Our Team</a></li>
                </ul>
            </div>
            
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Quickfix, Inc. All Rights Reserved</p>
        </div>
    </footer>

  </body>
</html>