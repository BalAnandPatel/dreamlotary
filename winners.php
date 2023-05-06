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
		
		<div class="genBox mBottom" style="position:relative;">

<h1>Winner Testimonials</h1>
	
<p>Dream Lotary is loved by many players, thanks to its ₹4 Crore jackpot, incredible <a href="/bumper-draw" title="Dream Lotary Bumper Draws">Bumper Draw</a> prizes, free bets and exciting competitions. Most importantly, it gives millions of people the chance to turn their dreams into a reality. View some of Dream Lotary’s lucky winners below and find out what they love the most about the game.</p>
		<div class="writers">
		<div class="writer">
			<div class="avatar">
					<img src="/images/winners/second-prize-winner.jpg" alt="Mr Rao Photo" class="avatarImg">
			</div>
			<div class="contentBox">
				<div class="title">2nd Prize Level Winner</div>
				<div class="subTitle">Mr Rao</div>
				<p>Mr Rao from Serampore in West Bengal was a big winner on Tuesday 4th May, taking home the second prize of ₹80,000. Despite being so close to winning the ₹4 Crore jackpot, Mr Rao was still delighted with his win:</p>
				<p style="font-style:italic">It feels really qwesome to got the 2nd Prize! I will use this money to treat my family and help my friends. Many thank you to Dream Lotary for this prize!</p>		
			</div>
		</div>
		</div>
<br>
<p>The testimonials below come from real Dream Lotary winners. They have told us what attracts them to the game, what motivates them to play, and how they would spend the jackpot. Original emails and details of all winners are held on record at Dream Lotary’s offices and can be verified.</p>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/parthiban.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Parthiban</div>
			<div class="subtitle mapPin">Chennai</div>
			<p class="quotes">I play Dream Lotary for the excitement and to test my luck. If I win the jackpot, I will support the poor and enjoy a world tour.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/jyotsna.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Jyotsna</div>
			<div class="subtitle mapPin">Mangalore</div>
			<p class="quotes">I play to win and because I enjoy playing. Winning the Dream Lotary jackpot will help my family members.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/Kiran.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Kiran</div>
			<div class="subtitle mapPin">Mumbai</div>
			<p class="quotes">I like playing online and I think LotteryWorld is the most trusted online lottery site. If I win the Dream Lotary jackpot, I plan to spend it on my family.</p>
		</div>
	</div>
</div>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/jasper.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Jasper</div>
			<div class="subtitle mapPin">Shillong</div>
			<p class="quotes">If I were told that I won the Dream Lotary jackpot, I'd thank God for the blessing!</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/dayanand.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Dayanand</div>
			<div class="subtitle mapPin">Talegaon Dabhade</div>
			<p class="quotes">LotteryWorld is a safe lottery site. If I win the Dream Lotary jackpot I will enjoy my life without a job!</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/sooraj.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Sooraj</div>
			<div class="subtitle mapPin">Thiruvananthapuram  </div>
			<p class="quotes">Dream Lotary gives hope for the hopeless. If I won the jackpot I would invest and donate some too.</p>
		</div>
	</div>
</div>



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
		var hours696 = 4;
		var minutes696 = 7;
		var seconds696 = 27;
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
		<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">4</span></span>
		<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">7</span></span>
		<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">27</span></span>
	</noscript></div>
					</div>
				
					<a href="/en/play/lotto-india" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener" target="_blank">Play Now</a>
				
			</div>
	
		

	</div>

</div>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/anshul.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Anshul</div>
			<div class="subtitle mapPin">Garhwal</div>
			<p class="quotes">If I win the jackpot I would just scream out loud and I will be so happy - it will be an awesome feeling.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/jyotsna-nayak.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Jyotsna Nayak</div>
			<div class="subtitle mapPin">Mangalore</div>
			<p class="quotes">Dream Lotary is great as it helps the people. I enjoy playing and if I win the jackpot, I will help all my family members.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/julliet.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Juliet</div>
			<div class="subtitle mapPin">Bangalore  </div>
			<p class="quotes">If I win the jackpot I will buy a house for my family and if possible I will help the needy.</p>
		</div>
	</div>
</div>

<div class="winnersBox">
	<div class="box">
		<div class="avatar"><img src="/images/competitions/giri.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Giri Kannappa</div>
			<div class="subtitle mapPin">Peddapuram</div>
			<p class="quotes">If I win the Dream Lotary jackpot I will share some with orphans and support their education and their sports.</p>
		</div>
	</div>
	<div class="box">
		<div class="avatar"><img src="/images/competitions/tehseen.jpg" alt="profile picture"></div>
		<div class="content">
			<div class="title">Tehseen</div>
			<div class="subtitle mapPin">Bhopal</div>
			<p class="quotes">I play Dream Lotary to test destiny and hope I will be rewarded.</p>
		</div>
	</div>
</div>

<h2>More Dream Lotary Winners</h2>
<p>Dream Lotary has created more than 12,000 winners since it began. Below you can see details for a small selection of those lucky people, including their location, the draw date in which they won and the prize amount received. <!-- You can also find winners of our <a href="/raffle" title="Dream Lotary Raffle">Dream Lotary Raffle</a> on the dedicated raffle page. --></p>

<table class="alt prizeTable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Draw Date</th>
		</tr>
	</thead>
	<tbody>
		
						<tr>
							<td><span style="text-transform: capitalize;">Danny M.</span></td>
							<td>Londonderry</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Worried M.</span></td>
							<td>Lusaka</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Atabek K.</span></td>
							<td>Tashkent</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Saviour A.</span></td>
							<td>Mosta</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">ASHISH A.</span></td>
							<td>Luxembourg</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Юрий К.</span></td>
							<td>Oral</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Геннадий Г.</span></td>
							<td>Almaty</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Shamsher S.</span></td>
							<td>Dornach</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Michal R.</span></td>
							<td>Bellshill</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Shahariya Ahmed J.</span></td>
							<td>Burnley</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Bal G.</span></td>
							<td>Luton</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Harish G.</span></td>
							<td>Warwick</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Elias D.</span></td>
							<td>Dundee</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Felix C.</span></td>
							<td>LIMAVADY</td>
							<td>Friday, May 5, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Harish G.</span></td>
							<td>Warwick</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Worried M.</span></td>
							<td>Lusaka</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">ALFREDO LEOBARDO B.</span></td>
							<td>APODACA.    NUEVO LEON</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Saviour A.</span></td>
							<td>Mosta</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">ASHISH A.</span></td>
							<td>Luxembourg</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Wondwosen A.</span></td>
							<td>Surrey</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Rahul -.</span></td>
							<td>Tallinn</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Toshpulat K.</span></td>
							<td>Gulistan</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Guillermo R.</span></td>
							<td>Santiago</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Jürgen W.</span></td>
							<td>Vienna</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Marco S.</span></td>
							<td>Essex</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Michal R.</span></td>
							<td>Bellshill</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Raisa P.</span></td>
							<td>Wrexham</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Ruvimbo G.</span></td>
							<td>Northampton</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Shahariya Ahmed J.</span></td>
							<td>Burnley</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
						<tr>
							<td><span style="text-transform: capitalize;">Jeffrey J.</span></td>
							<td>RHYL</td>
							<td>Tuesday, May 2, 2023</td>
						</tr>
	</tbody>
</table>

<p>What would you do if you won the Dream Lotary jackpot? Get in touch and tell us why you love to play and how you would spend the prize money. Drop us a line on our social channels or send us an email describing your favourite things about the game, and we’ll add you to our list of biggest Dream Lotary fans.</p>

<div class="fx socialBottom">
	<a href="#" title="Visit the Dream Lotary Facebook page" class="social" target="_blank" rel="noopener">
		<img src="images/icons/facebook.svg" alt="Facebook"><br>
		Like us on Facebook
	</a>
	<a href="#" title="Visit the Dream Lotary Instagram page" class="social" target="_blank" rel="noopener">
		<img src="images/icons/instagram.svg" alt="Instagram"><br>
		Like us on Instagram
	</a>
	<a href="#" title="Visit the Dream Lotary Twitter page" class="social" target="_blank" rel="noopener">
		<img src="images/icons/twitter.svg" alt="Twitter"><br>
		Follow us on Twitter
	</a>
	<a href="#" title="Email Dream Lotary" class="social" target="_blank" rel="noopener">
		<img src="images/icons/mail.svg" alt="Email"><br>
		Email
	</a>
</div><br>

<p style="font-size:13px; font-style:italic;">Images used on this page are for illustration purposes only.</p>

	
</div>


</div>
<?php
include "include/footer.php";
?>