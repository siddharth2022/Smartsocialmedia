<?php

if(!isset($_COOKIE["username"]) )
{
  header("location: ../index.html");
}
else
{
  setcookie("user_name",$_COOKIE["username"]);
  $notif = "python ../python_files/get_notification.py";
  $param = $notif." ".$_COOKIE['username'];
  $notif = shell_exec($param);
  $notif=explode(",", $notif);
  $count=0;  
  for($i=0;$i<(sizeof($notif)/5)-1;$i++)
    if($notif[$i*5+4]==1)
      $count++;

      $str = "python ../python_files/get_mirror.py";
     
      
    $mirror = shell_exec($str);

  $str = "python ../python_files/get_info.py";
	$param=$str." ".$_COOKIE['username'];
	
$info = shell_exec($param);
//$info = "sid yadav 2021";
$words = explode(",", $info);
//print_r($info);
//print_r($words);
$name = $words[0];
$surname = $words[1];
$state = $words[2];
$country = $words[3];
$dob = $words[4];
$profile_pic = $words[5];

//print $profile_pic;

$profile_pic="../".$profile_pic;

$dob=explode("-",$dob);


}
if(1==1)
{

?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

</style>
<body class="w3-theme-l5">

      <form id="labnol" method="get" action="https://www.google.com/search">
        <div class="speech">
          <input type="text" style="height:1px;width:1px;" nname="q" id="transcript" placeholder="Speak" />
          <img onLoad="startDic()" style="height:1px;width: 1px;" src="//i.imgur.com/cHidSVu.gif" />
      
          </div>
      </form>
      <script>
			var home_pass=0;
              
            function startDic(){
                responsiveVoice.setDefaultVoice("US English Female"); 
				setTimeout(startDictation,.1);
              
            }
            
            
            function sleep(delay) {
                var start = new Date().getTime();
                while (new Date().getTime() < start + delay);
              }
          function startDictation()  {
			
			  if(home_pass==0){
			responsiveVoice.speak("Welcome To the Social Media");
      responsiveVoice.speak("Connect with friends, family and... other people... you know");home_pass=1;}
      else if(home_pass==2)
      {
        responsiveVoice.speak("What Status You want to post?");
      }
              if (window.hasOwnProperty('webkitSpeechRecognition')) {
                
              var recognition = new webkitSpeechRecognition();
        
              recognition.continuous = true;
              recognition.interimResults = false;
        
              recognition.lang = "en-US";
              recognition.start();
				
              recognition.onresult = function(e) {
        console.log(e.results[0][0].transcript);
        if(home_pass==1){
				  	if(e.results[0][0].transcript.replace(/ /g,'')=="switchonthemirroreffect" || e.results[0][0].transcript.replace(/ /g,'')=="switchonmirroreffect")
					  {                 	document.getElementById('mir').click(); }
            
				    
				  	if(e.results[0][0].transcript.replace(/ /g,'')=="closemirroreffect" || e.results[0][0].transcript.replace(/ /g,'')=="closemirroreffect")
					  {                   	document.getElementById('mir1').click(); }
            if(e.results[0][0].transcript.replace(/ /g,'')=="opennotifications" || e.results[0][0].transcript.replace(/ /g,'')=="openmynotifications" || e.results[0][0].transcript.replace(/ /g,'')=="opennotification" || e.results[0][0].transcript.replace(/ /g,'')=="openmynotification")
					  {                 	document.getElementById('notif').mousehover(); }
            if(e.results[0][0].transcript.replace(/ /g,'')=="gotohomepage" || e.results[0][0].transcript.replace(/ /g,'')=="gotomywall" || e.results[0][0].transcript.replace(/ /g,'')=="openmyposts" || e.results[0][0].transcript.replace(/ /g,'')=="openmyfeed")
					  {           //      	document.getElementById("homing").click(); }
            openPage('homing', this, 'grey');
            }
            if(e.results[0][0].transcript.replace(/ /g,'')=="gotofriendpage" || e.results[0][0].transcript.replace(/ /g,'')=="gotofriend" || e.results[0][0].transcript.replace(/ /g,'')=="openmyfriend" || e.results[0][0].transcript.replace(/ /g,'')=="listmyfriend")
					  {           //      	document.getElementById("homing").click(); }
            openPage('friends', this, 'grey');
            }
            if(e.results[0][0].transcript.replace(/ /g,'')=="openmessages" || e.results[0][0].transcript.replace(/ /g,'')=="gotomymessages" || e.results[0][0].transcript.replace(/ /g,'')=="openmychats" || e.results[0][0].transcript.replace(/ /g,'')=="openmymessages"||e.results[0][0].transcript.replace(/ /g,'')=="openmessage" || e.results[0][0].transcript.replace(/ /g,'')=="gotomymessage" || e.results[0][0].transcript.replace(/ /g,'')=="openmychat" || e.results[0][0].transcript.replace(/ /g,'')=="openmymessage")
					  {           //      	document.getElementById("homing").click(); }
            openPage('messages', this, 'grey');
            }
            if(e.results[0][0].transcript.replace(/ /g,'')=="signout" || e.results[0][0].transcript.replace(/ /g,'')=="logout"||  e.results[0][0].transcript.replace(/ /g,'')=="closemyaccount" || e.results[0][0].transcript.replace(/ /g,'')=="iwanttosignout" || e.results[0][0].transcript.replace(/ /g,'')=="iwanttologout")
					  {           //      	document.getElementById("homing").click(); }

                signout2();
            }
            if(e.results[0][0].transcript.replace(/ /g,'')=="iwanttopostsomething" || e.results[0][0].transcript.replace(/ /g,'')=="iwanttopost" || e.results[0][0].transcript.replace(/ /g,'')=="Iwanttopostsomething" || e.results[0][0].transcript.replace(/ /g,'')=="Iwanttopost")
					  {           //      	document.getElementById("homing").click(); }

              home_pass=2;
            }
            
          }
          if(home_pass==2)
          {
            document.getElementById("post_content").innerHTML = e.results[0][0].transcript;
          }
                setTimeout(startDictation,1);

					console.log(pass);
                recognition.stop();


                  
              };
        
              recognition.onerror = function(e) {
                recognition.stop();
              }
        
            }
          }
        </script>
        
      

<!-- Navbar -->
<div  class="w3-top mirror-sid">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a   hef="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i><?php echo $name; ?></a>
  <a onclick="openPage('homing', this, 'grey')" id="defaultOpen" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="your wall"><i class="fa fa-globe"></i></a>
  <a onclick="openPage('friends', this, 'grey')" hrf="../friends/index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="friends"><i class="fa fa-user"></i></a>
  <a onclick="openPage('messages', this, 'grey')" hre="../messages/index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <!--- Remove Notification tag script -->
  <script>


  function remove_tag(){
    remove_tag1();
    <?php
    $str = "python ../python_files/remove_tag.py";
	$param=$str." ".$_COOKIE['username'];
	
$info = shell_exec($param);
?>
  }

    </script>
<?php
if($mirror==1)
{
  ?>
  <style>
    .mirror-sid:hover{
      transform:scaleX(-1);
    }
    </style>
<?php } else {?>
    <style>
    .mirror-sid:hover{
      .mirror-sid:hover{
      transform:scaleX(-1);
    }
    </style>

    
   
  <?php
}

?>

  <div class="w3-dropdown-hover w3-hide-small">
    <button onmousehover="remove_tag()" id="notif" class="w3-button w3-padding-large" title="Notifications"><i class="fa fa-bell"></i><span id="tag" onclick="remove_tag()" class="w3-badge w3-right w3-small w3-green" ><?php echo $count; ?></span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
      <?php for($i=0;$i<(sizeof($notif)/5)-1;$i++){ ?>
      <a href="../<?php echo $notif[$i*5+3]; ?>" class="w3-bar-item w3-button"><img src="../<?php echo $notif[$i*5+2]; ?>" style="height:30px;width:30px"/><?php echo $notif[$i*5+1]; ?></a>
<?php } ?>
      </div>
  </div>
  <i  onclick="signout2()" id="signout1" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white fa fa-sign-out"></i>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="<?php echo "../images/".$profile_pic; ?>" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
  <?php if($mirror==0) {?>
  <input id="mir" type="button"  onclick="on_mirror_mode()" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" value="Mirror Effect:OFF" /> 
  <?php }
  if($mirror==1){?>
  <input id="mir1" type="button"  onclick="on_mirror_mode()" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" value="Mirror Effect:ON" /> 
  <?php } ?>
  </div>
</div>

<script>
  function signout2(){
    <?php
      unset($_COOKIE["username"]);
      ?>
      window.location="../index.html"; 
  }
  </script>

<script>
function on_mirror_mode(){
<?php

if($mirror==0)

$str = "python ../python_files/on_mirror.py";
else
$str = "python ../python_files/off_mirror.py";

$info = shell_exec($str);
?>
window.location="../home/index.php"; 
}  
</script>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large mirror-sid">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3 ">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white ">
        <div class="w3-container mirror-sid">
         <h4 class="w3-center mirror-sid">My Profile</h4>
         <p class="w3-center"><img src="  <?php print_r ("../images/".$profile_pic); ?> ?>class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         
         <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-text-theme"></i> Dharmsinh Desai University</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php echo $state; echo ","; echo $country; ?> </p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $dob[2][0];echo $dob[2][1]; echo "/";echo $dob[1];echo "/";echo $dob[0]; ?></p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round mirror-sid">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="../images/lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="../images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="../images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small mirror-sid">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="mirror-sid w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>
    
    
    </div>
        

<div id="homing" class="tabcontent">
  

      <!----------------------------- POSTS FEED WALL -------------->
    <div class="w3-col m7">
    
      <div class="w3-row-padding mirror-sid">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Welcome to Smart Social Media</h6> 
              <p contenteditable="true" id="post_content" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
              <button type="button" class="w3-button w3-theme"><i class="fa fa-image"></i>  Attach Image</button> 
              <input type="file" class="w3-button w3-theme"/>
              <select name="private_post">
  <option value="public">public</option>
  <option value="private">private</option>
  
</select>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin mirror-sid"><br>
        <img src="../images/arshit.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>Arshit Vaghasiya</h4><br>
        <hr class="w3-clear">
        <p>Because when you stop and look around, Life is pretty amazing !</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="../images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="../images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
      
        </div>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>
  
      <?php 
  $str = "python ../python_files/get_post.py";
	$param=$str." ".$_COOKIE['username'];
	
$info = shell_exec($param);
//$info = "sid yadav 2021";
$words = explode("~", $info);

//print_r($words);

for($i=0;$i<(sizeof($words)/8)-1;$i++)
{
?>


      <div class="mirror-sid w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="../<?php echo $words[$i*8+4]; ?>" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4><?php echo $words[$i*8+7]; ?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $words[$i*8+2]; ?></p>
        <?php
         if($words[$i*8+5]==1)
        {?>
        <img src="../<?php echo $words[$i*8+6]; ?>" style="width:100%" class="w3-margin-bottom">
        
         <?php
        }?>
<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
      </div>  
<?php } ?>
     
      
     
    <!-- End Middle Column -->
    </div>
    
  <!-- Right Column -->
  <div class="w3-col m2 mirror-sid">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="../images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      
      </div>
</div>
      

<div id="friends" class="tabcontent">
  
 <?php
  
$str = "python ../python_files/get_user_list.py"." ".$_COOKIE['username'];
$info = shell_exec($str);
//$info = "sid yadav 2021";
$words = explode(",", $info);
	
$str = "python ../python_files/get_user_link.py";
$info = shell_exec($str);
//$info = "sid yadav 2021";
$user_link = explode(",", $info);
?>
      <div class="w3-col m7">
      
      <div class="w3-row-padding">
  
  <div class="w3-container">
    
  
    <div class="w3-card-4 w3-grey mirror-sid" style="width:30%;margin-top:0%;margin-left:0%">
  
      <div class="w3-container w3-center">
        <h3>Friend Request</h3>
        <img src="../images/arshit.jpg" style="height:200px;width:200px" alt="Avatar" style="width:80%">
        <h5>Arshit Vaghasiya</h5>
  
        <div class="w3-section">
          <button class="w3-button w3-green">Accept</button>
          <button class="w3-button w3-red">Decline</button>
        </div>
      </div>
  
    </div>
  
    <style>

</style>
  <div style="padding:5%;text-align:center">
  <label style="background-color:grey;color:white;font-size:45px;border-radius:15px;width:90%;" class="mirror-sid">Users On the social media </label>
  </div>
  <?php for($i=0;$i<sizeof($words)-1;$i++)
  {
 
  ?>
    
    <div class="w3-card-4 mirror-sid" style="width:30%;margin-top:<?php if(($i%4)!=0) echo "-43"; ?>%;margin-left:<?php echo ($i%4)*35; ?>%;">
  
  <div class="w3-container w3-center">
    <h3></h3>
    <img src="../<?php  $user_pic = explode(" ", $user_link[$i]); echo $user_pic[1]; ?>" style="height:200px;width:200px" alt="Avatar" style="width:80%">
    <h5><?php echo $words[$i]; ?></h5>
  
    <div class="w3-section">
      <input type="button" class="w3-button w3-green" value="Add Friend" id="request<?php echo $i; ?>" onClick="send_request()"  style="font-size:13px" />
      <input type="button" class="w3-button w3-red" value="Remove" id="remove<?php echo $i; ?>" onClick="send_request()" style="font-size:13px" />
    </div>
  </div>
  </div>
<script>
  function send_request(){
   
    document.getElementById("tt").type="hidden";
   alert("hh");
  }
</script>

  <?php } ?>
  
  </div>
<br><br>
</div>
</div>

</div>
  
   


<div id="messages" class="tabcontent">


<div class="w3-col m7">
      
      <div class="w3-row-padding">
  
  <div class="w3-container">
 

<h2>Messages</h2>
<p>Welcome to the Smart Social Media Messages Service:</p>
<ul class="w3-ul w3-card-4">
  <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">hide</span>
    <img src="../images/avatar3.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
    <div class="w3-bar-item">
      <span class="w3-large">Mike</span><br>
      <span>Web Designer</span>
    </div>
  </li>

  <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">hide</span>
    <img src="img_avatar5.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
    <div class="w3-bar-item">
      <span class="w3-large">Jill</span><br>
      <span>Support</span>
    </div>
  </li>

  <li class="w3-bar">
    <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">hide</span>
    <img src="img_avatar6.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
    <div class="w3-bar-item">
      <span class="w3-large">Jane</span><br>
      <span>Accountant</span>
    </div>
  </li>
</ul>
</div>
</div>
</div>
</div>
</div>
<footer class="mirror-sid w3-container w3-theme-d3 w3-padding-16">
  <h5>Made by, Siddharth & Arshit</h5>
</footer>


 
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
   

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html> <?php } ?>