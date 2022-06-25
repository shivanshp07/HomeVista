<?php
    if(isset($_SESSION['username']))
    {
        $_SESSION['msg'] = "You must login first to view this page";
        header("location : login.php");
    }

    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header("Location : login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta Estate</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div>
        <?php
            if(isset($_SESSION['success'])) : ?>
                 <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
                <?php endif ?>
    </div>
        
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.php" class="logo"><i class="bx bx-home"></i>Meta Estate</a>
            <!-- Menu Icon-->
            <input type="checkbox" name="" id="menu">
            <label for="menu" ><i class="bx bx-menu" id="menu-icon"></i></label>
            <!-- Nav List -->
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#sales">Sales</a></li>
                <li><a href="#properties">Properties</a></li>
            </ul>
            <!-- log in Buton -->
            <a href="login.php" class="btn">Log In</a>
        </div>
    </header>
    <!-- Home -->
    <section class="home container" id="home">
        <div class="home-text">
            <h1>Find Your next <br>Perfect Place To <br>Live.</h1>
            <a href="sign-up.php" class="btn">Sign Up</a>
        </div>
    </section>
    <!-- About -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <span>About Us</span>
            <h2>We Provide The Best <br>Property For You !</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vitae quas dolor modi, exercitationem earum tempora ipsam facilis corrupti, odit ut mollitia natus, cupiditate illo reiciendis perferendis deleniti eum dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vitae quas dolor modi, exercitationem earum tempora ipsam facilis corrupti, odit ut mollitia natus, cupiditate illo reiciendis perferendis deleniti eum dolore.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vitae quas dolor modi, exercitationem earum tempora ipsam facilis corrupti, odit ut mollitia natus, cupiditate illo reiciendis perferendis deleniti eum dolore.</p>
            <a href="404_page.html" class="btn">Learn More</a>
        </div>
    </section>
    <!-- Sales -->
    <section class="sales container" id="sales">
        <!-- Box 1 -->
        <div class="box">
            <i class="bx bx-user"></i>
            <h3>Make Your Dream True</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maiores!</p>
        </div>
        <!-- Box 2 -->
        <div class="box">
            <i class="bx bx-desktop"></i>
            <h3>Start Your Membership</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maiores!</p>
        </div>
        <!-- Box 3 -->
        <div class="box">
            <i class="bx bx-home-alt"></i>
            <h3>Enjoy Your New Home</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, maiores!</p>
        </div>
    </section>
    <!-- Properties -->
    <section class="properties container" id="properties">
        <div class="heading">
            <span>Recent</span>
            <h2>Our Featured Properties</h2>
            <p>Lorem ipsum dolor sit, amet consectetur <br> adipisicing elit. Recusandae, perferendis.</p>
        </div>
        <div class="properties-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="img/p1.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath" ><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="img/p2.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath" ><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="img/p3.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath" ><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img src="img/p4.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath" ><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 5 -->
            <div class="box">
                <img src="img/p5.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath"><span>2</span></i>
                    </div>
                </div>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img src="img/p6.jpg" alt="">
                <h3>$10,999</h3>
                <div class="content">
                    <div class="text">
                        <h3>The Palace</h3>
                        <p>Rajshahi, BD</p>
                    </div>
                    <div class="icon">
                        <i class="bx bx-bed"><span>5</span></i>
                        <i class="bx bx-bath" ><span>2</span></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NewsLetter -->
    <section class="newsletter container">
        <h2>Have Question in Mind ? <br>Visit Our Facebook Page</h2>
        <a href="https://www.facebook.com/Meta-Estate-1717723155161789" class="btn">Click Here</a>
    </section>
    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2>Meta State</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="https://www.iqiglobal.com/blog/top-10-international-real-estate-agencies/">Agency</a>
                <a href="https://www.swfinstitute.org/fund-rankings/real-estate-company">Building</a>
                <a href="https://www.statista.com/statistics/1289905/global-real-estate-market-size/">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="https://visitbirmingham.com/">Birmingham</a>
                <a href="https://www.visitlondon.com/">London</a>
                <a href="https://www.nycgo.com/">New York</a>
            </div>
            <div class="footer-box">
                <h3>Contacts</h3>
                <a href="tel:+880 1763170733">+880 1763170733</a>
                <a href="mailto:fahad.bauet@gmail.com">fahad.bauet@gmail.com</a>
                <div class="social">
                    <a href="#"><i class="bx bx1-facebook"></i></a>
                    <a href="#"><i class="bx bx1-twiteer"></i></a>
                    <a href="#"><i class="bx bx1-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; Fahad.inc All Rights Reserverd</p>
    </div>
</body>
</html>