<?php include('config.php') ?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php l('head title') ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php l('head description') ?>">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--[if lte IE 8]><script src="<?php echo DOMAIN ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/main.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/ie9.css" /><![endif]-->
	<link rel="stylesheet" href="<?php echo DOMAIN ?>/assets/css/bludit.css">

	<link rel="icon" type="image/png" href="<?php echo DOMAIN ?>/assets/favicon.png">

	<!-- Twitter Cards -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@bludit" />
	<meta name="twitter:title" content="<?php l('head title') ?>" />
	<meta name="twitter:description" content="<?php l('head description') ?>" />
	<meta name="twitter:image" content="<?php echo CDN.'/images/bludit-pro-twitter-cards.png' ?>" />

	<!-- Open Graph -->
	<meta property="og:locale" content="<?php echo $defaultLocale ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php l('head title') ?>" />
	<meta property="og:description" content="<?php l('head description') ?>" />
	<meta property="og:url" content="<?php echo $topbar['website'] ?>" />
	<meta property="og:image" content="<?php echo CDN.'/images/bludit-pro-facebook-cards.png' ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:alt" content="Bludit PRO Logo" />

	<!-- Google hreflang tag -->
	<link rel="alternate" hreflang="en" href="<?php echo DOMAIN ?>" />
	<?php
		$tmpLanguages = $acceptedLanguages;
		unset($tmpLanguages[0]);
		foreach ($tmpLanguages as $lang) {
			echo '<link rel="alternate" hreflang="'.$lang.'" href="'.DOMAIN . '/' . $lang.'/"/>'.PHP_EOL;
		}
	?>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-67610404-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body class="no-sidebar">
<div id="page-wrapper">

	<!-- NAVBAR -->
	<header id="header">
		<h1 id="logo"><a href="https://www.bludit.com">BLUDIT</a></h1>
		<nav id="nav">
		<ul>
			<li><a href="<?php echo $topbar['download'] ?>"><?php l('Download') ?></a></li>
			<li><a href="<?php echo $topbar['demo'] ?>"><?php l('Demo') ?></a></li>
			<li><a href="<?php echo $topbar['docs'] ?>"><?php l('Documentation') ?></a></li>
			<li><a href="<?php echo $topbar['themes'] ?>"><?php l('Themes') ?></a></li>
			<li><a href="<?php echo $topbar['plugins'] ?>"><?php l('Plugins') ?></a></li>
			<li><a href="<?php echo $topbar['donations'] ?>"><?php l('Donations') ?></a></li>
			<!-- <li><a href="<?php echo $topbar['pro'] ?>">Bludit PRO</a></li> -->
		</ul>
		</nav>
	</header>

	<!-- MAIN -->
	<article id="main">

		<header class="special container">
			<h2>BLUDIT PRO</h2>
		</header>

		<section id="whatis" class="wrapper style2 container special-alt">
			<div class="row 50%">
				<div class="8u 12u(narrower)">
					<header>
						<h2>What is Bludit PRO ?</h2>
					</header>
					<p>Bludit PRO is Bludit with remarkable extra plugins. The principal idea of Bludit PRO is to offer extra content, inviting the user to make a donation to the project.</p>
					<p>Bludit PRO is not a paid application, we don't sell extra support or some kind of license to use it, is only a way to get some contribution to keep the project up and running.</p>
					<a class="button1" href="https://docs.bludit.com/en/pro/introduction"><i class="icon fa-download"></i> More information</a>
				</div>
				<div class="4u 12u(narrower) important(narrower)">
					<ul class="featured-icons">
						<li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
						<li><span class="icon fa-check-circle-o"><span class="label">Feature 1</span></span></li>
						<li><span class="icon fa-commenting-o"><span class="label">Feature 2</span></span></li>
						<li><span class="icon fa-smile-o"><span class="label">Feature 4</span></span></li>
					</ul>
				</div>
			</div>
		</section>

		<section id="download" class="wrapper style2 container special-alt">
			<div class="row 100%">
				<div>
					<header>
						<h2>Request Bludit PRO</h2>
					</header>
					<p>Make a donation to the project, you can find differents methods on <a href="<?php echo $topbar['donations'] ?>">Bludit.com</a>. After getting the contribution we are going to send a link to download it.</p>
					<p>The donation allows you to download Bludit PRO, the current stable version and possibles bug fixes for the same version, not for future releases.</p>
				</div>
			</div>
		</section>

	</article>

	<!-- Footer -->
	<footer id="footer">

		<ul class="icons">
			<li><a href="https://twitter.com/bludit" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="https://www.facebook.com/bluditcms" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="https://plus.google.com/+bluditcms" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
			<li><a href="https://github.com/dignajar/bludit" class="icon circle fa-github"><span class="label">Github</span></a></li>
		</ul>

		<ul class="copyright">
			<li>Bludit CMS &copy; <?php echo date('Y') ?></li><li><?php l('bludit-license') ?></li>
		</ul>

		<ul class="copyright">
			<li><a href="https://pro.bludit.com">English</a></li>
			<li><a href="https://pro.bludit.com/de/">Deutsch</a></li>
			<li><a href="https://pro.bludit.com/es/">Español</a></li>
		</ul>

	</footer>

</div>
</body>
</html>