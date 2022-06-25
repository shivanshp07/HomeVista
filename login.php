<?php
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icon -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.php" class="logo"><i class="bx bx-home"></i>Meta Estate</a>
            
            <!-- log in Buton -->
            <a href="sign-up.php" class="btn">Sign Up</a>
        </div>
    </header>
    <!-- Log In -->
    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with your data that you entrered <br>during your registration</p>
            <!-- Login Form -->
            <form action="login.php" method="post">
                <span>Enter Your Email Address</span>
                <input type="email" name="email" id="" placeholder="yourmail@gmail.com" required>
                <span>Enter Your Password </span>
                <input type="password" name="password" id="" placeholder="Password" required>
                <input type="submit" name="login" value="Log In" class="buttom">
                <a href="error_page.html">Forget Password ?</a>
            </form>
            <a href="sign-up.php" class="btn">Sign Up Now</a>
        </div>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="img/login.jpg" alt="" >
        </div>
    </div>
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