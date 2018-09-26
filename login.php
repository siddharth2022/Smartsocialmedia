<?php
$state=1;

$str ="&nbsp;Welcome to The Social Media";
if(isset($_POST['name']) && isset($_POST['surname'])&& isset($_POST['mobileno'])&& isset($_POST['email'])&& isset($_POST['pass'])&& isset($_POST['dob']) )
{
	
	$name=$_POST['name'];
	
	
	$surname=$_POST['surname'];
	$param =$name." ".$surname." ".$_POST['mobileno']." ".$_POST['email']." ".$_POST['pass']." ".$_POST['dob'];	
	$str = "python python_files/signup.py";
	$param=$str." ".$param;
	$output = shell_exec($param);
	//echo $param;
	//echo $output;
	if($output==0)
	$str="Account Created Successfully!";
	else
	$str = "Failed to create new account";
}

else if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$param=$_POST['username']." ".$_POST["password"];
	$str = "python python_files/login.py";
	$param=$str." ".$param;
	$output = shell_exec($param);
	
	if(!isset($output))
	$str = "  &nbsp;&nbsp;&nbsp;&nbsp; Username does not exist !";
	elseif($output==0)
	$str ="  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logged in Successfully  !";
	else
	$str = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password Not Match     !";
	
}

?>

<script src='https://code.responsivevoice.org/responsivevoice.js'></script>


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
			responsiveVoice.speak("What ..is.. your  username?");
			else if(pass==1)
			responsiveVoice.speak("What ..is.. your  password?");
			else if(pass!=3)
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
                  	document.getElementById('uname').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=1;
					  }
                   	else if (pass==1){
				   	document.getElementById('password').value
                                         = e.results[0][0].transcript.replace(/ /g,'');
					pass=2;
					
					}
					else if(pass==2)
					{
						if(e.results[0][0].transcript.replace(/ /g,'')=="yes")
						document.getElementById('login').click();
						{
							pass=3
						}

					}
					
					console.log(pass);
                recognition.stop();


					if(pass!=3)
                setTimeout(startDictation,2000);

                  
              };
        
              recognition.onerror = function(e) {
                recognition.stop();
              }
        
            }
          }
        </script>
        
      
          


<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Social Media</title>
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
</head>
<body>
	
	<div class="limiter" >
		<div class="container-login100" >
		
			<div class="wrap-login100" style="text-align: center;width:70%" >
			<div class="row" style="font-size:24px;padding:15px;width:55%;margin-top:-15%;margin-left:25%;background-color:skyblue;border-radius:25px; color:blueviolet;height:55px;"><b><?php echo $str; ?></b></div>
			<div class="row">
			
				<div  class="col-md-8 login100-pic js-tilt" data-tilt>
					<img style="margin-left:%" src="images/img-01.jpg" alt="IMG">
					
				</div>
	<div class="col-md-4">
				<form action="./login.php" method="POST" name="form-name" class="login100-form validate-form" style="margin-top:-20px;margin-left:39%;">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" id="uname" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button id="login" class="login100-form-btn">
							Login
						</button>
					</div>
<br><br><br></div>
				</form>
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