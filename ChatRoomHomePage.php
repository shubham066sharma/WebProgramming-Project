<?php


?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="homepage.css" />
	<title> Chat Room </title>
	
	<style type="text/css">
        a:link{
           text-decoration:none;
          }	   <!-- underline/none -->
    a:visited{color:lightYellow;
	         }
    a:hover{background-color:Tomato;
	        color:white;
			text-decoration:none;
			font-weight:bold;
			}
	a:active{background-color:PaleGreen;
            }	
	img{
		margin-top:0px;
		height:153px;
		width:22%
	}		
	.your-centered-div{
		position: absolute;
		margin-right:0px;
		top: 62%;
		left: 79%;
		transform: translate(-50%, -50%);
	}
	.navbar{
	font-family:lato;
	width:100%;
	background-color:Yellow;
	overflow:auto;
}
.footer{
	text-align:center;
	position:fixed;
	left:0;
	bottom:0;
	width:100%;
	font-size:23px;
	font-weight:bold;
	background-color:MediumVioletRed;
	color:black;
}


#cf {
  position:absolute;
  top: 38%;
	right: 99.5%;
}

#cf img {
  position:absolute;
  left:0;
  -webkit-transition: opacity 1s ease-in-out;
  -moz-transition: opacity 1s ease-in-out;
  -o-transition: opacity 1s ease-in-out;
  transition: opacity 1s ease-in-out;
}

#cf img.top:hover {
  opacity:0;
}
.bottom,.top{
	width:560px;
	height:315px;
}
section{
	color:blue;
	height:3%;
}
body {
  background-image: url('https://cdn.pizap.com/pizapfiles/images/photo_backgrounds_textures_app05.jpg');
  background-attachment: fixed;
 background-size: cover;
}
h2{
	color:navy;
}
	</style>	 
<body>
	<div class="navbar">
		<a href="ChatRoomHomePage.php"> Home </a>
		<a href="signup.php"> Signup </a>
		<a href="login.php"> Login </a>
	</div>
	
<section align="center">
<p><h2> The Internet: transforming society and shaping the future through Chat- "Dave Barry"</h2></p>
</section>
<div class="para">	
	<p>
		<img src="44.png" alt=" Join Chat Room ">
	</p>
</div>



<div id="cf">
  <img class="bottom" src="2.jpg" />
  <img class="top" src="6.jpg" />
</div>



<iframe class="your-centered-div" width="560" height="315" src="https://www.youtube.com/embed/4CJxMV-P5sc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
   <div class="footer">
    <p>
		 Thank You for Visiting.<br>
		 <a href="mailto:shubham066sharma@gmail.com"> Click here to Contact Us  </a>
		
    </p>
	</div>
	
</body>
</html>
