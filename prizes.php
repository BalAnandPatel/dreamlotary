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

<h1>Prizes</h1>
<p>To win a Dream Lotary prize, you have to match your chosen numbers with those that appear in the draw. Match just the Joker Ball to win the Free Bet Bonus; match all six numbers and the Joker Ball to win the jackpot. The table below shows what prizes you can win, as well as the odds for each tier.</p>



<table class="alt tableExp prizeTable">
<caption>Dream Lotary Prizes</caption>
	<thead>
		<tr>
			<th>Prize Level</th>
			<th>Prize*</th>
			<th>Odds</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th><img src="images/balls/match-6-1.png" alt="Match 6 + Joker Ball">Match 6 + Joker Ball</th>
			<td data-content="Prize">₹4 Crore</td>
			<td data-content="Odds">1 in 79,453,500</td>
		</tr>
		<tr>
			<th><img src="images/balls/match-6.png" alt="Match 6 ">Match 6</th>
			<td data-content="Prize">₹7,50,000</td>
			<td data-content="Odds">1 in 19,863,375</td>
		</tr>
		<tr>
			<th><img src="images/balls/match-5.png" alt="Match 5">Match 5</th>
			<td data-content="Prize">₹80,000</td>
			<td data-content="Odds">1 in 75,240</td>
		</tr>
		<tr>
			<th><img src="images/balls/match-4.png" alt="Match 4">Match 4</th>
			<td data-content="Prize">₹4,000</td>
			<td data-content="Odds">1 in 1,400</td>
		</tr>
		<tr>
			<th><img src="images/balls/match-3.png" alt="Match 3">Match 3</th>
			<td data-content="Prize">₹400</td>
			<td data-content="Odds">1 in 75</td>
		</tr>
		 <tr>
			<th><img src="images/balls/match-2.png" alt="Match 2">Match 2</th>
			<td data-content="Prize">₹40</td>
			<td data-content="Odds">1 in 10</td>
		</tr>
		<tr>
			<th><img src="images/balls/match-joker.png" alt="Match 0 + Joker Ball">Match 0 + Joker Ball</th>
			<td data-content="Prize">Free Bet Bonus</td>
			<td data-content="Odds">1 in 5</td>
		</tr>
		<tr class="bottom center">
			<td colspan="3">Overall odds of winning a prize: 1 in 3 <br>Overall odds of winning a Free Bet Bonus: 1 in 5</tr>
		</tr>

	</tbody>
</table>



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


<h2>Prize Information</h2>

<p>Dream Lotary's prize structure is kept simple to make it possible for you to win a substantial jackpot at a low cost. You can find further information about prizes below:</p>

<ul class="list">
	<li>There are six prizes available to win in Dream Lotary: the jackpot, fixed prizes of ₹80,000, ₹4,000, ₹400, ₹40 and a Free Bet Bonus. <!-- There is also a chance to win a share of the ₹40,000 <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a> monthly prize.--></li>
	<li>If you match the Joker Ball, you win a Free Bet Bonus, which entitles you to a free bet on a future Dream Lotary draw.</li>
	<li>If you match all six main numbers and the Joker Ball, you win the jackpot, which is ₹40,000,000 in any standard draw. If more than one person matches all six numbers and the Joker Ball, the jackpot is shared evenly between the winners. For example, if three people lay claim to a jackpot of ₹40,000,000, each would receive approximately ₹13,333,333.</li>
	<li>The jackpot does not roll over from draw to draw; the prizes remain the same for each Dream Lotary draw.</li>
	<li>Prizes are paid out in a single lump sum, and not as an annuity. </li>
	<li>*Prizes are converted to INR from EUR (the insurance currency), which means these values are an estimate and can vary depending on the exchange rate</li>
	<li>From time to time, Dream Lotary will hold special Bumper Draws. In a Bumper Draw, the jackpot is increased significantly while keeping the cost of entry the same. You can find the dates of scheduled dates for these draws on the <a href="/bumper-draw" title="Bumper Draws">Bumper Draws</a> page.</li>
</ul>

<p>Check out the <a href="/how-to-claim-prizes" title="How to Claim Dream Lotary Prizes">Claiming Prizes</a> page if you've already won a prize and want to know what to do next.</p></p>

</div>


</div>
<?php
include "include/footer.php";
?>