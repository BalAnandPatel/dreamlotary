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

<h1>Bumper Draw</h1>

<p>Dream Lotary holds Bumper Draws from time to time to give you the chance to win even bigger jackpots than usual. Entry costs exactly the same as a normal draw.</p>
<p>Bumper Draws are announced well in advance so you know when one will take place. You take part in the same way as a normal draw, by selecting six main numbers from 1 to 50 and a Joker Ball between 1 and 5. The cost remains ₹40 per entry. </p>



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


<p>As Bumper Draws are special events, there is only one chance to win the higher jackpot. If no tickets match the full winning line in a Bumper Draw, the jackpot will revert to the standard ₹4 Crore for the following draw.</p>


<h2>Upcoming Bumper Draws</h2>
<p>The following table shows the details of upcoming Bumper Draws scheduled for this year, displaying the date when the draw will be held and the jackpot on offer.</p>
 
 <table class="alt prizeTable">
	<thead>
		<tr>
			<th>Draw Name</th>
			<th>Date of Bumper Draw</th>
			<th>Jackpot Amount</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><a href="/en/play/anniversary-bumper" title="Play the Dream Lotary Anniversary Bumper Draw" target="_blank">Dream Lotary Anniversary Bumper</a></td>
			<td>Friday, June 16, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="https://independence-day.in/" title="Independence Day Lotto for India">Independence Day Bumper</a></td>
			<td>Tuesday, August 15, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="https://ganesha-bumper.com/" target="_blank" title="Ganesha Bumper Lottery">Ganesha Bumper</a></td>
			<td>Tuesday, September 19, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="/en/play/puja-bumper" title="Play the Dream Lotary Puja Bumper Draw" target="_blank">Durga Puja Bumper</a></td>
			<td>Friday, October 20, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="https://diwali-bumper.com/" title="Diwali Bumper for Dream Lotary">Diwali Bumper</a></td>
			<td>Friday, November 10, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="/en/play/new-year-bumper" title="Play the Dream Lotary New Year Bumper Draw" target="_blank">New Year Bumper</a></td>
			<td>Friday, December 29, 2023</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="/en/play/holi-bumper" title="Play the Dream Lotary Holi Bumper Draw" target="_blank">Holi Bumper</a></td>
			<td>Friday, March 22, 2024</td>
			<td>₹40 Crore</td>
		</tr>
		<tr>
			<td><a href="/en/play/vishu-bumper" title="Play the Dream Lotary Vishu Bumper Draw" target="_blank">Vishu Bumper</a></td>
			<td>Friday, April 12, 2024</td>
			<td>₹40 Crore</td>
		</tr>
	</tbody>
</table>

<h2>Bumper Draw History</h2>
<p>Below you can see a list of all previous Bumper draws to have taken place.</p>

<table class="alt prizeTable">
	<thead>
		<tr>
			<th>Draw Name</th>
			<th>Date of Bumper Draw</th>
			<th>Jackpot Amount</th>
			<th>Draw Result</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Dream Lotary Launch Bumper</td>
			<td>Friday, June 14, 2019</td>
			<td>₹11.27 Crore</td>
			<td>7 - 20 - 33 - 36 - 43 - 49 &nbsp; Joker Ball: 4</td>
		</tr>
		<tr>
			<td>Diwali Bumper</td>
			<td>Friday, November 13, 2020</td>
			<td>₹40 Crore</td>
			<td>2 - 16 - 20 - 22 - 26 - 32 &nbsp; Joker Ball: 3</td>
		</tr>
		<tr>
			<td>New Year Bumper</td>
			<td>Friday, January 1, 2021</td>
			<td>₹40 Crore</td>
			<td>1 - 2 - 8 - 22 - 44 - 45 &nbsp; Joker Ball: 3</td>
		</tr>
		<tr>
			<td>Holi Bumper</td>
			<td>Tuesday, March 30, 2021</td>
			<td>₹40 Crore</td>
			<td>4 - 14 - 24 - 36 - 48 - 50 &nbsp; Joker Ball: 4</td>
		</tr>
		<tr>
			<td>Dream Lotary Anniversary Bumper</td>
			<td>Tuesday, June 15, 2021</td>
			<td>₹40 Crore</td>
			<td>10 - 15 - 18 - 27 - 34 - 49 &nbsp; Joker Ball: 5</td>
		</tr>
		<tr>
			<td>Independence Day Bumper</td>
			<td>Friday, August 13, 2021</td>
			<td>₹40 Crore</td>
			<td>1 - 13 - 24 - 27 - 42 - 49 &nbsp; Joker Ball: 1</td>
		</tr>
		<tr>
			<td>Ganesha Bumper</td>
			<td>Friday, September 10, 2021</td>
			<td>₹40 Crore</td>
			<td>9 - 16 - 18 - 34 - 35 - 38 &nbsp; Joker Ball: 1</td>
		</tr>
		<tr>
			<td>Durga Puja Bumper</td>
			<td>Friday, October 10, 2021</td>
			<td>₹40 Crore</td>
			<td>6 - 12 - 15 - 38 - 45 - 50 &nbsp; Joker Ball: 3</td>
		</tr>
		<tr>
			<td>Diwali Bumper</td>
			<td>Friday, November 5, 2021</td>
			<td>₹40 Crore</td>
			<td>3 - 9 - 25 - 37 - 44 - 50 &nbsp; Joker Ball: 5</td>
		</tr>
		<tr>
			<td>New Year Bumper</td>
			<td>Friday, December 31, 2021</td>
			<td>₹40 Crore</td>
			<td>6 - 9 - 21 - 23 - 34 - 39 &nbsp; Joker Ball: 3</td>
		</tr>
		<tr>
			<td>Holi Bumper</td>
			<td>Friday, March 18, 2022</td>
			<td>₹40 Crore</td>
			<td>18 - 25 - 40 - 42 - 46 - 48 &nbsp; Joker Ball: 1</td>
		</tr>
		<tr>
			<td>Vishu Bumper</td>
			<td>Friday, April 14, 2022</td>
			<td>₹40 Crore</td>
			<td>14 - 19 - 31 - 35 - 41 - 47 &nbsp; Joker Ball: 3</td>
		</tr>
		<tr>
			<td>Dream Lotary Anniversary Bumper</td>
			<td>Tuesday, June 14, 2022</td>
			<td>₹40 Crore</td>
			<td>2 - 14 - 23 - 28 - 30 - 40 &nbsp; Joker Ball: 5</td>
		</tr>
		<tr>
			<td>Independence Day Bumper</td>
			<td>Tuesday, August 16, 2022</td>
			<td>₹40 Crore</td>
			<td>3 - 12 - 26 - 36 - 43 - 46 &nbsp; Joker Ball: 4</td>
		</tr>
		<tr>
			<td>Ganesha Bumper</td>
			<td>Friday, September 2, 2022</td>
			<td>₹40 Crore</td>
			<td>6 - 11 - 16 - 41 - 42 - 48 &nbsp; Joker Ball: 2</td>
		</tr>
		<tr>
			<td>Durga Puja Bumper</td>
			<td>Tuesday, October 4, 2022</td>
			<td>₹40 Crore</td>
			<td>4 - 13 - 24 - 32 - 36 - 46 &nbsp; Joker Ball: 1</td>
		</tr>
		<tr>
			<td>Diwali Bumper</td>
			<td>Tuesday, October 25, 2022</td>
			<td>₹40 Crore</td>
			<td>1 - 10 - 19 - 27 - 40 - 43 &nbsp; Joker Ball: 4</td>
		</tr>
		<tr>
			<td>New Year Bumper</td>
			<td>Friday, December 30, 2022</td>
			<td>₹40 Crore</td>
			<td>1 - 4 - 14 - 28 - 34 - 44 &nbsp; Joker Ball: 4</td>
		</tr>
		<tr>
			<td>Holi Bumper</td>
			<td>Tuesday, March 7, 2023</td>
			<td>₹40 Crore</td>
			<td>20 - 26 - 28 - 30 - 32 - 36 &nbsp; Joker Ball: 2</td>
		</tr>
		<tr>
			<td>Vishu Bumper</td>
			<td>Friday, April 14, 2023</td>
			<td>₹40 Crore</td>
			<td>17 - 24 - 30 - 36 - 39 - 41 &nbsp; Joker Ball: 1</td>
		</tr>
	</tbody>
</table>

<h2>Bumper Draw Prizes</h2>
<p>The jackpot in a regular Dream Lotary draw is ₹4 Crore. In a Bumper Draw, the top prize is increased to a much higher amount, such as ₹40 Crore. If you are the only player to match all six main numbers and the Joker Ball, you receive all of the prize money. The jackpot is divided equally between winning tickets if there are multiple winners.</p>
<p>The other prizes remain the same as in standard draws. For instance, you still win ₹400 for matching three main numbers, and a Free Bet Bonus for matching the Joker Ball. Go to the <a href="/prizes" title="Dream Lotary Prizes">Prizes</a> page to see all the different ways to win.</p>


	
</div>

</div>
<?php
include "include/footer.php";
?>