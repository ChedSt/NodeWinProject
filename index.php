<?php
$title = "Game Server and Hosting Services - NodeWin";
$description = "Make your own game server! NodeWin provides game server hosting and web hosting with the best price, starting at £1.50. Minecraft, Valheim, Ark Survival:Evolved and Rust game hosting.";
$indexpage = true;
$darkheader = true; //always change to darkmode

include("header.php");
?>

<div class="hero-area">

	<div class="hero" id="hero1">
		<div class="body">

			<div class="text-area">
				<div class="title">
					<em>Server Hosting</em>
					<br>
					specialized game hosting.
				</div>

				<div class="text">
					Get a <em>server</em> on one of our high performance servers and utilize a special network firewall for our game servers.
				</div>

				<div class="button-area">
					<div class="price">
						<small>Starting at</small>
						<em>£3.50*</em>/mo
					</div>
					<a href="https://nodewin.com/games" class="button">
						LEARN MORE
					</a>
				</div>
			</div>

			<div class="image-area">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>

		</div>
	</div>

</div>

<div class="halfback-gray">
	<div class="body">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '4394220150597201',
      xfbml      : true,
      version    : 'v10.0'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
		<div class="big-services">

			<div class="service highlight">

				<img src="https://nodewin.com/images/sicon-kvm.png" alt="KVM NVMe  VPS Hosting - Game Servers and Hosting Services - NodeWin">
				<div class="title">
					KVM NVMe
					<br>
					VPS
				</div>
				<div class="desc">
					High Performance, High Reliability. Hosted on well tested and trusted AMD Ryzen and E-2100 servers with ECC memory.
				</div>
				<div class="price">
					<small>Starting at</small>
					<strong>£5.50*</strong>/mo
				</div>

				<a href="#" class="button">
					OUT OF STOCK
				</a>
			</div>

			<div class="service">

				<img src="https://nodewin.com/images/sicon-dedi.png" alt="Dedicated server hosting rental - Game Servers and Hosting Services - NodeWin">
				<div class="title">
					Dedicated
					<br>
					Servers
				</div>
				<div class="desc">
					Premade and custom built dedicated servers to cater to any needs with high performance. stellar network and great support.
				</div>
				<div class="price">
					<small>Starting at</small>
					<strong>£30.00*</strong>/mo
				</div>

				<a href="#" class="button">
				OUT OF STOCK
				</a>
			</div>

			<div class="service">

				<img src="https://nodewin.com/images/sicon-mc.png" alt="Game Hosting , Rust Hosting - Game Servers and Hosting Services - NodeWin">
				<div class="title">
					Game
					<br>
					Hosting
				</div>
				<div class="desc">
					Whether you're hosting a server for a few friends or a large community, you can trust us to maintain performance and uptime.
				</div>
				<div class="price">
					<small>Starting at</small>
					<strong>£4.90*</strong>/mo
				</div>

				<a href="https://nodewin.com/games" class="button">
					LEARN MORE
				</a>
			</div>

			<div class="service">

				<img src="https://nodewin.com/images/sicon-web.png" alt="cPanel Web Hosting - Game Servers and Hosting Services - NodeWin">
				<div class="title">
					cPanel
					<br>
					Web Hosting
				</div>
				<div class="desc">
					cPanel Web Hosting with LiteSpeed, premium NVMe storage, and unlimited bandwidth. You can host any website big and small.
				</div>
				<div class="price">
					<small>Starting at</small>
					<strong>£5.99*</strong>/mo
				</div>

				<a href="https://nodewin.com/web-hosting" class="button">
					LEARN MORE
				</a>
			</div>


		</div>

	</div>
</div>
<!--
<div class="back-gray">

	<div class="offer-timer">
		<div class="timer" id="timer">

			<div class="item">
				<strong>--</strong>
				<small>DAYS</small>
			</div>

			<div class="item">
				<strong>--</strong>
				<small>HOURS</small>
			</div>

			<div class="item">
				<strong>--</strong>
				<small>MINUTES</small>
			</div>

			<div class="item">
				<strong>--</strong>
				<small>SECONDS</small>
			</div>

		</div>

		<div class="desc">

			<strong>Order Today and Save!</strong>
			<p>Get 25% off your first month!</p>

			<div class="coupon">
				Use promo code: <em>25SWITCH</em>
			</div>
		</div>

	</div>

	<script>

		$(function(){

			setInterval(function time() {
				timerCalculate();
			}, 1000);

			timerCalculate();

			function timerCalculate(){
				var d = new Date();

				var items = $('#timer .item strong');
				items.eq(0).html("0");
				items.eq(1).html(24 - d.getHours());
				items.eq(2).html(60 - d.getMinutes());
				items.eq(3).html(60 - d.getSeconds());
			}
		});
	</script>
</div>
-->

<div class="worldmap-area">
	<div class="maptitle">
		Host Your Server in one of our
		<strong>10 Global Locations</strong>
	</div>
	<div class="worldmap-wrapper">
		<div class="worldmap">
			<div class="pins">

				<a href="#databox-losangeles" style="left: 280px; top: 80px;">
					<i class="bottom" style="height: 53px; right:8%;"></i>
					<span>Los Angeles, CA</span>
				</a>

				<a href="#databox-utah" style="left: 365px; top: 10px;">
					<i class="bottom" style="height: 110px; left:50%;"></i>
					<span>Salt Lake, UT</span>
				</a>

				<a href="#databox-dallas" style="left: 400px; top: 240px;">
					<i class="top" style="height: 100px; left:50%;"></i>
					<span>Dallas, TX</span>
				</a>

				<a href="#databox-vinthill" style="left: 485px; top: 185px;">
					<i class="top" style="height: 60px; left:40%;"></i>
					<span>Vint Hill, VA</span>
				</a>

				<a href="#databox-montreal" style="left: 485px; top: -30px;">
					<i class="bottom" style="height: 130px; left:50%;"></i>
					<span>Montreal, QC</span>
				</a>

				<a href="#databox-london" style="left: 690px; top: -20px;">
					<i class="bottom" style="height: 105px; left:50%;"></i>
					<span>London, UK</span>
				</a>

				<a href="#databox-gravelines" style="left: 700px; top: 170px;">
					<i class="top" style="height: 60px; left:50%;"></i>
					<span>Gravelines, FR</span>
				</a>

				<a href="#databox-falkenstein" style="left: 770px; top: 40px;">
					<i class="bottom" style="height: 55px; left:12%;"></i>
					<span>Falkenstein, DE</span>
				</a>

				<a href="#databox-singapore" style="left: 1027px; top: 110px;">
					<i class="bottom" style="height: 115px; left:50%;"></i>
					<span>Singapore, SG</span>
				</a>

				<a href="#databox-sydney" style="left: 1243px; top: 230px;">
					<i class="bottom" style="height: 115px; left:50%;"></i>
					<span>Sydney, AU</span>
				</a>

			</div>

			<div class="databoxes">

				<div class="databox" id="databox-dallas">
					<div class="name">
						<strong>Dallas, TX</strong>
						<small>North America Central</small>
						<p>Texas is our flagship location and provides great connectivity throughout the US, Canada, and Mexico.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-losangeles">
					<div class="name">
						<strong>Los Angeles, CA</strong>
						<small>North America West</small>
						<p>California provides excellent latency to west coast users and is good for the central United States.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-utah">
					<div class="name">
						<strong>Ogden, UT</strong>
						<small>North America West</small>
						<p>Utah is a west location that provides good latency throughout the western and central United States and Canada.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-vinthill">
					<div class="name">
						<strong>Vint Hill, VA</strong>
						<small>North America East</small>
						<p>Virginia provides excellent latency throughout the east coast and is acceptable for Western Europe.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-montreal">
					<div class="name">
						<strong>Montreal, QC</strong>
						<small>North America</small>
						<p>Montreal, Canada provides excellent east coast North America connectivity and is acceptable for Western Europe.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-london">
					<div class="name">
						<strong>London, UK</strong>
						<small>Western Europe</small>
						<p>Our United Kingdom location provides excellent latency to UK users and is good for Western Europe.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-gravelines">
					<div class="name">
						<strong>Gravelines, FR</strong>
						<small>Western Europe</small>
						<p>Our France location works well for anyone within the Western Europe region and parts of Eastern Europe.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-falkenstein">
					<div class="name">
						<strong>Falkenstein, DE</strong>
						<small>Western Europe</small>
						<p>Our Falkenstein location is a central location in Europe good for both Western and Eastern Europe.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-singapore">
					<div class="name">
						<strong>Singapore, Asia</strong>
						<small>Southeast Asia</small>
						<p>Singapore is a good location for people connecting from Southeast Asia and South Asia regions.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

				<div class="databox" id="databox-sydney">
					<div class="name">
						<strong>Sydney, AU</strong>
						<small>Oceania</small>
						<p>Our Sydney location provides excellent latency to Australia and New Zealand, and acceptable for Southeast Asia.</p>
					</div>
					<div class="links">
						<small>Available services:</small>
						<a href="https://nodewin.com/games">Game Hosting</a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<div class="blackbar-area">
	<div class="body">

		<div class="text-area">
			<div class="title">
				<strong>FREE DDoS Protection</strong>
				Here’s how we protect you from all types of DDoS attacks:
			</div>

			<div class="blocks">
				<div class="block">
					<img src="https://nodewin.com/images/firewall-icon-1.png" alt="The Pre-Firewall - Game Servers and Hosting Services - NodeWin">
					<strong>
						The Pre-Firewall
					</strong>
					<p>
						The pre-firewall filters and blocks most common network attacks.
					</p>
				</div>

				<div class="block">
					<img src="https://nodewin.com/images/firewall-icon-2.png" alt="Firewall Network - Game Servers and Hosting Services - NodeWin">
					<strong>
						Firewall Network
					</strong>
					<p>
						The network firewall allows clients to manage access rules, such as allow/deny IPs, ports, and protocols.
					</p>
				</div>

				<div class="block">
					<img src="https://nodewin.com/images/firewall-icon-3.png" alt="Game Firewall - Game Servers and Hosting Services - NodeWin">
					<strong>
						Game Firewall
					</strong>
					<p>
						The game firewall (for specific services) adds an additional layer of UDP filtering for game servers.
					</p>
				</div>

				<div class="block">
					<img src="https://nodewin.com/images/firewall-icon-4.png" alt="Armor/Shield - Game Servers and Hosting Services - NodeWin">
					<strong>
						Armor/Shield
					</strong>
					<p>
						These firewalls are an additional layer of protection to help block common attacks such as amplification methods.
					</p>
				</div>

			</div>

			<div class="smallprint">
				* DDoS protection included with most services, protection may vary by location.
			</div>
		</div>

	</div>
</div>

<div class="main-features-area">
	<div class="body">

		<h1>More Reasons to Choose Us</h1>


		<div class="main-features">

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-1.png" alt="Modern Hardware - Game Servers and Hosting Services - NodeWin">
				<strong>
					Modern Hardware
				</strong>
				We use newer and faster hardware than most competitors, and constantly upgrade clients.
			</div>

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-2.png" alt="Easy to use Control Panel - Game Servers and Hosting Services - NodeWin">
				<strong>
					Easy to use Control Panel
				</strong>
				We use well tested and industy standard management panels, everything is within sight.
			</div>

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-3.png" alt="24/7 Technical Support - Game Servers and Hosting Services - NodeWin">
				<strong>
					24/7 Technical Support
				</strong>
				Have an issue or concern? Open a support ticket with us anytime and get a quick response.
			</div>

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-4.png" alt="Instant Activation - Game Servers and Hosting Services - NodeWin">
				<strong>
					Instant Activation
				</strong>
				Enjoy instant setup for most of our services, get going immediately after paying.
			</div>

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-5.png" alt="Trusted Networks - Game Servers and Hosting Services - NodeWin">
				<strong>
					Trusted Networks
				</strong>
				We use networks with good connectivity and high reliability, providing the best experience.
			</div>

			<div class="feature">
				<img src="https://nodewin.com/images/ficon-6.png" alt="Satisfaction Guarantee - Game Servers and Hosting Services - NodeWin">
				<strong>
					Satisfaction Guarantee
				</strong>
				If you're not happy, ask for a refund within 3 days of ordering, no questions asked.
			</div>

		</div>
	</div>
</div>
<meta name="description" content="Prodavnica E-tiba je diskont koji nudi usluge dostave u okolini Smedereva. Veliki izbor alkoholnih i bezalkoholnih pića. Online naručivanje." /><meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" /><meta property="og:locale" content="sr_RS" /><meta property="og:type" content="website" /><meta property="og:title" content="Prodavnica E-tiba - Online diskont i dostava na adresu" /><meta property="og:description" content="Prodavnica E-tiba je diskont koji nudi usluge dostave u okolini Smedereva. Veliki izbor alkoholnih i bezalkoholnih pića. Online naručivanje." /><meta property="og:url" content="https://www.e-tiba.rs/" /><meta property="og:site_name" content="E-tiba" /><meta property="og:updated_time" content="2021-05-10T11:04:19+01:00" /><meta property="og:image" content="https://www.e-tiba.rs/wp-content/uploads/2020/08/cropped-tiba-logo-crni-1.png" /><meta property="og:image:secure_url" content="https://www.e-tiba.rs/wp-content/uploads/2020/08/cropped-tiba-logo-crni-1.png" /><meta property="og:image:width" content="512" /><meta property="og:image:height" content="512" /><meta property="og:image:alt" content="prodavnica" /><meta property="og:image:type" content="image/png" /><meta name="twitter:card" content="summary_large_image" /><meta name="twitter:title" content="Prodavnica E-tiba - Online diskont i dostava na adresu" /><meta name="twitter:description" content="Prodavnica E-tiba je diskont koji nudi usluge dostave u okolini Smedereva. Veliki izbor alkoholnih i bezalkoholnih pića. Online naručivanje." /><meta name="twitter:image" content="https://www.e-tiba.rs/wp-content/uploads/2020/08/cropped-tiba-logo-crni-1.png" />


<?php include("footer.php"); ?>
