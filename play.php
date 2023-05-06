<?php include "include/header.php"; ?>
<head>
	
<style type="text/css">	
	.jackpotBox {background:#fafafa; border:1px solid #f0f0f0; display:inline-block; width:248px; text-align:center; padding:30px 15px; margin:15px; position:relative;}
	.jackpotBox.lottery .title {display:flex; align-items:center; justify-content:center;background:#000; border-radius:6px; color:#fff; padding:5px 10px; position:absolute;top:-15px; transform:translateX(-50%); left:50%; min-width:71%; font-size:15px; vertical-align:middle;}
	.jackpotBox.lottery.powerball .title {background:#d43333;}
	.jackpotBox.lottery.mega-millions .title {background:#f51298;}
	.jackpotBox.lottery.euromillions .title {background:#af39e9;}
	.jackpotBox .title {font-size:18px; font-weight:700;}
	.jackpotBox .jackpot {font-size:32px;font-weight:700;color:#c00; line-height:40px;}
	.jackpotBox .jackpot.highlight {line-height:30px;}
	.jackpotBox .date {margin-bottom:5px;}
	.jackpotBox .button {float:none; display:inline-block; margin:0;}

</style>


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

	<h1>Play Dream Lotary</h1>

	<p>Take the chance to win a jackpot worth at least ₹4 Crore by playing Dream Lotary today. You could even win up to ₹40 Crore when special Bumper Draws are held. It's the largest online Indian lottery ever, not to mention the first of its kind: a national lottery for Indian people on every continent. Dream Lotary draws take place at 6:00 PM every Tuesday and Friday. Match just one ball to win the Free Bet Bonus, and match all the winning numbers for a jackpot at least three times larger than some Indian state lotteries. To find out more, visit the <a href="how-to-play.php" title="How to Play Dream Lotary">How to Play</a> page.</p>

	
	
	<div class="centred">
		<div class="lotto-india nextBox big" style="position: relative;">
	
			
				<div class="imgBox">
					<img src="images/logo.png" alt="lotto-india Logo">
				</div>
			
	
				<div class="col">
					<div class="title">
						Next Jackpot
					</div>
					
						<div class="bigJackpotWhite">&#8377;<span class="mainJackpot">4 Crore</span>*</div>
						<div class="date">Tuesday, May 9, 2023</div>
										
				</div>
		
				<div class="col">
					
						<div class="col centred countdown">
							<div class="title">Time left to Choose Numbers:</div>
							<div id="lotto-indiaCountdown" style="display:flex">
		
		<script>
			var days696 = 3;
			var hours696 = 5;
			var minutes696 = 36;
			var seconds696 = 15;
			var countdown696 = document.getElementById('lotto-indiaCountdown');
			
			function display696() {
			
				if (days696 > 0 || hours696 > 0 || minutes696 > 0 || seconds696 > 0) {
					
					if (hours696 <= 0 && minutes696 <= 0 && seconds696 <= 0) {hours696 = 23; minutes696 = 59; seconds696 = 59; days696 -= 1}
					else if (minutes696 <= 0 && seconds696 <= 0) {minutes696 = 59; seconds696 = 59; hours696 -= 1}
					else if (seconds696 <= 0) {seconds696 = 59; minutes696 -= 1}
					else {seconds696 -= 1}
					
					countdown696.innerHTML = "<span class='counterPart'><span class='counterType'>days</span><span class='counterVal'>" + days696 + "</span></span>"
					countdown696.innerHTML += "<span class='counterPart'><span class='counterType'>hours</span><span class='counterVal'>" + hours696 + "</span></span>"
					countdown696.innerHTML += "<span class='counterPart'><span class='counterType'>mins</span><span class='counterVal'>" + minutes696 + "</span></span>"
					countdown696.innerHTML += "<span class='counterPart'><span class='counterType'>secs</span><span class='counterVal'>" + seconds696 + "</span></span>"
					setTimeout("display696()",1000);

				} else {
					countdown696.innerHTML = "<strong style='padding: 10px; font-size: 1.2em;'>Draw in Progress!</strong>"
				}
			};
			
			display696();
		</script>
		<noscript>
			<span class="counterPart"><span class="counterType">days</span><span class="counterVal">3</span></span>
			<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">5</span></span>
			<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">36</span></span>
			<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">15</span></span>
		</noscript></div>
						</div>
					
						<a href="/en/play/lotto-india" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener" target="_blank">Play Now</a>
					
				</div>
		
			
	
		</div>

	</div>
		
	<div class="centred">
	<div class="jackpotBox lottery powerball">
		<div class="title">Play Powerball</div>
		<div class="subJackpot" style="color: #333;">$87,000,000</div>
		<div class="jackpot">&#8377;711 Crore!</div>
		<div class="date" style="color: #333;">Saturday 6th May</div>
		
			<a href="/en/play/powerball" rel="nofollow" title="Play Powerball Now" target="_blank" class="button">Play Now</a>
				 
	</div>
	
	<div class="jackpotBox lottery mega-millions">
		<div class="title">Play Mega Millions</div>
		<div class="subJackpot">$83,000,000</div>
		<div class="jackpot">&#8377;678.3 Crore!</div>
		<div class="date">Tuesday 9th May</div>
		
			<a href="/en/play/mega-millions" rel="nofollow" title="Play Mega Millions Now" target="_blank" class="button">Play Now</a>
		
	</div>

	<div class="jackpotBox lottery euromillions">
		<div class="title">Play EuroMillions</div>	
		<div class="subJackpot">£14,000,000</div>
		<div class="jackpot">&#8377;144.6 Crore!</div>
		<div class="date">Tuesday 9th May</div>
		 
			<a href="/en/play/euromillions" rel="nofollow" title="Play EuroMillions Now" target="_blank" class="button">Play Now</a>
		
	</div>
</div><br>

	<!-- <p>Once you select 'Play Now' and complete your purchase for the next Dream Lotary draw, you will be automatically entered into the <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a>. Giving you a chance at winning the guaranteed monthly prize.</p> -->
			
	<h2>Why Play the Lottery Online?</h2>

    <p>Entering online is much quicker and more convenient than purchasing a paper ticket from a retailer, and you can do it from home or on the go. Here are some of the biggest benefits to playing online lotteries:</p>

	<div class="col-list p-margin alLeft">
        <div>
            <img src="images/icons/secure.svg" alt="Secure">
            <p>The numbers you pick are kept safe in your online account – you’ll never have to worry about losing a ticket.</p>
        </div>
        <div>
            <img src="images/icons/notification.svg" alt="Notification">
            <p>You’ll receive an automatic email every time you win a prize, so you’ll never miss a win again!</p>
        </div>
        <div>
            <img src="images/icons/online.svg" alt="Online">
            <p>You can log in to your account from your phone, computer, or tablet, and you don't need a lottery card.</p>
        </div>
        <div>
            <img src="images/icons/thumb.svg" alt="Convenience">
            <p>Get your entries quickly and easily online; no more queuing for tickets at your local mom-and-pop store.</p>
        </div>
    </div>

</div>

</div>

<?php
include "include/footer.php";
?>