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

<div itemscope itemtype="http://schema.org/HowTo">

	<span itemprop="name"><h1>How to Play</h1></span>

	<div itemprop="description">
		<p>Learn how to play Dream Lotary right here, and take part in the first online lottery for the whole of India. Whether you’re located in India or elsewhere, playing couldn’t be simpler and takes seconds. Read on to find out how the lottery works, how to enter and what to expect from the Dream Lotary draw.</p>
		<p>Entering a Dream Lotary draw will only take you a maximum of <span itemprop="totalTime" content="PT2M">two minutes</span>. Tickets cost <span itemprop="estimatedCost" itemscope itemtype="http://schema.org/MonetaryAmount"><meta itemprop="currency" content="INR"><meta itemprop="value" content="40">₹40</span> and you will only need a <span itemprop="tool" itemscope itemtype="http://schema.org/HowToTool"><span itemprop="name">computer</span></span>, <span itemprop="tool" itemscope itemtype="http://schema.org/HowToTool"><span itemprop="name">tablet</span></span> or <span itemprop="tool" itemscope itemtype="http://schema.org/HowToTool"><span itemprop="name">smartphone</span></span> that can access the <span itemprop="supply" itemscope itemtype="http://schema.org/HowToSupply"><span itemprop="name">internet</span></span> to play online. Once you are ready to buy your Dream Lotary tickets, follow the steps below:</p>
	</div>

	<div id="steps" class="fx">
	
		<div class="row">
			<div class="step" id="step1" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
				<link itemprop="url" href="https://lotto-india.com/how-to-play#step1">
				<img itemprop="image" alt="Selecting your Numbers" src="images/howto/1-choose-numbers.svg">
				<div itemprop="name" class="h3">Select Your Numbers</div>
				<div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
					<div itemprop="text">
						<p>Visit the <a href="play.php" title="Play Dream Lotary">Play Dream Lotary</a> page and select the 'Play' button. Select six numbers from 1 to 50 on one of the game panels, then select a Joker Ball from 1 to 5. Alternatively, opt for a Quick Pick to have a random set of numbers generated for you. To submit more than one entry, move on to the next panel and select another set of numbers.</p>
					</div>
				</div>
			</div>
			<div class="step" id="step2" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
				<link itemprop="url" href="https://lotto-india.com/how-to-play#step2">
				<img itemprop="image" alt="Choosing the number of draws" src="images/howto/2-choose-draws.svg">
				<div itemprop="name" class="h3">Choose the Amount of Draws to Enter</div>
				<div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
					<div itemprop="text">
						<p>Decide whether you want to enter your numbers into a single draw, or subscribe for multiple draws in advance. You can choose to subscribe for up to three months in advance.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="step" id="step3" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
				<link itemprop="url" href="https://lotto-india.com/how-to-play#step3">
				<img itemprop="image" alt="Pay for your Panels" src="images/howto/3-pay.svg">
				<div itemprop="name" class="h3">Pay for Your Panels</div>
				<div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
					<div itemprop="text">
						<p>Select ‘Add to Cart’ when you have finished choosing your numbers and entry type, then select ‘Pay’ to complete your purchase. If you are a new user, you will need to register for an account and provide payments details. Existing users need to sign in to complete the checkout process.</p>
						<!-- <p>After paying for your panels, you will be automatically entered into the monthly <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a>, giving you the chance of winning an additional ₹8,000.</p> -->
					</div>
				</div>
			</div>
			<div class="step" id="step4" itemprop="step" itemscope itemtype="http://schema.org/HowToStep">
			<link itemprop="url" href="https://lotto-india.com/how-to-play#step4">
				<img itemprop="image" alt="Check your numbers" src="images/howto/4-checker.svg">
				<div itemprop="name" class="h3">Check Your Numbers</div>
				<div itemprop="itemListElement" itemscope itemtype="http://schema.org/HowToDirection">
					<div itemprop="text">
						<p>Once you have paid for your entries, look out for the order confirmation in your emails. You can then check your numbers against the official <a href="results.php" title="Dream Lotary Results">results</a> or use the <a href="check-numbers.php" title="Check your Dream Lotary Numbers">panel checker</a> to see if you have won in the last 90 days.</p>
						<p>If you believe you have won a prize, visit the <a href="how-to-claim-prizes.php" title="How to Claim a Dream Lotary Prize">Claiming Prizes</a> page to find out what to do next.</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>

</div>


<br>

	<style type="text/css">

		#bnr-bg {background: url(images/a-banner-bg.jpg) transparent no-repeat; position: absolute; width: 100%; height: 100%; overflow: hidden;z-index: 1; animation: bg 12s ease-in-out 0s infinite alternate;-webkit-animation: bg 12s ease-in-out 0s infinite alternate;}
		#bnr-base {position: relative; width: 790px; height: 160px; overflow: hidden; display: block; border-radius: 4px; margin:0 auto 20px;}
		#bnr-ad {position: relative; width: 750px; height: 100px; overflow: hidden; display: block; border-radius: 4px;}
		#bnr-logo {background: url(images/a-banner-logo.png) transparent center no-repeat; width: 190px; height: 194px; position: absolute; left: -20px; top: -5px; background-size:190px 194px; z-index: 3;animation: logo 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; -webkit-animation: logo 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal;}

		.bnr-text {position: absolute; width: 100%; left: -20px; top: 65px; transform: scale(.001); text-rendering: optimizeLegibility; z-index: 9;font:700 36px/36px Oswald, arial, sans-serif; color: #000; text-align: center; text-transform: uppercase;animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; -webkit-animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal;}
		.bnr-text-navi {position: absolute; width: 100%; left: -20px; top: 65px; transform: scale(.001); text-rendering: optimizeLegibility; z-index: 9;font:700 30px/30px Oswald, arial, sans-serif; color: #000; text-align: center; text-transform: uppercase;animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; -webkit-animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal;}
		#bnr-textA {left:0;}
		#bnr-textA {font-size:24px;}
		.bnr-wrapper.el-nino .bnr-text {color:#fff;}
		#bnr-textB {animation-name: textB; -webkit-animation-name: textB; font-size: 24px; left:-200px; transform:  scale(1); text-align:left; top:30px; font-weight:normal}
		#bnr-textC {animation-name: textC; -webkit-animation-name: textC; left:-350px; transform:  scale(1); text-align:left; top:75px; font-size: 52px;}
		#bnr-textD {animation-name: textC; -webkit-animation-name: textC; left:-350px; transform:  scale(1); text-align:left; top:75px; font-size: 38px;}
		#bnr-textE {animation-name: textC; -webkit-animation-name: textC; left:-350px; transform:  scale(1); text-align:left; top:75px; font-size: 35px;}
		.bnr-textF {position: absolute; width: 100%; left: -20px; top: 20px; transform: scale(.001); text-rendering: optimizeLegibility; z-index: 9;font:700 20px/36px Oswald, arial, sans-serif; color: #000; text-align: center; text-transform: uppercase;animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; -webkit-animation: textA 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal;}
		.euroVal {animation-name: euroVal; animation: euroVal 12s linear infinite normal; -webkit-animation-name: euroVal; -webkit-animation: euroVal 12s linear infinite normal; position: absolute; font-size: 12px; bottom: 4px; right: 4px; z-index: 9; color: #FFF;}

		.bnr-button {position: absolute; top: 25px; text-rendering: optimizeLegibility; z-index: 9;animation: button 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; -webkit-animation: button 12s cubic-bezier(.68, -.55, .265, 1.55) 0s infinite normal; font-size:28px;}
		
			.bnr-button:hover {background: #fcfc3c;background-image: -webkit-linear-gradient(top, #fcfc3c, #ffbf00);background-image: linear-gradient(to bottom, #fcfc3c, #ffbf00);color: #444; text-shadow: 1px 1px 0px #FFF; transform: scale(1.2); -webkit-transform: scale(1.2);}
		
		#bnr-button1 {right: -200px; top:48px;}
		#bnr-base #timer {width:211px;}
		#bnr-textC span {display:block; font-size:18px;}

		@keyframes logo {
			0% {left: -200px;}
			30% {left: -200px;}
			35% {left: -20px;}
			99% {left: -20px;}
			100% {left: -200px;}
		}

		@-webkit-keyframes logo {
			0% {left: -200px;}
			30% {left: -200px;}
			35% {left: -20px;}
			99% {left: -20px;}
			100% {left: -200px;}
		}

		@keyframes textA {
			0% {opacity: 0; transform: scale(.001);}
			2% {opacity: 1; transform: scale(1);}
			23% {opacity: 1; transform: scale(1.07);}
			25% {opacity: 0; transform: scale(4);}
			100% {opacity: 0;}
		}

		@-webkit-keyframes textA {
			0% {opacity: 0; -webkit-transform: scale(.001);}
			2% {opacity: 1; -webkit-transform: scale(1);}
			23% {opacity: 1; -webkit-transform: scale(1.07);}
			25% {opacity: 0; -webkit-transform: scale(4);}
			100% {opacity: 0;}
		}

		@keyframes textB {
			0% {left: -200px;}
			25% {left: -200px;}
			30% {left: 200px;}
			90% {left: 200px;}
			97% {left: -200px;}
			100% {left: -200px;}	
		}

		@-webkit-keyframes textB {
			0% {left: -200px;}
			25% {left: -200px;}
			30% {left: 200px;}
			90% {left: 200px;}
			97% {left: -200px;}
			100% {left: -200px;}		
		}

		@keyframes textC {
			0% {left: -350px;}
			27% {left: -350px;}
			32% {left: 200px;}
			92% {left: 200px;}
			95% {left: -350px;}	
		}

		@-webkit-keyframes textC {
			0% {left: -350px;}
			27% {left: -350px;}
			32% {left: 200px;}
			92% {left: 200px;}
			95% {left: -350px;}		
		}

		@keyframes button {
			0% {right: -250px;}
			36% {right: -250px;}
			42% {right: 40px;}
			98% {right: 40px;}
			100% {right: -250px;}
		}

		@-webkit-keyframes button {
			0% {right: -250px;}
			36% {right: -250px;}
			42% {right: 40px;}
			98% {right: 40px;}
			100% {right: -250px;}
		}

		@keyframes spand {
			0% {transform: scale(1, 1);}
			50% {transform: scale(1.2, 1.2);}
			100% {transform: scale(1, 1);}
		}

		@-webkit-keyframes spand {
			0% {transform: scale(1, 1);}
			50% {transform: scale(1.2, 1.2);}
			100% {transform: scale(1, 1);}
		}

		@keyframes enter {
			0% {opacity: 0; transform: scale(3,3);}
			90% {opacity: 0; transform: scale(3,3);}
			95% {opacity: 1;}
			100% {transform: scale(1,1);}
		}

		@-webkit-keyframes enter {
			0% {opacity: 0; transform: scale(3,3);}
			90% {opacity: 0; transform: scale(3,3);}
			95% {opacity: 1;}
			100% {transform: scale(1,1);}
		}
		
		@keyframes euroVal {
			0%,40%,100% {opacity: 0;}
			52%,98% {opacity: 1;}
		}
		
		@-webkit-keyframes euroVal {
			0%,40%,100% {opacity: 0;}
			52%,98% {opacity: 1;}
		}

	</style>


<a id="bnr-base" href="/en/play/lotto-india" target="_blank" rel="nofollow" title="Play Dream Lotary " class="bnr-wrapper">

	<div id="bnr-bg"></div>
	<div id="bnr-logo"></div>
	<div id="bnr-textA" class="bnr-text">The first online lottery for Indians Worldwide</div>
	<div id="bnr-textB" class="bnr-text">Next Jackpot</div>
	<div id="bnr-textC" class="bnr-text">
		₹4 Crore*
	</div>
	
		<div id="bnr-button1" class="bnr-button button">Play <br>Now</div>
	
</a>


<div align="center">
	<div itemscope="" itemtype="http://schema.org/VideoObject"><meta itemprop="thumbnailURL" content="http://lotto-india.com/images/thumbnails/how-to-play-lotto-india.jpg" /><meta itemprop="embedURL" content="https://youtu.be/E57G2vDeqbY" /><meta itemprop="uploadDate" content="2019-06-18" /><meta itemprop="name" content="A Video Guide to playing Dream Lotary" /><iframe width="560" height="315" src="https://www.youtube.com/embed/E57G2vDeqbY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<p align="center"><span itemprop="description"><em>A video explaining how to play Dream Lotary</em></span></p>
	</div>
</div>

<h2>How to Win Dream Lotary</h2>

<p>To win, your objective is to pick what you think the winning six numbers and the Joker Ball will be. If your predictions are correct, you could win up to ₹4 Crore, or even up to ₹40 Crore in special Bumper Draws! Not only that, entry into the main draw also guarantees you automatic inclusion in the Dream Lotary Raffle, giving away ₹40,000 in prizes every month.</p>

<p>The odds of winning the jackpot are 1 in 79,453,500, and there is a 1 in 3 chance of winning a prize. Take a look at the <a href="prizes.php" title="Dream Lotary Prizes">Dream Lotary Prizes</a> page to find out exactly what you could win. </p>

<p>One panel of numbers costs ₹40. The more entries you buy, the better your chances of winning big. To play Dream Lotary, you need to have sufficient funds in your online account to cover the cost of your entries. You can find the list of payment options on the <a href="faq.php" title="FAQ">FAQ</a> page.</p>

</div>

</div>
<?php
include "include/footer.php";
?>