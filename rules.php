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

<h1>Rules</h1>

<p>Brush up on the Dream Lotary rules before you start playing to make sure you know exactly how the game works. If you’re looking for more information about playing Dream Lotary or choosing your numbers, head over to the <a href="how-to-play.php" title="How to Play Dream Lotary">How to Play</a> page.</p>

<div class="h3">Registration and Account</div>
<ul class="list">
	<li>Users located in any of the countries on the <a href="restricted-countries.php" title="Restricted Countries List">Restricted Countries</a> list are ineligible to purchase entries to Dream Lotary.</li>
	<li>Email addresses used to register with Lotto-India.com need to be verified by the owner of the email account after registering. Certain features or functions of Lotto-India.com may not be available to a user until they have completed this verification process.</li>
</ul><br>

<div class="h3">Purchasing Tickets</div>
<ul class="list">
	<li>One entry (panel) for Dream Lotary costs ₹40 and will only be considered an entry when paid for in full, unless the player has activated a Free Bet Bonus won in a previous Dream Lotary draw.</li>
	<li>Lotto-India.com and its agents and partners can limit or refuse entries to anyone at their discretion and without giving notice or reason.</li>
	<li>Players must be at least 18 years old to purchase an entry.</li>
	<li>It is the player’s responsibility to ensure that they are legally eligible to enter Dream Lotary. Any prizes won may be forfeited if the winner is not legally eligible to participate.</li>
	<li>Sales of entries close at 5:50 PM  on the day of each draw. Panels that have not been paid for in full or Free Bet Bonuses that have not been activated by this time will not be considered as entries for that day’s draw.</li>
	<li>It is the player’s responsibility to modify or cancel Dream Lotary subscriptions.</li>
	<li>Purchases cannot be cancelled or refunded once they have been completed.</li>
</ul><br>

<div class="h3">The Draw</div>
<ul class="list">
	<li>In every draw, an Insured Random Number Generator (iRNG) selects six numbers between 1 and 50 (the ‘main numbers’) and one supplementary number between 1 and 5 (the ‘Joker Ball’). These seven randomly selected numbers constitute the winning numbers (the ‘winning line’) for that draw.</li>
	<li>Players may not substitute the Joker Ball with any of the six main numbers, and vice versa. To win the Free Bet Bonus, the Joker Ball stated on a player’s entry must match the Joker Ball in the winning line.</li>
	<li>The time at which the Dream Lotary draw takes place may change at any time at the discretion of Lotto-India.com and its partners.</li>
</ul><br>

<!-- <div class="h3">Dream Lotary Raffle</div>
<ul class="list">
	<li>The <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a> is held once a month. Five winners are selected at random using the unique ID associated to every raffle entry. Each of the five monthly raffle winners receive an equal share of the ₹40,000 fixed prize (₹8,000 per winner).</li>
	<li>The raffle runs alongside the main draw and is held per line of participation. One Dream Lotary entry therefore equates to one line in the raffle. Players who purchase multiple Dream Lotary panels receive an equal number of raffle entries.</li>
	<li>The number of Dream Lotary Raffle entries a single player has is shown in their confirmation email sent after purchase completion. Raffle ID’s can be found in the My Account section of a player’s online account.</li>
</ul><br> -->

<div class="h3">Prizes and Payments</div>
<ul class="list">
	<li>Players can only win the amounts detailed on the <a href="/prizes" title="Dream Lotary Prizes">Prizes</a> page of Lotto-India.com.</li>
	<li>The Free Bet Bonus cannot be substituted for a cash prize of any value.</li>
	<li>Users must activate their Free Bet Bonus by logging in to their online account.</li>
	<li>Players who match between two and five main numbers and the Joker Ball number on the same panel will be awarded the cash prize <strong>and</strong> the Free Bet Bonus.</li>
	<li>The jackpot prize of ₹4 Crore will be split equally between all players in the same draw who match six numbers plus the Joker Ball number on one of their panels.</li>
	<li>The results shown by the Dream Lotary <a href="check-numbers.php" title="Ticket Checker">Ticket Checker</a> do not act as proof of winning; players must have a valid entry matching sufficient numbers to be eligible for a prize payout.</li>
	<li>Prize money will be paid into a winner’s online account to be withdrawn or used for future ticket purchases at the player’s discretion. Prizes will not be paid via any other methods.</li>
</ul>

</div>

</div>
<?php
include "include/footer.php";
?>