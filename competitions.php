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

<h1>Competitions</h1>
	
<p>Dream Lotary regularly runs promotions and competitions on social media to give fans extra chances to win prizes! Be sure to follow us on social media to stay up to date with upcoming events.</p>



<div class="centred">
	<div class="lotto-india nextBox" style="position: relative;">

		
			<div class="imgBox">
				<img src="/images/layout/logo.svg" alt="lotto-india Logo">
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
		var hours696 = 3;
		var minutes696 = 7;
		var seconds696 = 47;
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
		<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">3</span></span>
		<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">7</span></span>
		<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">47</span></span>
	</noscript></div>
					</div>
				
					<a href="/en/play/lotto-india" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener" target="_blank">Play Now</a>
				
			</div>
	
		

	</div>

</div>

<h2>September 2021 <span class="highlight">Dream Lotary Giveaway</span> Winners</h2>

<p>The winners for the September 2021 giveaway will be announced shortly.</p>
	
<!--<div class="fx">
	<a href="https://www.facebook.com/lottoindiaofficial/" title="Visit the Dream Lotary Facebook page" class="social" target="_blank" rel="noopener">
		<img src="/images/icons/facebook.svg" alt="Facebook"><br>
		Like us on Facebook
	</a>
	<a href="https://www.instagram.com/lottoindia/" title="Visit the Dream Lotary Instagram page" class="social" target="_blank" rel="noopener">
		<img src="/images/icons/instagram.svg" alt="Instagram"><br>
		Follow us on Instagram
	</a>
	<a href="https://twitter.com/lottoindia" title="Visit the Dream Lotary Twitter page" class="social" target="_blank" rel="noopener">
		<img src="/images/icons/twitter.svg" alt="Twitter"><br>
		Follow us on Twitter
	</a>
</div> --->

<h2>June 2019 <span class="highlight">Free Ticket Giveaway</span> Winners</h2>

<p>To mark the launch of the first ever draw on June 14, Dream Lotary ran a social media competition and the following entrants each won a free entry for the first draw.</p>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/mathangi-sai-jyothi.jpg" alt="Mathangi Sai Jyothi"></div>
		<div class="content">
			<div class="title">Mathangi Sai Jyothi</div>
			<p>Yeah I won the lottery and thanks for Dream Lotary.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/jai-khera.jpg" alt="Jai Khera"></div>
		<div class="content">
			<div class="title">Jai Khera</div>
			<p>Thank you so much Dream Lotary for choosing me as free entry for first draw.  Hope I will win this prize.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/nikhil-jayakumar.jpg" alt="Nikhil Jayakumar"></div>
		<div class="content">
			<div class="title">Nikhil Jayakumar</div>
			<p>I feel privileged to be part of Dream Lotary. I think my luck just became bright.</p>
		</div>
	</div>
</div>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/rajat-kapoor.jpg" alt="Rajat Kapoor"></div>
		<div class="content">
			<div class="title">Rajat Kapoor</div>
			<p>I would like to thank Dream Lotary for giving me such a great opportunity to participate and win this free entry ticket. Really looking forward to win.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/muhammad-siraj.jpg" alt="Muhammad Siraj A I"></div>
		<div class="content">
			<div class="title">Muhammad Siraj A I</div>
			<p>Now I’m Flying. I just saw message I won. I can’t express my self. Thank you so much Team, you made my Day. Awesome feeling</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/riyaz-uddeen.jpg" alt="Riyaz Uddeen"></div>
		<div class="content">
			<div class="title">Riyaz Uddeen</div>
			<p>I feel very happy that I won this competition, still I don't believe it, thank u so much.</p>
		</div>
	</div>
</div>
<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/joshwa-allen.jpg" alt="Joshwa Allen"></div>
		<div class="content">
			<div class="title">Joshwa Allen Dsa</div>
			<p>I didnt expected it was an surprise fr me i was vry much happy thnk u.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/c-lalnukimi.jpg" alt="C Lalnukimi"></div>
		<div class="content">
			<div class="title">C.Lalnukimi</div>
			<p>If i win this i will build my own house and the rest of are for my family and my two daughters future.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/suryakant-borad.jpg" alt="Suryakant Borad"></div>
		<div class="content">
			<div class="title">Suryakant Borad</div>
			<p>Being a winner of Lotto, amazes us at this stroke of luck. I celebrate this win with Lotto arrival in India. So it will be a memorable moment.</p>
		</div>
	</div>
</div>
<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/zothan-mawii.jpg" alt="Zothanmawii Khawlhring"></div>
		<div class="content">
			<div class="title">Zothanmawii Khawlhring</div>
			<p>I still cant believe this is really for real. I am feeling so blessed. I can now have the opportunity to build a house of our own. Its a dream come true. Thank you so much #LottoIndia</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/sukhvir-singh.jpg" alt="Sukhvir Singh"></div>
		<div class="content">
			<div class="title">Sukhvir Singh</div>
			<p>I'm very happy with this prize. If I win money my family future secure and support, and help other poor people I donate some money my village school and help other people thanks.</p>
		</div>
	</div>		
	<div class="box">
		<div class="avatar"><img src="/images/competitions/nisha.jpg" alt="Nisha"></div>
		<div class="content">
			<div class="title">Nisha</div>
			<p>I am overwhelmed with my win from Dream Lotary. They turned my dreams into reality & now I am going to hustle to enjoy each and every moment I can get. As I promised, I'll definitely donate some of my money to my favourite charitable cause.</p>
		</div>
	</div>
</div>

</div>

<script>
addLoadEvent(function(){
	var tabs = document.querySelectorAll(".js-tab");
	for (var i = 0; i < tabs.length; i++) {
		tabs[i].addEventListener("click", function(){ tabToggle(this) });
	}
});
function tabToggle(obj) {
	if (obj.className.indexOf("is-active") != -1) {
		obj.className = "js-tab";
		obj.nextElementSibling.style.display = "none";
	} else {
		obj.className = "js-tab is-active";
		obj.nextElementSibling.style.display = "block";
	}	
};
</script>

</div>

<?php
include "include/footer.php";
?>