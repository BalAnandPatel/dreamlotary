<?php include "include/header.php"; ?>
<head>
	

	<script>
		function addLoadEvent(n){if(window.addEventListener)window.addEventListener("load",n,!1);else if(window.attachEvent)window.attachEvent("onload",n);else{var d=window.onload;window.onload=function(){d&&d(),n()}}}
		function addResizeEvent(e) { var t = window.onresize; if (typeof window.onresize != "function") { window.onresize = e } else { window.onresize = function () { if (t) { t() } e() } } }
		function readMore(obj){obj.previousElementSibling.style.display="inline-block";obj.style.display="none"}
	</script>

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133840644-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-133840644-1');
	</script><!-- end Analytics -->

</head>

<body>

	<script>
		addLoadEvent(function(){
			var languages = document.getElementById("languages");
			languages.addEventListener("click",function(){
				if (window.clientWidth <= 1199) {
					languages.classList.toggle("open");
				}
			});
		});
	</script>

						</div>
					</div>
				</div>
				<marquee class="tickerBox" truespeed scrollamount="2" scrolldelay="20" style="background-color: lightgrey; height: 30px;">
					<div class="inner">
						<div class="text">
							<p>Time remaining to play in the next Dream Lotary draw: <strong style="color: #F90" id="topTimer">0 days 00:00:00</strong> - <a href="play.php" title="Play Dream Lotary online today" id="headerPlay">Play Online</a></p>
							<script>
								addLoadEvent(function(){topTimer()});
								function topTimer() {
									var obj = document.getElementById("topTimer");
									var objPlay = document.getElementById("headerPlay");
									var sec = 1000, min = sec * 60, hour = min * 60, day = hour * 24;
									var date = new Date("2023-05-09T13:20:00");
									var date2 = new Date("2023-05-09T12:30:00");
									date.setSeconds(date.getSeconds());
									date2.setSeconds(date2.getSeconds());
									var dateTime = date.getTime(), dateTime2 = date2.getTime();
									var now = new Date().getTime(), r = dateTime - now, r2 = dateTime2 - now;
									var days = Math.floor(r/day), hours = Math.floor((r%day)/hour), mins = Math.floor((r%hour)/min), secs = Math.floor((r%min)/sec);
									if (r > 0) {
										obj.innerHTML = days + (days == 1 ? " day " : " days ") + ("0" + hours).slice(-2) + ":" + ("0" + mins).slice(-2) + ":" + ("0" + secs).slice(-2);
										setTimeout("topTimer()",sec);
									} else if (r2 > 0) {
										obj.innerHTML = "Tickets sales closed, tonight's draw will start soon!";
										objPlay.innerHTML = "Play in the Next Draw"
									} else {
										obj.innerHTML = "DRAW IN PROGRESS!";
										objPlay.innerHTML = "Play in the Next Draw"
									}
								};
							</script>
						</div>
					</div>
				</marquee>
			</div>
			
		</div>
		
	</header>

	<div class="container">

		<script>
			function navToggle() {
				var x=document.querySelector(".navButton");
				var y=document.querySelector(".toggle");
				if(x.className==="navButton"){x.className+=" active"}else{x.className = "navButton"}
				if(y.className==="toggle"){y.className+=" active"}else{y.className="toggle"}
			}
			function navToggleAlt() {
				var x=document.querySelector(".expand");
				var y=document.querySelector(".innerNav");
				if(x.className==="expand"){x.className+=" active";x.innerHTML = "-"}else{x.className = "expand"; x.innerHTML = "+"}
				if(y.className==="innerNav"){y.className+=" active"}else{y.className="innerNav"}
			}
		</script>
		
		<div class="genBox mBottom">

<h1>Dream Lotary Information</h1>

<p>Boasting jackpot prizes of at least ₹4 Crore in every draw, Dream Lotary is the first online national lottery for all Indian people, available to play from locations around the world. The lottery is not limited by state lines, allowing it to offer a huge jackpot prize, larger than many offered on a state level. A guaranteed prize fund of ₹40,000 is also given away to five lucky winners every month in the Dream Lotary Raffle. You could even win a jackpot of up to ₹40 Crore when special Bumper Draws take place.</p>

<p>In every draw, six different numbers between 1 and 50 are randomly selected. A Joker Ball between 1 and 5 is then selected. Match all six numbers and the Joker Ball to win the top prize! The numbers are selected using an iRNG, or Insured Random Number Generator, and each draw is timestamped for security. Draws occur at 6:00 PM every Tuesday and Friday and the winning numbers will be published on the <a href="/results" title="Dream Lotary Results">results</a> page shortly after.</p>

</div>

<div class="row flex">

<div class="infoBox colHalf how-to-play">
	<div class="inner">
		<h2>How to Play</h2>
		<p>Find a step-by-step guide to playing Dream Lotary, whether you want to choose your own numbers or use a random Quick Pick.</p>
		<a href="/how-to-play" title="How to Play Dream Lotary" class="button">Learn How to Play</a>
	</div>
	
		<img src="images/info/guide.png" alt="Lotto Guide">
	
</div>

<div class="infoBox colHalf prizes">
	<div class="inner">
		<h2>Prizes</h2>
		<p>Want to know what you could win by playing Dream Lotary? Find out more about the prizes on offer.</p>
		<a href="/prizes" title="View Prizes" class="button">Prizes</a>
	</div>
	
		<img src="images/info/prizes.png" alt="Lotto Prizes">
	
</div>


</div>

<div class="row flex">

<div class="infoBox colHalf claim-prizes">
	<div class="inner">
		<h2>How to Claim Prizes</h2>
		<p>If you're a Dream Lotary winner, it couldn’t be easier to claim your prize. Here are the steps to follow if your numbers come up.</p>
		<a href="/how-to-claim-prizes" title="How to Claim Prizes" class="button">How to Claim</a>
	</div>
	
		<img src="images/info/winner.png" alt="Lotto Guide">
	
</div>

<div class="infoBox colHalf faq">
	<div class="inner">
		<h2>FAQ</h2>
		<p>Need help playing Dream Lotary? Find answers to the most frequently asked questions about the game.</p>
		<a href="/faq" title="Dream Lotary FAQs" class="button">FAQ</a>
	</div>
	
		<img src="images/info/faq.png" alt="FAQ">
	
</div>

</div>

<div class="row flex">

<div class="infoBox colHalf rules">
	<div class="inner">
		<h2>Rules</h2>
		<p>Read up on the rules of Dream Lotary so you can play safely and never miss out on a prize.</p>
		<a href="/rules" title="Dream Lotary Rules" class="button">Rules</a>
	</div>
	
		<img src="images/info/rules.png" alt="Lotto Rules">
	
</div>

<div class="infoBox colHalf bumper-draws">
	<div class="inner">
		<h2>Bumper Draws</h2>
		<p>Learn about the special Bumper Draws that take place from time to time, and which offer even bigger jackpots.</p>
		<a href="/bumper-draw" title="Information about Bumper Draws" class="button">Bumper Draws</a>
	</div>
	
		<img src="images/info/bumper-draws.png" alt="Billboard">
	
</div>

</div>

<!-- <div class="row flex">

<div class="infoBox colHalf bumper-draws">
	<div class="inner">
		<h2>Dream Lotary Raffle</h2>
		<p>Discover more about the Dream Lotary Raffle, which creates five winners in every month of the year.</p>
		<a href="/raffle" title="Information about the Dream Lotary Raffle" class="button">Raffle</a>
	</div>
	
		<img src="/images/info/raffle.svg" alt="Raffle" style="width: 180px;">
	
</div>

<div class="infoBox colHalf app">
	<div class="inner">
		<h2>App</h2>
		<p>Coming soon! The Dream Lotary app will let you buy tickets and check results on the go. Learn more about it here.</p>
		<a href="/app" title="Dream Lotary App" class="button">App</a>
	</div>
	
		<img src="/images/layout/phones.png" alt="Andorid Phones">
	
</div>		

</div> -->

<div class="row flex">

<div class="infoBox colHalf scams">
	<div class="inner">
		<h2>Scams</h2>
		<p>Lottery scams are commonly used to try and take money from unsuspecting victims. Discover how to spot scams and what to do if you are targeted.</p>
		<a href="/scams" title="More about lottery scams" class="button">Scams</a>
	</div>
	
		<img src="images/info/scammer.png" alt="Scammer">
	
</div>

<div class="infoBox colHalf prizes">
	<div class="inner">
		<h2>Draw Mechanism</h2>
		<p>How the Dream Lotary draw takes place and the auditing process to ensure fairness.</p>
		<a href="/draw-mechanism" title="More about lottery draw mechanism" class="button">Draw Mechanism</a>
	</div>
	
		<img src="images/info/machine.png" alt="Lottery Machine">
	
</div>

</div>

</div>
<br>
<?php
include "include/footer.php";
?>