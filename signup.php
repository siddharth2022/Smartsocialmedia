<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src='https://code.responsivevoice.org/responsivevoice.js'></script>

</head>
<body>

      <form id="labnol" method="get" action="https://www.google.com/search">
        <div class="speech">
          <input type="text" style="height:1px;width:1px;" nname="q" id="transcript" placeholder="Speak" />
          <img onLoad="startDic()" style="height:1px;width: 1px;" src="//i.imgur.com/cHidSVu.gif" />
      
          </div>
      </form>


        <script>
			var pass=0;
              
            function startDic(){
                responsiveVoice.setDefaultVoice("US English Female"); 
				setTimeout(startDictation,1);
              
            }
            
            
            function sleep(delay) {
                var start = new Date().getTime();
                while (new Date().getTime() < start + delay);
              }
          function startDictation()  {
			
			  if(pass==0)
			responsiveVoice.speak("What ..is.. your  Name?");
			else if(pass==1)
			responsiveVoice.speak("What ..is.. your  Surname?");
			else if(pass==2)
			responsiveVoice.speak("What ..is.. your  Mobile Number?");
			else if(pass==3)
			responsiveVoice.speak("What ..is.. your  Email?");
			else if(pass==4)
			responsiveVoice.speak("what password do you want to set?");
			else if(pass==5)
			responsiveVoice.speak("what is your birthdate");
			

			
			else if(pass==6)
			responsiveVoice.speak("Do you want to submit it?");
			
              if (window.hasOwnProperty('webkitSpeechRecognition')) {
                
              var recognition = new webkitSpeechRecognition();
        
              recognition.continuous = true;
              recognition.interimResults = false;
        
              recognition.lang = "en-US";
              recognition.start();
				
              recognition.onresult = function(e) {
				console.log(e.results[0][0].transcript.replace(/ /g,''));
				  	if(pass==0){
                  	document.getElementById('name').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=1;
					  }
                   	else if (pass==1){
				   	document.getElementById('surname').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=2;
					
					}
					else if (pass==2){
				   	document.getElementById('mobileno').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=3;
					
					}
					
					else if (pass==3){
				   	document.getElementById('email').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=4;
					
					}
					
					else if (pass==4){
				   	document.getElementById('password').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=5;
					
					}
					
					else if (pass==5){
				   	document.getElementById('dob').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=6;
					
					}
					
					else if(pass==6)
					{
						if(e.results[0][0].transcript.replace(/ /g,'')=="yes")
						document.getElementById('submit').click();
						{
							pass=7
						}

					}
					
					console.log(pass);
                recognition.stop();


					if(pass!=7)
                setTimeout(startDictation,2000);

                  
              };
        
              recognition.onerror = function(e) {
                recognition.stop();
              }
        
            }
          }
        </script>
        
      
          






	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100" style="width:70%">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-011.png" alt="IMG">
				</div>

				<form  action="./login.php" method="post" class="login100-form validate-form" style="margin-top:-80px;margin-right:10%;">
					<span  class="login100-form-title">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Sign Up
					</span>
					<div class = "row" style="width:150%">
					<div class="col">
					
					<div class="wrap-input100 validate-input"  data-validate = "Name Required">
						<input class="input100" type="text" id="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
</div>
<div class="col">
					
					<div class="wrap-input100 validate-input" data-validate = "Surname Required">
						<input class="input100" type="text" id="surname" name="surname" placeholder="Surname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
</div></div>

					<div style="width:140%" class="wrap-input100 validate-input" data-validate = "Enter Valid Mobile Number">
						<input class="input100" type="text" name="mobileno" id="mobileno" placeholder="Mobile Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
					</div>


					<div style="width:140%" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div style="width:140%" class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					
					<div style="width:140%" class="wrap-input100 validate-input" data-validate = "Birthdate Required">
						<input class="input100" type="date" id="dob" name="dob" placeholder="Birthdate">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>
					
					<div style="margin-left:10%"  class="container-login100-form-btn">
						<button  class="login100-form-btn" id="submit" style="margin-left:0%;margin-right:50%">
							Sign Up
						</button>
					</div>
					

</form>
			
					
					<div style="margin-left:80%;margin-top:-8.425%; " class="container-login100-form-btn">
					<a  href="login.php" >	<button style="width:130%" class="login100-form-btn" style="margin-left:%;margin-right:-0%">
					Login
						</button></a>
					</div>
</div>
</div>			
				
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>