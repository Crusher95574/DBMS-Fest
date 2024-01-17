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
            <a href="sponsors.php">Sponsors</a>
            <button class="btnLogin-popup">Logout</button>
        </nav>

    </header>

    <div class="wrapper-profile">
        <div class="form-box profile">
            <img src="assets\pexels-andre-moura-4021521.jpg" width="300px" alt="Update your profile to add image">
        </div>

    </div>
    <div class="wrapperdetail">
        <div class="form-box profile">
            <h2>Profile</h2>
            <h3 class="info">Name : adfafjafj</h3>
            <h3 class="info">Email : ajshdh@hsd.com</h3>
            <form>
                <button type="submit" class="btn-editprofile" onclick="Redirec();">Edit Profile</button>
            </form>
        </div>

    </div>

    <div class="wrapper-profile">
        <div class="form-box profile">
            <h2>Participated Events</h2>

            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="profile-events" id="style-3">

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>
                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>
                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>
                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

                <div class="tile-p">
                    <img src='<?php echo $row["e_image"];?>' />
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["e_description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>



            </div>
            <?php
                }
                ?>


        </div>

    </div>



    <video id="background-video" autoplay loop muted poster="pexels-andre-moura-4021521.jpg">
        <source src="pexels-oleg-gamulinskii-3163534-3840x2160-30fps.mp4" type="video/mp4">
    </video>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>