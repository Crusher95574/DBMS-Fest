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
        <a href="event-admin-add.php"> ADD Event</a>
            <a href="event-admin-delete.php"> DELETE Event</a>
            <a href="add_judge.php"> ADD judge</a>
            <a href="add_sponsor.php"> Add sponsor</a>
            <a href="judge.php">judgement</a>
            <button class="btnLogin-popup">Logout</button>
        </nav>
    </header>

    <div class="wrapper-judge">
        <div class="form-box profile">
            <h2>Judging</h2>
            <form action="#" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></ion-icon></span>
                    <input type="text" id="name" name="name" required>
                    <label for="name">Event Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email">Student Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <input type="text" id="name" name="name" required>
                    <label for="name">Score</label>
                </div>
                <div><img src="assets\pexels-mati-mango-5952651.jpg" style="width: 280px"></div>



                <button type="submit" class="btn">Update</button>
            </form>
        </div>

    </div>
    //query likhni hai ye event ka poin etc calculate karke jama karne ke liye hai iske basis se winners nikalenge

    <video id="background-video" autoplay loop muted poster="pexels-andre-moura-4021521.jpg">
        <source src="pexels-oleg-gamulinskii-3163534-3840x2160-30fps.mp4" type="video/mp4">
    </video>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>