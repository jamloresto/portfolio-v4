<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="apple-touch-icon" sizes="180x180" href="./src/images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./src/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./src/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="./src/images/favicon/site.webmanifest">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<!-- Primary Meta Tags -->
	<title>Jam Hernandez | Portfolio</title>
	<meta name="title" content="Jam Hernandez | Portfolio" />
	<meta name="description" content="A front-end developer, full-stack problem solver, and web designer who loves turning ideas into smooth, intuitive, and meaningful digital experiences." />
	<meta name="image" content="https://jamloresto.com/meta.jpg" />

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://jamloresto.com/" />
	<meta property="og:title" content="Jam Hernandez | Portfolio" />
	<meta property="og:description" content="A front-end developer, full-stack problem solver, and web designer who loves turning ideas into smooth, intuitive, and meaningful digital experiences." />
	<meta property="og:image" content="https://jamloresto.com/meta.jpg" />

	<!-- X (Twitter) -->
	<meta property="twitter:card" content="summary_large_image" />
	<meta property="twitter:url" content="https://jamloresto.com/" />
	<meta property="twitter:title" content="Jam Hernandez | Portfolio" />
	<meta property="twitter:description" content="A front-end developer, full-stack problem solver, and web designer who loves turning ideas into smooth, intuitive, and meaningful digital experiences." />
	<meta property="twitter:image" content="https://jamloresto.com/meta.jpg" />
	
	<link rel="stylesheet" href="./src/styles/output.css">

</head>

<body>
	<main class="main-wrapper">
		<div id="smooth-wrapper">
			<div id="smooth-content">
				<?php include 'src/components/navigation.php'; ?>
				<?php include 'src/components/hero.php'; ?>
				<?php include 'src/components/about.php'; ?>
				<?php include 'src/components/skills.php'; ?>
				<?php include 'src/components/projects.php'; ?>
				<?php include 'src/components/contact.php'; ?>
			</div>
		</div>
	</main>

	<!-- vendor -->
	<script src="/src/js/vendor/jquery.min.js"></script>
	<script src="/src/js/vendor/gsap.min.js"></script>
	<script src="/src/js/vendor/ScrollTrigger.min.js"></script>
	<script src="/src/js/vendor/ScrollToPlugin.min.js"></script>
	<script src="/src/js/vendor/ScrollSmoother.min.js"></script>

	<!-- custom -->
	<script src="/src/js/custom/app.js"></script>
	<script src="/src/js/custom/global.js"></script>
	<script src="/src/js/custom/script.js"></script>
	<script src="/src/js/custom/theme.js"></script>
	<script src="/src/js/custom/animation.js"></script>

</body>

</html>