$event = "CREATE TABLE event (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    judge VARCHAR(255) NOT NULL,
    e_description VARCHAR(255) NOT NULL,
    e_image VARCHAR(255),
    timeDate VARCHAR(255) NOT NULL
    )";
    $result=mysqli_query($conn,$event);


    $judge = "CREATE TABLE judge (
     judge VARCHAR(255)  PRIMARY KEY,
    judge_qualification VARCHAR(255) ,
    judge_education VARCHAR(255),
    judge_image VARCHAR(255)
    )";
    $result=mysqli_query($conn,$judge);

    insert judge
    
    $judge_insert = "INSERT INTO judge (judge,judge_qualification,judge_education,judge_image)
    VALUES ('John', 'Doe', 'johnajkafcjhbjc','laude ka image')";


$result=mysqli_query($conn,$judge_insert);



    $user = "CREATE TABLE user (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password_hash VARCHAR(255) NOT NULL,
        user_image VARCHAR(255) NOT NULL,
        UNIQUE ( email)
    )";
    $result=mysqli_query($conn,$user);

    $sponsor = "CREATE TABLE sponsor (
     sponsor_name VARCHAR(255)  PRIMARY KEY,
    sponsor_type VARCHAR(255) ,
    sponsor_image VARCHAR(255)
    )";
    $result=mysqli_query($conn,$sponsor);

    $winners = "CREATE TABLE winners (
        winner_id VARCHAR(255) PRIMARY KEY,
     name VARCHAR(255) ,
     position  VARCHAR(255) ,
     event_name VARCHAR(255) 
        )";
    $result=mysqli_query($conn,$winners);