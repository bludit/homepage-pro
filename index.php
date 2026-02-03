<?php define('BLUDIT', true);
define('PATH_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
include('php/config.php'); ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLanguage ?>">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php l('head description') ?>">
	<meta name="title" content="<?php l('head title') ?>">
	<title><?php l('head title') ?></title>

	<meta name="author" content="Diego Najar">

	<!-- CSS files -->
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php
	css('scribbler-global.css');
	css('scribbler-landing.css');
	css('bludit.css');
	?>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/img/favicon.png">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="<?php echo DEFAULT_TWITTER_CARD ?>" />

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $currentLanguage ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $_topbar['website'] ?>" />
	<meta property="og:image" content="<?php echo DEFAULT_FACEBOOK_CARD ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit" />

	<!-- Canonical -->
	<link rel="canonical" href="<?php echo $_topbar['website'] ?>" />

	<!-- Google hreflang tag -->
	<?php foreach ($_hreflang as $hreflang => $href) : ?>
		<link rel="alternate" hreflang="<?php echo $hreflang ?>" href="<?php echo $href ?>" />
	<?php endforeach ?>
	<link rel=”alternate” hreflang=”x-default” href=”https://pro.bludit.com” />
</head>

<body>
	<header class="site-header">
		<nav>
			<ul class="menu">
				<li>
					<div class="menu__item toggle"><span></span></div>
				</li>
				<li class="menu__item"><a href="<?php echo $_topbar['homepage'] ?>" class="link link--dark" target="_blank">Homepage</a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['themes'] ?>" class="link link--dark" target="_blank"><?php l('Themes') ?></a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['plugins'] ?>" class="link link--dark" target="_blank"><?php l('Plugins') ?></a></li>
				<li class="menu__item"><a href="<?php echo $_topbar['documentation'] ?>" class="link link--dark" target="_blank"><?php l('Documentation') ?></a></li>
				<li class="menu__item"><a href="https://github.com/bludit/bludit" class="link link--dark" target="_blank"><i class="fa fa-github"></i></a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section class="hero">
			<h1 class="hero__title hero__title--brand">
				<img class="hero__logo" src="<?php echo DOMAIN ?>/img/logo.svg" alt="Bludit" />
				<span>Bludit PRO</span>
			</h1>
			<p class="hero__description"><?php l('description-paragraph1') ?></p>
			<p class="hero__description"><?php l('description-paragraph2') ?></p>
		</section>
		<div class="wrapper">
			<div class="callout">
				<p><?php l('become-a-backer-or-sponsor') ?></p>
				<a href="https://www.patreon.com/join/bludit" class="button--secondary"><i class="fa fa-handshake-o"></i> Patreon</a>
			</div>
			<div class="callout">
				<p><?php l('are-you-happy-with-bludit') ?></p>
				<a href="https://www.paypal.me/bludit/5" class="button--secondary"><i class="fa fa-paypal"></i> Paypal</a>
				<a href="https://www.blockchain.com/explorer/addresses/btc/bc1qtets5pdj73uyysjpegfh2gar4pfywra4rglcph" class="button--secondary"><i class="fa fa-btc"></i> Bitcoins</a>
				<a href="https://www.blockchain.com/explorer/addresses/eth/0x0d7D58D848aA5f175D75Ce4bC746bAC107f331b7" class="button--secondary"><i class="fa fa-diamond"></i> Ethereum</a>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div>
			<a href="https://pro.bludit.com">English</a>
			<a href="https://pro.bludit.com/ru/">Русский</a>
			<a href="https://pro.bludit.com/de/">Deutsch</a>
			<a href="https://pro.bludit.com/es/">Español</a>
		</div>
		<div>Bludit © 2015-<?php echo date('Y') ?>. All Rights Reserved.</div>
	</footer>
	<?php
	js('scribbler.js');
	?>
</body>

</html>
