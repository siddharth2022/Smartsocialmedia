<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Speech Recognition</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <!-- load font awesome here for icon used on the page -->
<style>

body {
  background: #1e2440;
  color: #f2efe2;
  font-size: 16px;
  font-family: 'Kaushan Script', cursive;
  font-family: 'Shadows Into Light', cursive;
}
.container {
  position: relative;
  border: 1px solid #f2efe2;
  width: 40vw;
  max-width: 60vw;
  margin: 0 auto;
  border-radius: 0.1rem;
  background: #f2efe2;
  padding: 0.2rem 1rem;
  color: #1e2440;
  overflow: scroll;
  margin-top: 10vh;
}
.text-box {
  max-height: 70vh;
  overflow: scroll;
}
.text-box:focus {
  outline: none;
}
.text-box p {
  border-bottom: 1px dotted black;
  margin: 0px !important;
}
.fa {
  color: white;
  background: #1e2440;
  border-radius: 50%;
  cursor: pointer;
  margin-top: 1rem;
  float: right;
  width: 2rem;
  height: 2rem;
  display: flex !important;
  align-items: center;
  justify-content: center;
}
@media (max-width: 768px) {
  .container {
    width: 85vw;
    max-width: 85vw;
  }
.text-box {
    max-height: 55vh;
  }
}

</style>
  
  </head>
<body>
  <div class="container"> <!--page container -->
    <div class="text-box" contenteditable="true"></div> <!--text box which will contain spoken text -->
    <i class="fa fa-microphone"></i> <!-- microphone icon to be clicked before speaking -->
  </div>
  <audio class="sound" src="chime.mp3"></audio> <!-- sound to be played when we click icon => http://soundbible.com/1598-Electronic-Chime.html -->
  <script src="index.js"></script> <!-- link to index.js script -->
</body>
</html>