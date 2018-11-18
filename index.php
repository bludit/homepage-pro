<?php define('BLUDIT', true); define('PATH_ROOT', __DIR__.DIRECTORY_SEPARATOR); include('php/config.php'); ?>
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
	<?php foreach ($_hreflang as $hreflang=>$href): ?>
	<link rel="alternate" hreflang="<?php echo $hreflang ?>" href="<?php echo $href ?>" />
	<?php endforeach ?>
	<link rel=”alternate” hreflang=”x-default” href=”https://pro.bludit.com” />
</head>
<body>
	<nav>
		<div class="logo"></div>
		<ul class="menu">
			<li><div class="menu__item toggle"><span></span></div></li>
			<li class="menu__item"><a href="<?php echo $_topbar['themes'] ?>" class="link link--dark" target="_blank"><?php l('Themes') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['plugins'] ?>" class="link link--dark" target="_blank"><?php l('Plugins') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['documentation'] ?>" class="link link--dark" target="_blank"><?php l('Documentation') ?></a></li>
			<li class="menu__item"><a href="<?php echo $_topbar['pro'] ?>" class="link link--dark" target="_blank">Bludit PRO</a></li>
			<li class="menu__item"><a href="https://www.facebook.com/bluditcms" class="link link--dark" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<li class="menu__item"><a href="https://twitter.com/bludit/" class="link link--dark" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li class="menu__item"><a href="https://github.com/bludit/bludit" class="link link--dark" target="_blank"><i class="fa fa-github"></i></a></li>
		</ul>
	</nav>
	<div class="wrapper">
		<h1 class="title">Bludit PRO</h1>
		<div class="container">
			<p><?php l('description-paragraph1') ?></p>
			<p><?php l('description-paragraph2') ?></p>
		</div>
		<div class="callout">
			<p><?php l('become-a-backer-or-sponsor') ?></p>
			<a href="https://www.patreon.com/bePatron?c=921115&rid=2458859" class="button--secondary"><i class="fa fa-handshake-o"></i> Backer $2 USD</a>
			<a href="https://www.patreon.com/bePatron?c=921115&rid=2458860" class="button--secondary"><i class="fa fa-handshake-o"></i> Sponsor $10 USD</a>
		</div>
		<div class="callout">
			<p><?php l('are-you-happy-with-bludit') ?></p>
			<a href="https://www.paypal.me/bluditPRO/5" class="button--secondary"><i class="fa fa-paypal"></i> Paypal</a>
		</div>
	</div>

	<footer class="footer">
		<div><a href="https://pro.bludit.com">English</a><a href="https://pro.bludit.com/ru/">Русский</a><a href="https://pro.bludit.com/de/">Deutsch</a><a href="https://pro.bludit.com/es/">Español</a></div>
		<div>Bludit © 2015-<?php echo date('y') ?>. All Rights Reserved.</div>
	</footer>
	<?php
		js('scribbler.js');
	?>
</body>
</html>
