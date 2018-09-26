<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Social Media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    </head>
<body>


<style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
  
</style>




<form id="labnol" method="get" action="https://www.google.com/search">
  <div class="speech">
    <input type="text" name="q" id="transcript" placeholder="Speak" />
    <img onLoad="startDic()" src="//i.imgur.com/cHidSVu.gif" />

    </div>
</form>
<input  type='button' value='🔊 Play' />
<!-- HTML5 Speech Recognition API -->
<script>
    function startDic(){
        responsiveVoice.setDefaultVoice("US English Female");
      responsiveVoice.speak("Do you want to signup? or login?");
      
      setTimeout(startDictation, 2000);
      
    }
    
    function startDicwo(){
         
      responsiveVoice.speak("I want only you choice about login or signup... not any other bitch!!","US ENGLISH FEMALE");
      
      setTimeout(startDictation, 2000);
      
    }
    
    function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
      }
  function startDictation()  {
    
      if (window.hasOwnProperty('webkitSpeechRecognition')) {
        
      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
          if(e.results[0][0].transcript=="login")
        window.location.href = "../login.php";
          else if(e.results[0][0].transcript=="sign up")
              window.location.href = "../signup.php";
          else
              startDicwo();
          startDictation();
          
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>



</body>
</html>
