<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">


<style>


body {
    position: fixed;
  font-family: Arial;
  background-color: black;
  font-size: 17px;
}

#myVideo {
    width: 70vw;
    height: 67.5vh;
    object-fit: cover;
    position: fixed;
    left: 15rem;   
    top: 7rem;   
    z-index: -1;
}

.content {
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  z-index: 1000;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 15rem;
  border: none;
  background: none;
  color: #fff;
margin-left:35rem;
}



</style>
</head>
<body>


<video id="myVideo" autoplay muted >
    <source src="assets/fest-4k.mp4" type="video/mp4">
</video>

<div class="content">
  <button id="myBtn" onclick="myFunction()"></button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");
function myFunction() {
  if (video.play) {
    window.location="index.php"
  }
}
</script>

</body>

</html>