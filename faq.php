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

<h1>FAQ</h1>

<p>The most frequently asked questions about Dream Lotary are answered right here. If you need to know anything about the game, including how to buy tickets or what prizes you can win, you'll find all of the information you need on this page.</p>

<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How do you play Dream Lotary?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>To play Dream Lotary, you must select six main numbers from 1 to 50, followed by one Joker Ball number between 1 and 5. You can either choose your own numbers or opt for a Quick Pick to receive a random set. Go to the <a href="/how-to-play" title="How to Play Dream Lotary">How to Play</a> page for step-by-step instructions.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How old do you have to be to play?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>You must be at least 18 years old to take part in Dream Lotary, or of legal gambling age in your jurisdiction if that legal age is higher than 18.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Can you play from anywhere?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Dream Lotary is available for players in the whole of India and in countries around the world. However, there are some countries from which you cannot participate, including Australia, France, and the United States of America, owing to local rules and restrictions. You can see a full list on the <a href="/restricted-countries" title="Restricted Countries">Restricted Countries</a> page.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">When do draws take place?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Draws take place on Tuesday and Friday evenings, at 6:00 PM.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What is the cut-off time for playing?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Ticket sales for a given draw close at 5:50 PM on the day of that draw.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Can you play in advance?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Yes, you can subscribe in advance for up to three months of draws.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How much does it cost to play?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Dream Lotary costs ₹40 per panel.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Which payment methods are accepted?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The accepted payment methods are as follows:</p> 
			<p>Abaqoos, Atsro, Pboleto, DineroMail, EPS, Epay.bg, Euteller, Halcash, Lobanet, Mastercard, Multibanco, Moneta, Neosurf, NETeller, Poli, Polinz, Przelewy, Skrill, Sofort, Sporopay, Teleingreso, TicketSurf, Todito Cash, Trustpay, Usemybank, Visa, WebMoney, Yandexmoney, eKonto</p>
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Can you subscribe to Dream Lotary?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Yes. You can subscribe to Dream Lotary to make sure you never miss a draw. Just select the &#39;Subscribe&#39; option and then choose the length of your subscription; you can choose to pay monthly or every three months. You will pay for all the draws covered in your subscription period at the time of your purchase. Subscriptions will renew automatically until you choose to end them.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Is this an online lottery only?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Yes, you can play via the Dream Lotary website and you also will be able to buy tickets through the <a href="/app" title="Dream Lotary app">app</a>, which is coming soon. Tickets cannot be bought in stores.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What if you forget your password?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>If you have forgotten your password, you can request that a password reset email is sent to the address registered on your account.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How do the Dream Lotary draws work?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The results are produced by an insured Random Number Generator (iRNG). This is a computerised system which guarantees that the winning numbers are selected at random. The iRNG is regularly tested and a time-stamping mechanism is also in place to make sure the results are protected.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How do you win prizes?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>To win prizes, the numbers you select must match the winning numbers drawn. You must match all of the winning numbers (six numbers + the Joker Ball) to win the jackpot of ₹4 Crore. There are also smaller cash prizes for matching fewer numbers, for example, you receive ₹40 for matching two main numbers. You also receive a Free Bet Bonus if you match the Joker Ball.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What is the Joker Ball?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The Joker Ball is the seventh number in each draw. It is selected from a separate pool consisting of the numbers 1 to 5. Match all six numbers and the Joker Ball and you win the top prize.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">The same number has been drawn twice. How can that happen?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>As the Joker Ball is drawn from a separate set of numbers, the same number can appear twice in the same draw - once among the main six balls and once as the Joker Ball. When entering the game, you can also pick the same number to use as one of your six main numbers and your Joker Ball.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What are the odds of winning?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The odds of winning the jackpot are 1 in 79,453,500. The overall odds of winning a prize are 1 in 3 and the overall odds of winning the Free Bet Bonus are 1 in 5.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Do you have a better chance of winning with a Quick Pick?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The chances of winning are exactly the same for every line of numbers, whether you choose your own or go with a Quick Pick to generate a random set.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Does the jackpot roll over?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>No. The jackpot is worth ₹4 Crore in every draw, unless it has been increased for a Bumper Draw.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How do you enter the Dream Lotary Raffle?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The Dream Lotary Raffle runs alongside the main draw, meaning once you have purchased your Dream Lotary entries, you are automatically entered into the raffle.</p> 
		</div>
	</div>
</div>
<!-- <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What is the Dream Lotary Raffle prize?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The Dream Lotary Raffle prize is ₹40,000. This is split between five separate winners, each receiving a payment of ₹8,000. Got to the <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a> page for more information. </p> 
		</div>
	</div>
</div> -->
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">What are Bumper Draws?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Bumper Draws are special events that are held from time to time in which the usual jackpot is increased to an even higher amount. Visit the <a href="/bumper-draw" title="Dream Lotary Bumper Draws">Bumper Draws</a> page for more information.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Is the prize shared if there are multiple winners?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>If the jackpot is won by more than one player, the money is split between all the winners. The other prizes are fixed, so you are guaranteed to win the stated prize.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How do you check your numbers?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Use the Dream Lotary <a href="/check-numbers" title="Ticket Checker">Ticket Checker</a> to find out if you have won a prize. You will be notified via email if you have won a prize, and you may also be contacted by telephone if you win the jackpot.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How are Dream Lotary prizes paid?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>Winnings will be paid automatically into your account. You can then decide whether to withdraw the money into your bank account or use the funds to enter future draws. Visit the page on <a href="/how-to-claim-prizes" title="How to Claim">Claiming Prizes</a> for more information.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">How does the Free Bet Bonus work?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>The Free Bet Bonus awards one free entry to a future Dream Lotary draw and can be won by matching just the Joker Ball. Just like the cash prizes, the Free Bet Bonus will be credited to your account. You just need to log in to your account and activate your bonus to bet on a future draw for free.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">Can you stay anonymous if you win?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>You will be asked to take part in marketing activities if you win the jackpot so that the news can be promoted on the Dream Lotary website. However, details of your identity will only be disclosed if you give your consent.</p> 
		</div>
	</div>
</div>
<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="box-expand">
	<div class="js-tab" itemprop="name">You&#39;ve been told you won a lottery prize. Is it real?</div>
	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
		<div class="expandable" itemprop="text">
			<p>You will be informed by email if you win a prize.  You may also be contacted by telephone if you win the jackpot and you have provided your number. If you have not played Dream Lotary, it is not possible to win a prize and it means you are being contacted by a scammer. Go to the <a href="/scams" title="Lottery Scams">Lottery Scams</a> page for more details.</p> 
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
		obj.nextElementSibling.firstElementChild.style.display = "none";
	} else {
		obj.className = "js-tab is-active";
		obj.nextElementSibling.firstElementChild.style.display = "block";
	}	
};
</script>

</div>
<?php
include "include/footer.php";
?>