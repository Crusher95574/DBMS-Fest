<?php
include("database.php");
$sql="SELECT  * FROM events";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horizon 2K23</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h2 class="logo">Horizon</h2>
        <nav class="navigation">
        <a href="index-loggedin.php">Home</a>
            <a href="event-loggedin.php">Event</a>
            <a href="winners-loggedin.php">Winners</a>
            <a href="profile.html">Profile</a>
            <a href="sponsors-loggedin.php">Sponsors</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I Agree to terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>

    </div>

    <div class="all-event">

        <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="container-1">
            <div class="wrap">
                <div class="tile">
                    <img src='assets\pexels-bruno-thethe-1910236.jpg' />
                    <div class="text">

                        <?php echo "<h1>" . $row["winner_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["position"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["event_name"] . "</p>" . "<br>"; ?>


                    </div>
                </div>
//divay bhai card same event jaisa rahega bas details upar ki tarah aayega aur image sabka ek tarah ka hai to wo fetch karne ki jarurat nahi hai
            </div>
            <h1 class="headline-1">Winners</h1>
        </div>
        
        <?php
    }
    ?>

    </div>


    <video id="background-video" autoplay loop muted poster="pexels-andre-moura-4021521.jpg">
        <source src="pexels-oleg-gamulinskii-3163534-3840x2160-30fps.mp4" type="video/mp4">
    </video>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>