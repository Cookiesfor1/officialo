<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Damborg Productions</title>
		<link rel="icon" type="image/x-icon" href="img/logo.jpeg">
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Amarante&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Amarante&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href="css/swiper.css">
		<link rel="stylesheet" href="css/style.css" />
	</head>
<body class="dark">
	<header>
		<div class="container">
			<div class="header-flex">
				<div class="logo">
					<a href="#"><img src="img/logo.jpeg" alt="logo"></a>
				</div>
				<div class="right-menu">
					<div class="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="index.html#offers">Offeres</a></li>
							<li><a href="videos.html" >Videos</a></li>
							<li><a href="contact.php" class="active">Contact</a></li>
						</ul>
					</div>
					
					<i class="fa fa-bars" aria-hidden="true" onclick="openmenu();"></i>
				</div>
			</div>
		</div>
	</header>
	<div id="top-sec">
		<div class="background-shapes"></div>
		<div class="container">
			<div>
				<h1>Our Video Gallery</h1>
				<p>This whole element, background included, only weighs about 5kb</p>
				<div class="wrapper" style="display:none">
					<a class="link" href="contact.html">
						<div class="color"></div>
						<span>CONTACT US</span>
						<i class="fa fa-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<?php
		$msg = '';
		if(isset($_POST['sub'])){
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			$message = $_POST['msg'];
			
			
			// use wordwrap() if lines are longer than 70 characters
			$mailmsg = '
				Email: '.wordwrap($mail, 570, "\n".'    ', true).'
				Phone: '.wordwrap($phone, 570, "\n".'    ', true).'
				Message: '.wordwrap($message, 570, "\n".'    ', true).'
			';

			$msg = '<div style="margin-bottom:8px; margin-top:8px">Thank you for contacting us.</div>';
			// send email
			mail("damborgproductions@outlook.com","Contact Us",$mailmsg);
		}
	?>
	<div id="" class="sec">
		<div class="container">
			
      <div class="form">
        <div class="contact-info">
			<h3 class="title">Let's get in touch</h3>
			<p class="text">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
			dolorum adipisci recusandae praesentium dicta!
			</p>

			<div class="info">
				<div class="information">
					<i class="fa fa-map"></i> &nbsp &nbsp

					<p>92 Cherry Drive Uniondale, NY 11553</p>
				</div>
				<div class="information">
					<i class="fa fa-envelope"></i> &nbsp &nbsp
					<p>lorem@ipsum.com</p>
				</div>
				<div class="information">
				<i class="fa fa-phone"></i>&nbsp&nbsp
				<p>123-456-789</p>
				</div>
			</div>

			<div class="social-media">
				<p>Connect with us :</p>
				<div class="social-icons">
					<a href="#">
						<i class="fa fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="#">
						<i class="fa fa-youtube"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="contact-form">
			<span class="circle one"></span>
			<span class="circle two"></span>

			<form action="#" method="post" autocomplete="off">
				<h3 class="title">Contact us</h3>
				
				<div class="input-container">
					<input type="mail" name="email" class="input" required />
					<label for="">Email</label>
					<span>Email</span>
				</div>
				<div class="input-container">
					<input type="tel" name="phone" class="input" required />
					<label for="">Phone</label>
					<span>Phone</span>
				</div>
				<div class="input-container textarea">
					<textarea name="msg" class="input" required></textarea>
					<label for="">Message</label>
					<span>Message</span>
				</div>
				<?php echo $msg; ?>
				<input type="submit" name="sub" value="Send" class="btn" />
			</form>
			</div>
		</div>

		</div>
	</div>
	
	
	
	<footer>
		<div class="container">
			<div class="footer-col">
				<div>
					<h4>Company Info</h4>
					Veedyou Media SRL
					<br /><br />
					Address: Sos. Dudesti-Pantelimon 19, Room 78, Bucharest, Romania
					<br /><br />
					Fiscal Code: 37719910
					<br /><br />
					Registry No. : J40/8688/2017
				</div>
				
				
				<div>
					<h4>Important Links</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="index.html#offers">Offeres</a></li>
						<li><a href="videos.html">Videos</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				
				
				<div>
					<h4>Contact</h4>
					
					Ordering / Customer support: contact@veedyou.com
					<br /><br />
					Press / Media: office@veedyou.com
					<br /><br />	
					Management: cristian@veedyou.com
					<br /><br />	
					Phone number: +40 722 65 19 25
					<br /><br />
					Working hours:
					<br /><br />
					Monday - Friday: 8:00 - 18:00 EEST
				</div>
				
			</div>
		</div>
	</footer>
	<div class="footer-bottom">
		<div class="container">
			&copy; 2024 All Rights Reserved.
		</div>
	</div>
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
	<script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
	<script src="js/script.js"></script>
</body>
</html>