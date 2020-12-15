<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <!-- navigation section -->
    <div class="nav-bar">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="Fund Raiser logo">
        </a>
         
        <div class="nav-links">
            <a href="campaigns.php">CAMPAIGNS</a>
            <a href="donors.php">DONORS</a>
            <a href="faq.php">FAQS</a>
        </div>

        <div class="btn-login-signup">
            <button type="submit" id="btn-signup" onclick="window.location.href='signup.php'">SIGN UP</button>
        </div>
    </div>

    <!-- body part -->

    <div class="banner">
        <img src="moh.jpg" alt=""><br><br>
        <span id="banner-quote">
            "You will Never be <br> poor by giving."
        </span>
    </div>

    <div class="successMessage">
         <!-- show message after user do complete signup and verify email-->
        <?php 
                    if(isset($_GET['emailverified'])) {
                        if($_GET['emailverified'] == "success") {
                            echo "You have successfully signed up and verified your email. Now you can login as organizer in Fund Raiser";
                        }
                    }
        ?>
        <!-- show message after password has been reset -->
        <?php 
                    if(isset($_GET['newpassword'])) {
                        if($_GET['newpassword'] == "passwordupdated") {
                            echo 'Your password has been reset. Now you can login to the system using new password';
                        }
                    }
        ?>
         <!-- show message in case of non authentic user -->
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "notauthenticuser") {
                            echo "You are not an authentic registered user.";
                        }
                    }
        ?>
        <!-- show message if password is not correct -->
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "invalidPassword") {
                            echo "You entered wrong password, Please enter a valid password. Or Reset your password if you forgot it";
                        }
                    }
        ?>
        <!-- show message if account is not verified -->
        <?php 
                    if(isset($_GET['account'])) {
                        if($_GET['account'] == "notverified") {
                            echo "This account has not been yet verified. An email was sent to ".$_SESSION['o_email']." on ".$_SESSION['o_date'] ;
                        }
                    }
        ?>
        <!-- show message if user tries to access login.inc.php directly -->
        <?php 
                    if(isset($_GET['login'])) {
                        if($_GET['login'] == "error") {
                            echo "OOPs! you tried to access the wrong page";
                        }
                    }
        ?>
    </div>
<br>
<!-- login box -->
    <div class="loginbox">
        <div class="boxone">
            <span id="logintext">Login For Organizer</span>
        </div>

        <div class="boxtwo">
            <br><br><br>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="username" placeholder="Username/E-mail" required><br><br>
                <input type="password" name="password" placeholder="password" required><br><br>
                <a href="resetPassword.php">forget password?</a><br>
                <input type="submit" name="submit" value="Login">
            </form>
            


        </div>
    </div>


<?php
    include_once 'footer.php';
?>