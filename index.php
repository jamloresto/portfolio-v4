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

<body class="lg:cursor-none">
	<div
		id="custom-cursor"
    class="hidden lg:block pointer-events-none fixed z-50 w-8 h-8 translate-x-1/2 translate-y-1/2 transition-transform duration-700 ease-out text-accent"
	>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 375 374.999991" version="1.0">
			<defs>
				<clipPath id="3295c0fec9">
					<path fill="currentColor" d="M 28 11 L 356 11 L 356 375 L 28 375 Z M 28 11 " clip-rule="nonzero"/>
				</clipPath>
				<clipPath id="4b42213338">
					<path fill="currentColor" d="M 57.113281 11.421875 L 355.367188 35.828125 L 326.800781 384.910156 L 28.546875 360.503906 Z M 57.113281 11.421875 " clip-rule="nonzero"/>
				</clipPath>
				<clipPath id="359b5cdf28">
					<path fill="currentColor" d="M 27 4 L 309 4 L 309 354 L 27 354 Z M 27 4 " clip-rule="nonzero"/>
				</clipPath>
				<clipPath id="227c8fe711">
					<path d="M 29.113281 0.421875 L 327.367188 24.828125 L 298.800781 373.910156 L 0.546875 349.503906 Z M 29.113281 0.421875 " clip-rule="nonzero"/>
				</clipPath>
				<clipPath id="6b28a90828">
					<path d="M 327.4375 24.832031 L 29.183594 0.425781 L 0.617188 349.507812 L 298.871094 373.917969 Z M 327.4375 24.832031 " clip-rule="nonzero"/>
				</clipPath>
					<clipPath id="409025cbdf">
						<rect x="0" width="328" y="0" height="364"/>
				</clipPath>
			</defs>
			<g clip-path="url(#3295c0fec9)">
				<g clip-path="url(#4b42213338)">
					<g transform="matrix(1, 0, 0, 1, 28, 11)">
						<g clip-path="url(#409025cbdf)">
							<g clip-path="url(#359b5cdf28)">
								<g clip-path="url(#227c8fe711)">
									<g clip-path="url(#6b28a90828)">
										<path fill="currentColor" d="M 43.648438 7.164062 C 53.894531 2.257812 65.480469 3.585938 73.886719 10.621094 L 300.425781 202.640625 C 308.429688 209.589844 311.09375 220.527344 307.203125 230.507812 C 303.15625 240.898438 292.949219 247.664062 281.933594 247.347656 L 156.195312 244.675781 C 142.394531 261.882812 101.703125 313.300781 78.410156 343.160156 C 72.675781 350.613281 63.703125 354.5 54.804688 353.773438 C 52.8125 353.609375 50.824219 353.214844 48.878906 352.578125 C 38.769531 349.269531 32.066406 340.21875 31.816406 329.457031 C 30.621094 265.644531 28.195312 100.636719 27.386719 32.707031 C 27.195312 22.011719 33.578125 11.984375 43.648438 7.164062 Z M 155.703125 244.675781 C 155.707031 244.671875 155.71875 244.667969 155.730469 244.664062 L 155.699219 244.667969 Z M 155.703125 244.675781 " fill-opacity="1" fill-rule="nonzero"/>
				</g></g></g></g></g></g></g>
		</svg>
	</div>
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
	<script src="/src/js/custom/cursor.js"></script>

</body>

</html>