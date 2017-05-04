<?php
//============================================================================================
// Note: This block of code is used to display the file as code:
	if(isset($_GET["code"])){
		ini_set("highlight.html", "#808080");
		highlight_file( __FILE__ );	die();
	}
// Author: Dan Guinn - danguinn.com
//============================================================================================

?>
<!DOCTYPE html>
<html>
<head>
<title>DANGUINN.COM - PASSCODE CODE DEMO - </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/ico" href="http://danguinn.com/config/custom-files/img/logo/favicon/favicon.ico">
<link rel="icon" type="image/ico" href="http://danguinn.com/config/custom-files/img/logo/favicon/favicon.png">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">
<link rel="stylesheet" type="text/css" href="css/app.css" media="all">

<!-- Note: jQuery UI added for explostion effect -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body>
	<div class="toggled" id="page-content-wrapper">
	<main>

		<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<header id="header">
									<img src="img/keypad-access-banner.png" class="img-responsive"><br>

									<p id="intro"><span class='keypadName'>Keypad access</span> is a simple keypad passcode game.
										<br>A code demo by <a href="http://danguinn.com">Dan Guinn</a>.
											<br><a href="#instructions">Instructions</a>  <a href="#about-demo">About this Demo</a>   <a href="http://danguinn.com/programmer">More Demos</a>
									</p>
							<header>
						</div><!--End column-->
					</div><!--End row-->
				</div><!--End container-->
		</section>

		<br>

		<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
								<div class="keyboards phKeypad" id="keypadDiv">
								<form id="keypad">
									<input type="text" id="console" name="console" value="ENTER PASSCODE" data-status="message">
									<p>
										<input type="button" name="btn" value="1" class="btn phBtn">
										<input type="button" name="btn" value="2" class="btn phBtn">
										<input type="button" name="btn" value="3" class="btn phBtn">
									</p>
									<p>
										<input type="button" name="btn" value="4" class="btn phBtn">
										<input type="button" name="btn" value="5" class="btn phBtn">
										<input type="button" name="btn" value="6" class="btn phBtn">
									</p>
									<p>
										<input type="button" name="btn" value="7" class="btn phBtn">
										<input type="button" name="btn" value="8" class="btn phBtn">
										<input type="button" name="btn" value="9" class="btn phBtn">
									</p>
									<p>
										<input type="button" name="btn" value="*" class="btn phBtn">
										<input type="button" name="btn" value="0" class="btn phBtn">
										<input type="button" name="btn" value="#" class="btn phBtn">
									</p>
									<p>
										<input type="button" name="btn" value="RELOAD" class="btn phFullBtn textBtn">
										<input type="button" name="btn" value="CLEAR" class="btn phFullBtn textBtn">
										<input type="button" name="btn" value="ENTER" class="btn phFullBtn textBtn">
									</p>
								</form>
								</div>
							</div><!--End column-->
						</div><!--End row-->
					</div><!--End container-->
		</section>
		<br>

		<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">

									<div id="instructions">

										<a href="#header" style="float:right;"><small>TOP</small></a>
										<h2>Instructions</h2>

											Try to guess the passcode. Press the keys and hit ENTER. The system will give you hints as you get closer.
											You will get just ten tries.<br><br>
											<span class='error-text'>Please try not to trigger the self destruct mechanism!</span>


									</div>
									<br><br>
									<div id="about-demo">
										<a href="#header" style="float:right;"><small>TOP</small></a>
										<h2>About This Demo</h2>

											This demo highlights a simple front-end design that collects keypress inputs and passes the entry via jQuery to a backend PHP script for passcode authentication.
											Several things are demonstrated through the process. Here is a list of the relevant skills displayed.
											<ul>
													<li>Code Separation: HTML, CSS, JavaScript/jQuery and PHP</li>
													<li>A Simple CSS Flex layout</li>
													<li>jQuery event handling</li>
													<li>A jQuery AJAX call</li>
													<li>PHP Server Side Scripting</li>
													<li>Audio Editing</li>

											</ul>
										View the code with the following links:
											<ul>
													<li><a href="?code">HTML</a></li>
													<li><a href="css/global.css">CSS Main Styles</a></li>
													<li><a href="css/flex.css">CSS Flex Styles</a></li>
													<li><a href="js/app.js">jQuery</a></li>
													<li><a href="auth.php?code">PHP</a></li>

											</ul>
											Credits: Victory Song is a portion from
											"Renaissance (edit)" by <a href="http://www.toucanmusic.co.uk/artists/aerologic/">Aerologic</a>
											<br>Animated GIFS are free from the web.
										</div>

									</div><!--End column-->
									</div><!--End row-->
									</div><!--End container-->
									</section>
									<br>

</main>
</div> <!--End Page Content Wrapper-->

<script type="text/javascript" src="js/app.js"></script>
</body>
</html>
