<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Wolfsvale</title>
		<meta name="og:description" content="Free Open-Source Software, brought to you by Wolfsvale Software, a dutch organisation dedicated to free software and education globally.">
		<meta name="og:author" content="Wolfsvale Software">
		<style>@import "assets/css/app.css";</style>
		<script src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<?php include './assets/components/pageParts/navigation.php' ?>

		<section class="hero">
			<div class="hero__header">
				<h1>A FOSS initiative.</h1>
				<p class="hero__subtitle">Software for all markets and needs, for everyone.</p>
			</div>
			<div>

				<button class="button button__secondary button__secondary-left">
					<i class="fas fa-hammer"></i>
					<a class="button__link" href="projects">Projects</a>
				</button>

				<button class="button button__secondary button__secondary">
					<i class="fas fa-user-group"></i>
					<a class="button__link" href="about">About us</a>
				</button>

				<button class="button button__secondary button__secondary-right">
					<i class="fas fa-contact-card"></i>
					<a class="button__link" href="support">Support</a>
				</button>

			</div>
			<p>2022 - <?= date("Y")?> © Wolfsvale Software</p>
		</section>
	</body>
</html>