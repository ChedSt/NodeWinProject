<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

<!-- SEO -->
	<?php
		$loadtitle = (!empty($title) ? $title.' ': 'Game Server and Web Hosting - NodeWin') . '';
		$loaddescription = !empty($description) ? $description : 'Make your own game server! NodeWin provides game server hosting and web hosting with the best price, starting at £1.50. A';
    	$loaddescription = !empty($keywords) ? $keywords : 'nodewin, Nodewin hosting, game server hosting, vps server hosting, web hosting, web server hosting';
		$loadimg = (!empty($img) ? $img.' ': 'https://www.nodewin.com/images/social-networks.PNG');
		?>
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords);?>" />
<!-- Main Description -->
	<title><?php echo htmlspecialchars($loadtitle);?></title>

	<meta name="description" content="<?php echo htmlspecialchars($loaddescription);?>">

<!-- Facebook -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta content="<?php echo htmlspecialchars($loadtitle);?>" property="og:title">
    <meta content="<?php echo htmlspecialchars($loaddescription);?>" property="og:description">
	<meta property="og:url" content="https://nodewin.com/" />


	<meta property="og:site_name" content="NodeWin" />
	<meta property="og:image" content="<?= $loadimg ?>" />
	<meta property="og:image:secure_url" content="<?= $loadimg ?>" />
	<meta property="og:image:width" content="512" />
	<meta property="og:image:height" content="512" />
	<meta property="og:image:alt" content="Game Server and Web Hosting - NodeWin" />
	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta content="<?php echo htmlspecialchars($loadtitle);?>" property="twitter:title">
	<meta property="twitter:description" content="<?php echo htmlspecialchars($loadtitle);?>">
	<meta name="twitter:image" content="<?= $laodimg ?>" />


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-NPQ4HG3MCD"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-NPQ4HG3MCD');
	</script>


<!-- Organization Scheme --->
<script type="application/ld+json">
 { "@context": "https://schema.org",
 "@type": "Organization",
 "name": "NodeWin",
 "legalName" : "NodeWin ltd",
 "url": "https://www.nodewin.com",
 "logo": "https://nodewin.com/images/logo.png",
 "foundingDate": "2021",
 "founders": [
 {
 "@type": "Person",
 "name": "Jonas Jordan"
 }],
 "address": {
  "@type": "PostalAddress",
  "streetAddress": "71-75 Shelton Street",
  "addressLocality": "London",
  "addressRegion": "United Kingdom",
  "postalCode": "WC2H 9JQ",
  "addressCountry": "GB"
  },
  "contactPoint": {
  "@type": "ContactPoint",
  "contactType": "customer support",
  "telephone": "",
  "email": "support@nodewin.com"
  },
 "sameAs": [
 "https://www.facebook.com/nodewin",
 "https://www.instagram.com/nodewin__/",
 "https://twitter.com/Nodewin_"
 ]}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": "1",
      "name": "Games",
      "item": "https://nodewin.com/games"
    },
    {
      "@type": "ListItem",
      "position": "2",
      "name": "Rust",
      "item": "https://nodewin.com/rust-server-hosting"
    },
		{
      "@type": "ListItem",
      "position": "2",
      "name": "Valheim",
      "item": "https://nodewin.com/valheim-server-hosting"
    },
		{
			"@type": "ListItem",
			"position": "3",
			"name": "Ark Survival:Evolved",
			"item": "https://nodewin.com/ark-server-hosting"
		},
		{
			"@type": "ListItem",
			"position": "4",
			"name": "Ark Survival:Evolved",
			"item": "https://nodewin.com/ark-server-hosting"
		},
		{
			"@type": "ListItem",
			"position": "5",
			"name": "Minecraft",
			"item": "https://nodewin.com/ark-server-hosting"
		},
  ]
}
</script>


<!-- /SEO -->




	<link rel="stylesheet" type="text/css" href="reset.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="style-custom.css" />

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="icon" type="image/x-icon" href="favicon.ico" />

	<script src="https://code.jquery.com/jquery-3.5.0.min.js"
		integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
		crossorigin="anonymous"></script>

	<script src="js/custom.js" type="text/javascript"></script>

	<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="style-ie.css" />
	<![endif]-->

</head>
<body>

<div id="header"<?php echo !empty($darkheader) ? ' class="dark"' : ''; ?>>
	<div class="body clearfix">
		<a href="https://nodewin.com/" class="logo">
			<img src="https://nodewin.com/images/<?php echo !empty($darkheader) ? 'logo-white.png' : 'logo.png'; ?>" alt="Logo" />
		</a>

		<div id="menubutton">
			<a href="#" title="Menu">MENU</a>
		</div>

		<div id="menu-area">

			<div id="menu">

				<ul>
					<li class="mobilemenu">
						<a href="https://nodewin.com/">HOME</a>
					</li>

					<!---
					<li class="dropdown">
						<a href="#">Virtual Servers</a>
						<div>
							<ul>
								<li><a href="game-vps.php">
										<img src="images/sicon-game.png" alt="">
										Game VPS
										<small>Specialized game protection</small>
									</a></li>
								<li><a href="vps.php">
										<img src="images/sicon-kvm.png" alt="">
										NVMe KVM VPS
										<small>Hosting for professional services</small>
									</a></li>
							</ul>
						</div>
					</li>

					-->
<li>
						<a href="https://nodewin.com/web-hosting">Web Hosting</a>
					</li>
					<li>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</li>
					<!---
					<li>
						<a href="webhosting.php">Web Hosting</a>
					</li>-->

					<!---
					<li>
						<a href="dedicated.php">Dedicated Servers</a>
					</li>

					-->
					<li class="dropdown">
						<a href="#">Company</a>
						<div>
							<ul>
								<li><a href="https://nodewin.com/about">
										<img src="https://nodewin.com/images/sicon-game.png" alt="About Us">
										About Us
										<small>Learn more about our company history and values.</small>
									</a></li>
								<li><a href="https://status.nodewin.com/">
										<img src="https://nodewin.com/images/icon-status.png" alt="Server Status">
										Server Status
										<small>Live information about our server status.</small>
									</a></li>
							</ul>
						</div>
					</li>
					<li class="rightside">
						<a href="https://pay.nodewin.com/submitticket.php?step=2&deptid=1">Sales Questions?</a>
					</li>
					<li class="dropdown rightside lastmenu">
						<a href="">Sign In</a>
						<div>
							<ul>
								<li><a href="https://pay.nodewin.com/">
										<img src="https://nodewin.com/images/icon-support.png" alt="Billing & Support">
										Billing & Support
										<small>Log into our client area to manage your account, billing, and get support.</small>
									</a></li>
									<!--
								<li><a href="https://vps.nodewin.com/">
										<img src="images/icon-vpspanel.png" alt="">
										VPS Panel
										<small>Manage your VPS using our web-based control panel.</small>
									</a></li>--->
								<li><a href="https://mc.nodewin.com/">
										<img src="https://nodewin.com/images/icon-mcpanel.png" alt="Game Panel (Minecraft, Ark, Rust, Bot Hosting)">
										Game Panel
										<small>Manage game hosting services (Minecraft, Ark, Rust, Bot Hosting)</small>
									</a></li>
							</ul>
						</div>
					</li>
				</ul>

			</div>

		</div>
	</div>
</div>
<div id="page">
