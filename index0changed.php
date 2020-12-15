<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- navigation section -->
    <div class="nav-bar">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="We-Support logo">
        </a>
         
        <div class="nav-links">
            <a href="campaigns.php">CAMPAIGNS</a>
            <a href="donors.php">DONORS</a>
            <a href="video.php">ABOUT</a>
            <a href="gallery.php">GALLERY</a>
            <a href="faq.php">FAQS</a>
        </div>

        <div class="btn-login-signup">
            <button type="submit" id="btn-login" onclick="window.location.href='login.php'">LOGIN</button>
            <button type="submit" id="btn-signup" onclick="window.location.href='signup.php'">SIGN UP</button>
        </div>
    </div>

    <!-- body part -->

    <img src="assets/images/canvas.png" alt="" id="canvas-image">
    <div class="banner">
        <img src="assets/images/banner.png" alt=""><br><br>
        <span id="banner-quote">
            "You'll Never become <br> poor by giving."
        </span>
    </div>

    <div class="get-started">
        <span id="create-campaign">
            <!-- CREATE YOUR OWN CAMPAIGN -->
        </span>

        <button type="submit" onclick="window.location.href='signup.php'">GET STARTED</button>
    </div>
    
<br>
<?php
    include_once 'footer.php';
?>