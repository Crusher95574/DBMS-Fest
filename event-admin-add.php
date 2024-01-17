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
            <form action="event-admin-add.php" method="post"enctype="multipart/form-data">
                <div class="input-box">
                    <span class="icon"><ion-icon name="book"></ion-icon></span>
                    <input type="text"  name="eventname" required>
                    <label for="name">Event Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="calendar"></ion-icon></span>
                    <input type="text"  name="time" required>
                    <label for="name">Time and Date</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                    <input type="text"  name="judge" required>
                    <label for="name">Prize money</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="brush"></ion-icon></span>
                    <input type="text"  name="description" required>
                    <label for="name">Description</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="image"></ion-icon></span>
                    <label for="image"></label>
                    <input type="file" class="form-control" required name="upload">
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Event Poster final</label>
                </div>
                <button type="submit" name="submit" class="btn">Add event</button>
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
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, "eventname", FILTER_SANITIZE_SPECIAL_CHARS);
    $judge = filter_input(INPUT_POST, "judge", FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
    $time = filter_input(INPUT_POST, "time", FILTER_SANITIZE_SPECIAL_CHARS);
    $img_name = $_FILES['upload']['name'];
    $tmp_name = $_FILES['upload']['tmp_name'];
   

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $allowed_exs = array("jpg", "jpeg", "png"); 

    if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
        $img_upload_path = './assets/' . $new_img_name;

        if (move_uploaded_file($tmp_name, $img_upload_path)) {
            // File successfully uploaded
            $query = "INSERT INTO event (event_name, judge, e_description, e_image, timeDate) 
                      VALUES ('$name', '$judge', '$description', '$new_img_name', '$time')";
            $result = mysqli_query($conn, $query);
        } else {
            // Error moving uploaded file
            echo "<script>alert('Error uploading file.')</script>";
        }
    } else {
        // Invalid file type
        echo "<script>alert('Invalid file type.')</script>";
    }
}
?>