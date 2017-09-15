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
					<p>Bludit Pro is Bludit with extra remarkable plugins. Bludit Pro doesn't have to be purchased nor requires any special licensing to use it. You will receive the same great support for Bludit Pro as received for Bludit.</p>
					<p>Bludit Pro is available to community members who have donated to the project. Donations and community support are what helps the project stay up and running. Support Bludit today by donating and enjoy all the great features of Bludit plus more with Bludit Pro!</p>
					<a class="button1" href="<?php echo $topbar['donations'] ?>"><i class="icon fa-handshake-o"></i> Donate</a>
					<a class="button1" href="https://docs.bludit.com/en/pro/introduction"><i class="icon fa-info"></i> More information</a>
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

		<div id="donate">&nbsp;</div>

		<section id="donations" class="wrapper style3 container">
		<div class="content">
			<h1 class="title"><i class="fa fa-handshake-o" aria-hidden="true"></i> <?php l('Donations') ?></h1>
			<p><?php l("donations-paragraph1") ?></p>
			<p><?php l("donations-paragraph2") ?></p>
			<div id="donationPaypal" class="donation-button"><i class="icon fa-paypal"></i> Paypal</div>
			<div id="donationPayoneer" class="donation-button"><i class="icon fa-money"></i> Payonneer</div>
			<div id="donationSkrill" class="donation-button"><i class="icon fa-money"></i> Skrill</div>
			<div id="donationBitcoins" class="donation-button"><i class="icon fa-bitcoin"></i> Bitcoins</div>
		</div>
		</section>

		<div id="modalPaypal" class="modal">
			<div class="modal-content">
			<span class="donationClose">&times;</span>
			<h1>Paypal</h1>
			<p><?php l('paypal-paragraph1') ?></p>
			<p><?php l('paypal-paragraph2') ?></p>
			</div>
		</div>

		<div id="modalPayoneer" class="modal">
			<div class="modal-content">
			<span class="donationClose">&times;</span>
			<h1>Payoneer</h1>
			<p><?php l('payoneer-paragraph1') ?></p>
			</div>
		</div>

		<div id="modalSkrill" class="modal">
			<div class="modal-content">
			<span class="donationClose">&times;</span>
			<h1>Skrill</h1>
			<p><?php l('skrill-paragraph1') ?></p>
			</div>
		</div>

		<div id="modalBitcoins" class="modal">
			<div class="modal-content">
			<span class="donationClose">&times;</span>
			<h1>Bitcoins</h1>
			<p><?php l('bitcoins-paragraph1') ?><br> <b>3Dm3pNssSs2gLT1DvDoWznXJj829CEyfej</b></p>
			</div>
		</div>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	$("#donationPaypal").click(function(event) {
		$("#modalPaypal").show();
	});

	$("#donationPayoneer").click(function(event) {
		$("#modalPayoneer").show();
	});

	$("#donationSkrill").click(function(event) {
		$("#modalSkrill").show();
	});

	$("#donationBitcoins").click(function(event) {
		$("#modalBitcoins").show();
	});

	$(".donationClose").click(function(event) {
		$(".modal").hide();
	});

	var part3 = "&#100;&#105;&#103;&#110;&#097;&#106;";
	var part2 = "&#097;&#114;&#064;&#103;&#109;&#097;";
	var part6 = "&#105;&#108;&#046;&#099;&#111;&#109;";
	$(".diegoemail").html(part3+part2+part6);
});

$(document).on('click', function (e) {
	if ( $("div.modal").is(e.target)) {
		$(".modal").hide();
	}
});

$(document).keyup(function(e) {
	if (e.keyCode == 27) {
		$(".modal").hide();
	}
});
</script>

</body>
</html>