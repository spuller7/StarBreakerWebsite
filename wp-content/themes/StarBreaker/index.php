<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="keywords" content="drop-down, select, jquery, plugin, fallback, transition, transform, 3d, css3" />
	<link rel="stylesheet" href="/StarBreakerWebsite/css/main-menu.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/StarBreakerWebsite/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/StarBreakerWebsite/css/subscribe.css"> <!-- Gem style -->
	<script src="/StarBreakerWebsite/js/modernizr.js"></script> <!-- Modernizr -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/StarBreakerWebsite/js/popup.js"></script> <!-- Gem jQuery -->
	<script src="/StarBreakerWebsite/js/modernizr.custom.63321.js"></script>
	<header class="header-login-signup" style="z-index: 5;" role="banner">


		<div class="header-limiter">

			<h1><a href="#">Star Breaker <span>Studios</span></a></h1>
	
			<nav>
				<a href="/starbreakerwebsite" class="selected">Home</a>
				<a href="/starbreakerwebsite/shitstorm/index.php">Games</a>
				<a href="#">Blog</a>
				<a href="#">Portfolio</a>

			</nav>
			</div>
			<nav class='main-nav' style="margin-top: -30px; margin-right: -10px;">
			<ul>
				<li><a class="cd-signin" href="#0">Sign in</a></li>
				<li><a class="cd-signup" href="#0">Join the Community</a></li>
			</ul>
			</nav>

		
		
	</header>
		<div id="bg">
		<img src="/StarBreakerWebsite/images/ssbackground.jpg" alt="">
	</div>
	<body class="news">
    	
	<div style="background-color: #A3A3A3; z-index: 1; min-width: 100%; height: 2em; opacity: .4;
	box-shadow:0px 2px #FFFF00; 
	">
	</div>
	<div style="margin-top: -25px;text-align: center; color:#FFFFFF; opacity: .9;">Support us on Kickstarter today!</div>
	<center><div style="min-width: 100%;">		
			<img src="/StarBreakerWebsite/images/sstitle.png" align="middle"alt="">

	</div><div style="margin-top: -8em;"><a href='#' class='button1'>Play Shitstorm</a></div>

	</center>
	<div>
	
	</div>
	<div id="container" style="opacity: .99">
	<div><div class="ih-item circle colored effect13 top_to_bottom"><a href="#">
			<div class="img"><img src="/StarBreakerWebsite/images/sos.png" alt="img">
			</div>
			<div class="info">
  				<div class="info-back">
    				<h3>Syndicate of Sailors</h3>
    			
  				</div>
			</div></a>
		</div></div>
	<div><div class="ih-item circle colored effect13 top_to_bottom"><a href="#">
			<div class="img"><img src="/StarBreakerWebsite/images/pic.png" alt="img">
			</div>
			<div class="info">
  				<div class="info-back">
    				<h3>The Hunter's Fable</h3>
    			
  				</div>
			</div></a>
		</div></div>
	<div><div class="ih-item circle colored effect13 top_to_bottom"><a href="#">
			<div class="img"><img src="/StarBreakerWebsite/images/ss.png" alt="img">
			</div>
			<div class="info">
  				<div class="info-back">
    				<h3>Shitstorm</h3>
    			
  				</div>
			</div></a>
		</div></div>
	<div><div class="ih-item circle colored effect13 top_to_bottom"><a href="#">
			<div class="img"><img src="/StarBreakerWebsite/images/sblogo.png" alt="img">
			</div>
			<div class="info">
  				<div class="info-back">
    				<h3>Star Breaker Studios</h3>
    				
  				</div>
			</div></a>
		</div></div>
</div>
	<div id="footer-box">
			<?php //logos ?>
			<div id='logos'>
				<ul>
					<li>
						<img src="/StarBreakerWebsite/images/unity-logo.png"/>
					</li>
					<li></li>
					<li>
						<img src="/StarBreakerWebsite/images/mayalogo.png"/>
					</li>
					<li>
						<img src="/StarBreakerWebsite/images/blender-socket.png"/>
					</li>
					
					<li>
						<img src="/StarBreakerWebsite/images/vs-logo.png"/>
					</li>
					<li>
						<img src="/StarBreakerWebsite/images/fuse-logo.png"/>
					</li>
					<li>
						<img src="/StarBreakerWebsite/images/mixamo-logo.png"/>
					</li>
					<li>

						<img src="/StarBreakerWebsite/images/unitycollab-logo.png"/>
					</li>
				</ul>
			</div>
		</div>
</body>
<div class="cd-user-modal" style="z-index: 6;"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Create account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->

</meta>
</head>