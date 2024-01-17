<?php
include("database.php");
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
        <a href="event-admin-add.php"> ADD Event</a>
            <a href="event-admin-delete.php"> DELETE Event</a>
            <a href="add_judge.php"> ADD judge</a>
            <a href="add_sponsor.php"> Add sponsor</a>
            <a href="judge.php">judgement</a>
            <button class="btnLogin-popup">Logout</button>
        </nav>
    </header>

    <div class="wrapper-event">
        <div class="form-box">
            <h2>Event</h2>
            <form action="#" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <input type="text" id="name" name="name" required>
                    <label for="name">Event Name</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> Permanently Delete the value</label>
                </div>
                <button type="submit" name="remove" class="btn">Remove event</button>
            </form>
        </div>

    </div>



    <video id="background-video" autoplay loop muted poster="pexels-andre-moura-4021521.jpg">
        <source src="pexels-oleg-gamulinskii-3163534-3840x2160-30fps.mp4" type="video/mp4">
    </video>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>

<?php
if(isset($_POST['remove']) ){
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    
    $sql = "delete from event where event_name='$name'";  
    if(mysqli_query($conn, $sql)){  
     echo "Record deleted successfully";  
    }else{  
    echo "Could not deleted record: ". mysqli_error($conn);  
    }  
}
?>
