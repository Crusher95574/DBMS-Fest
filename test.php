<?php
include("database.php");
$sql="SELECT  * FROM event";
$result=mysqli_query($conn,$sql);
?>
   <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="container-1">
            <div class="wrap">
                <div class="tile">
                     <img src='<?php echo $row["image"]; ?>'/>
                    
                    <div class="text">

                        <?php echo "<h1>" . $row["event_name"] . "</h1>" . "<br>"; ?>
                        <?php echo "<h2 class='animate-text'>" . $row["judge"] . "</h2>" . "<br>"; ?>
                        <?php echo "<p class='animate-text'>" . $row["description"] . "</p>" . "<br>"; ?>


                    </div>
                </div>

            </div>

        </div>
    <?php
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>