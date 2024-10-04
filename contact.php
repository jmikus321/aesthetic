
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Aesthetic &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script src="https://www.google.com/recaptcha/api.js?render=6LfXvE8qAAAAAIQL3S7hcBB8evldl_a4-qB6JZ_4"></script>
	
	  <style>
        .space {
            margin-right: 10px; /* Adjust the value to create the desired space */
        }

    .icon-spacing {
        margin-right: 10px;
    }



    </style>

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 text-right gtco-contact">
					<ul class="">
						<li><a href="contact.html"><i class="ti-mobile"></i></a></li>
						<li><a href="https://www.instagram.com/jozefmikus/"><i class="ti-instagram"></i> </a></li>
						<li><a href="https://www.linkedin.com/in/jozef-miku%C5%A1-150246233/"><i class="ti-linkedin"></i></a></li>
						<li><a href="https://www.facebook.com/jozko.mikus/"><i class="ti-facebook"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">FINANCE <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.html">Domov</a></li>
						<li><a href="about.html">Filozofia</a></li>
						<li class="active"><a href="contact.html">Kontakt</a></li>
						<li><a href="references.html">Referencie</a></li>
						<li class="has-dropdown">
							<a href="#">Služby</a>
							<ul class="dropdown">
								<li><a href="osoby.html">Osobné financie</a></li>
								<li><a href="invest.html">Investície</a></li>
								<li><a href="firmy.html">Korporátne financie</a></li>

					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-xs" role="banner" style="background-image:url(images/ja1.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">Kontakt</h1>
							<h2 class="animate-box" data-animate-effect="fadeInUp">Your path to prosperity by <em></em> <a href="http://cpm.sk/" target="_blank">www.cpm.sk</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-6 animate-box">
				
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získanie hodnôt z formulára
    $name = htmlspecialchars(($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Kontrola, či sú všetky polia vyplnené
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        http_response_code(400);
        exit;
    }

    // reCAPTCHA secret key a odpoveď od klienta
    $recaptchaSecret = '6LfXvE8qAAAAAGDNHzk6wDQ8f1PgUzVoq3HkMv9T';
	    $recaptchaResponse = $_POST['recaptchaResponse'];

    // Pošleme požiadavku na Google reCAPTCHA API na overenie
	    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$recaptchaSecret."&response=".$recaptchaResponse."&remoteip=".$ip;
    $request = file_get_contents(($url));
    $response = json_decode($request);
	
	 // Skontrolujeme, či reCAPTCHA bola úspešná
	     if($response->success){
        // Ak reCAPTCHA bola úspešná, pokračujeme s odoslaním e-mailu
        $to = "jozef.mikus@cpm.sk"; // Sem vložte e-mail príjemcu
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";
		
        // Pokus o odoslanie e-mailu
        if (mail($to, $subject, $body, $headers)) {
            echo "<h2>Form Submitted Successfully!</h2>";
            echo "<p><strong>Name:</strong> " . $name . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
        } else {
            echo "There was an error sending the email, please try again.";
            http_response_code(500);
        }
		  } else {
			  
			        //neuspesna recaptcha
					echo "<h2>reCAPTCHA verification failed!</h2>";
        echo "<p>Please complete the reCAPTCHA verification and try again.</p>";
    }
} else {
    echo "Please submit the form.";
}
?>		

		<h3>Mám záujem o konzultáciu</h3>

<form action="" method="post">
	<input type="hidden" name="recaptchaResponse" id="recaptchaResponse">

		<div class="row form-group">
			<div class="col-md-12">				
        <label class="sr-only" for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Celé meno" required><br>
			</div>	
		</div>

		<div class="row form-group">
			 <div class="col-md-12"> 
        <label class="sr-only" for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required><br>
	     	</div>
		</div>

	    <div class="row form-group">
			 <div class="col-md-12">
        <label class="sr-only" for="message">Message:</label>
        <textarea id="message" name="message" cols="30" rows="10" class="form-control" placeholder="Text správy" required></textarea><br>
		     </div>
		</div>

   <!-- Google reCAPTCHA widget 
    <div class="g-recaptcha" data-sitekey="6LfXvE8qAAAAAIQL3S7hcBB8evldl_a4-qB6JZ_4"></div>-->

    <button class="g-recaptcha" data-sitekey="6LfXvE8qAAAAAIQL3S7hcBB8evldl_a4-qB6JZ_4" data-callback='onSubmit' type="submit">Odoslať</button>

</form>

<!-- Include the Google reCAPTCHA API 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
		</div>

				<div class="col-md-5 col-md-push-1 animate-box">

					<div class="gtco-contact-info">
						<h3>Kontaktné informácie</h3>
						<ul>
							<li class="address">Trnavská 74/A <br> Bratislava </li>
							<li class="phone"><a href="tel://915255967">+421 915 255 967</a></li>
							<li class="email"><a href="jozef.mikus@cpm.sk"> jozef.mikus@cpm.sk</a></li>
							<ul class="">



<body>
    <ul>
        <li>
<a href="contact.html" class="icon-spacing"><i class="ti-mobile"></i></a>
<a href="https://www.instagram.com/jozefmikus/" class="icon-spacing"><i class="ti-instagram"></i></a>
<a href="contact.html" class="icon-spacing"><i class="icon-mail2"></i></a>
<a href="https://www.facebook.com/jozko.mikus/" class="icon-spacing"><i class="ti-facebook"></i></a>

        </li>
    </ul>
</body>
</html>

					</ul>
						</ul>
					</div>


				</div>
			</div>
			</div>

		</div>
	</div>
	</div>

    <footer>
			<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc">
							<small class="col-md-8 col-md-offset-2 text-center">&copy; 2024 Designed by @jozefmikus</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
        grecaptcha.ready(function(){
    grecaptcha.execute('6LfXvE8qAAAAAIQL3S7hcBB8evldl_a4-qB6JZ_4', {action:'contactForm'}).then(function(token){
        document.getElementById('recaptchaResponse').value = token;
    });
});

        /*function onSubmit(token) {
            let recaptchaResponse = document.getElementById("recaptchaResponse")
            recaptchaResponse.value = token
            document.getElementById("prihlaskaForm").submit();
        }
        function onSubmitKontakt(token) {
            let recaptchaResponse = document.getElementById("recaptchaResponse")
            recaptchaResponse.value = token
           // document.getElementById("contact-form").submit();
        }*/
    </script>
	</body>
</html>
