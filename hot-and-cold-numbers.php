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
	
	<h1>Hot &amp; Cold Numbers</h1>
	
	<p>Find out which numbers have appeared the most frequently and which have been selected the least, with this hot and cold number guide for Lotto India draws. These lottery statistics could help you choose your numbers for the next draw, and fulfil your ambition of becoming a Lotto India crorepati.</p>

	<div class="readMore">
		<p>You will find a range of other in-depth lottery stats on this page, including the most overdue numbers, which Joker Ball has appeared the most, and frequency graphs for the main Lotto India numbers and for the Joker Ball - making it easier for you to pick out patterns for future draws.</p>
		<p>Once you’ve used these statistics to find your ideal sets of numbers, <a href="play.php" title="Play Lotto India">play</a> them in upcoming Lotto India draws. You can also find information below on how many Lotto India winners there have been so far, and how much prize money has been awarded.</p>
	</div>
	<a href="javascript:void(0)" title="Tap to Read More" class="readMore-more" onclick="readMore(this)">Read More</a>
	
</div>

<div class="statBox genBox fx -ar mBottom">
	<div class="box" style="padding: 20px;">
		<img src="images/icons/history-grey.svg" alt="First Draw">
		<div class="inner">
			<div>First Draw</div>
			<div class="stat">Jun 14, 2019</div>
		</div>
	</div>
	<div class="box" style="padding: 20px;">
		<img src="images/icons/present-grey.svg" alt="Latest Draw">
		<div class="inner">
			<div>Latest Draw</div>
			<div class="stat">May 5, 2023</div>
		</div>
	</div>
	<div class="box" style="padding: 20px;">
		<img src="images/icons/draws-grey.svg" alt="Total Draws">
		<div class="inner">
			<div>Total Draws</div>
			<div class="stat">407</div>
		</div>
	</div>
</div>

<div class="genBox mBottom quickLinks">
	<span class="h3">Quick Links:</span>&nbsp;&nbsp;&nbsp;
	<a href="#hotNumbers" class="button outline">Hot Numbers</a>
	<a href="#coldNumbers" class="button outline">Cold Numbers</a>
	<a href="#overdueNumbers" class="button outline">Overdue Numbers</a>
	<a href="#frequencies" class="button outline">Number Frequencies</a>
	<a href="#pairs" class="button outline">Pairs &amp; Triplets</a>
</div>




<h2 id="hotNumbers">Lotto India Hot Numbers</h2>
<div class="fx mBottom">
	
		<div class="centred freq-fx">
			<div class="result medium ball">12</div>
			<strong>Drawn 65 times</strong>
			Last Drawn: 
			<strong>Apr 4, 2023</strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">18</div>
			<strong>Drawn 63 times</strong>
			Last Drawn: 
			<strong>Apr 28, 2023</strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">34</div>
			<strong>Drawn 61 times</strong>
			Last Drawn: 
			<strong>May 5, 2023</strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">44</div>
			<strong>Drawn 61 times</strong>
			Last Drawn: 
			<strong>May 2, 2023</strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">40</div>
			<strong>Drawn 59 times</strong>
			Last Drawn: 
			<strong>May 5, 2023</strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">4</div>
			<strong>Drawn 58 times</strong>
			Last Drawn: 
			<strong>Mar 17, 2023</strong>
		</div>
	
	<div class="centred freq-fx">
		<div class="result medium ball joker">2</div>
		<strong>Drawn 90 times</strong>
		Last Drawn: 
		<strong>Apr 25, 2023</strong>
	</div>
</div>



<h2 id="coldNumbers">Cold Numbers</h2>
<div class="fx mBottom">
	
		<div class="centred freq-fx">
			<div class="result medium ball">23</div>
			<strong>Drawn 32 times</strong>
			Last Drawn: <strong>Feb 3, 2023<br><span>(92 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">46</div>
			<strong>Drawn 33 times</strong>
			Last Drawn: <strong>Apr 7, 2023<br><span>(29 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">20</div>
			<strong>Drawn 39 times</strong>
			Last Drawn: <strong>Apr 7, 2023<br><span>(29 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">22</div>
			<strong>Drawn 41 times</strong>
			Last Drawn: <strong>Mar 31, 2023<br><span>(36 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">36</div>
			<strong>Drawn 41 times</strong>
			Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">5</div>
			<strong>Drawn 42 times</strong>
			Last Drawn: <strong>Jan 24, 2023<br><span>(102 days ago)</span></strong>
		</div>
	
	<div class="centred freq-fx">
		<div class="result medium ball joker">5</div>
		<strong>Drawn 72 times</strong>
		Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
	</div>
</div>



<h2 id="overdueNumbers">Most Overdue Numbers</h2>
<div class="fx mBottom">
	
		<div class="centred freq-fx">
			<div class="result medium ball">21</div>
			<strong>Drawn 52 times</strong>
			Last Drawn: <strong>Jan 20, 2023<br><span>(106 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">5</div>
			<strong>Drawn 42 times</strong>
			Last Drawn: <strong>Jan 24, 2023<br><span>(102 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">23</div>
			<strong>Drawn 32 times</strong>
			Last Drawn: <strong>Feb 3, 2023<br><span>(92 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">47</div>
			<strong>Drawn 51 times</strong>
			Last Drawn: <strong>Feb 7, 2023<br><span>(88 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">31</div>
			<strong>Drawn 47 times</strong>
			Last Drawn: <strong>Feb 14, 2023<br><span>(81 days ago)</span></strong>
		</div>
	
		<div class="centred freq-fx">
			<div class="result medium ball">45</div>
			<strong>Drawn 42 times</strong>
			Last Drawn: <strong>Feb 24, 2023<br><span>(71 days ago)</span></strong>
		</div>
	
	<div class="centred freq-fx">
		<div class="result medium ball joker">4</div>
		<strong>Drawn 75 times</strong>
		Last Drawn: <strong>Apr 11, 2023<br><span>(25 days ago)</span></strong>
	</div>
</div>



<div class="fx -bt -md">
	<div class="h2" id="frequencies">Main Number Frequencies</div>
	<div style="padding: 10px;">
		<form id="mainSwitch">
			<input type="radio" value="table" name="mainSwitch" id="mainSwitchTable" onchange="ms()" checked>
			<label for="mainSwitchTable">View as table</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="chart" name="mainSwitch" id="mainSwitchChart" onchange="ms()">
			<label for="mainSwitchChart">View as chart</label>&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
	</div>
</div>
<div class="mBottom">
	<div class="fx" id="mainTable">
		
			<div class="freq-fx">
				<div class="result ball">1</div>
				<strong>Drawn 51 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">2</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Feb 28, 2023<br><span>(67 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">3</div>
				<strong>Drawn 43 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">4</div>
				<strong>Drawn 58 times</strong>
				Last Drawn: <strong>Mar 17, 2023<br><span>(50 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">5</div>
				<strong>Drawn 42 times</strong>
				Last Drawn: <strong>Jan 24, 2023<br><span>(102 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">6</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Apr 11, 2023<br><span>(25 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">7</div>
				<strong>Drawn 49 times</strong>
				Last Drawn: <strong>Mar 24, 2023<br><span>(43 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">8</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Apr 21, 2023<br><span>(15 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">9</div>
				<strong>Drawn 48 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">10</div>
				<strong>Drawn 53 times</strong>
				Last Drawn: <strong>Apr 25, 2023<br><span>(11 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">11</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Mar 31, 2023<br><span>(36 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">12</div>
				<strong>Drawn 65 times</strong>
				Last Drawn: <strong>Apr 4, 2023<br><span>(32 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">13</div>
				<strong>Drawn 49 times</strong>
				Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">14</div>
				<strong>Drawn 50 times</strong>
				Last Drawn: <strong>Apr 18, 2023<br><span>(18 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">15</div>
				<strong>Drawn 45 times</strong>
				Last Drawn: <strong>Apr 25, 2023<br><span>(11 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">16</div>
				<strong>Drawn 42 times</strong>
				Last Drawn: <strong>Apr 7, 2023<br><span>(29 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">17</div>
				<strong>Drawn 57 times</strong>
				Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">18</div>
				<strong>Drawn 63 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">19</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">20</div>
				<strong>Drawn 39 times</strong>
				Last Drawn: <strong>Apr 7, 2023<br><span>(29 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">21</div>
				<strong>Drawn 52 times</strong>
				Last Drawn: <strong>Jan 20, 2023<br><span>(106 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">22</div>
				<strong>Drawn 41 times</strong>
				Last Drawn: <strong>Mar 31, 2023<br><span>(36 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">23</div>
				<strong>Drawn 32 times</strong>
				Last Drawn: <strong>Feb 3, 2023<br><span>(92 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">24</div>
				<strong>Drawn 49 times</strong>
				Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">25</div>
				<strong>Drawn 50 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">26</div>
				<strong>Drawn 52 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">27</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Apr 21, 2023<br><span>(15 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">28</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">29</div>
				<strong>Drawn 51 times</strong>
				Last Drawn: <strong>Mar 21, 2023<br><span>(46 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">30</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">31</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Feb 14, 2023<br><span>(81 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">32</div>
				<strong>Drawn 53 times</strong>
				Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">33</div>
				<strong>Drawn 51 times</strong>
				Last Drawn: <strong>Mar 14, 2023<br><span>(53 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">34</div>
				<strong>Drawn 61 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">35</div>
				<strong>Drawn 56 times</strong>
				Last Drawn: <strong>Mar 3, 2023<br><span>(64 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">36</div>
				<strong>Drawn 41 times</strong>
				Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">37</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Mar 21, 2023<br><span>(46 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">38</div>
				<strong>Drawn 44 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">39</div>
				<strong>Drawn 47 times</strong>
				Last Drawn: <strong>Apr 14, 2023<br><span>(22 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">40</div>
				<strong>Drawn 59 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">41</div>
				<strong>Drawn 55 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">42</div>
				<strong>Drawn 55 times</strong>
				Last Drawn: <strong>Mar 31, 2023<br><span>(36 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">43</div>
				<strong>Drawn 43 times</strong>
				Last Drawn: <strong>Apr 25, 2023<br><span>(11 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">44</div>
				<strong>Drawn 61 times</strong>
				Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">45</div>
				<strong>Drawn 42 times</strong>
				Last Drawn: <strong>Feb 24, 2023<br><span>(71 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">46</div>
				<strong>Drawn 33 times</strong>
				Last Drawn: <strong>Apr 7, 2023<br><span>(29 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">47</div>
				<strong>Drawn 51 times</strong>
				Last Drawn: <strong>Feb 7, 2023<br><span>(88 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">48</div>
				<strong>Drawn 56 times</strong>
				Last Drawn: <strong>Apr 18, 2023<br><span>(18 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">49</div>
				<strong>Drawn 46 times</strong>
				Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball">50</div>
				<strong>Drawn 52 times</strong>
				Last Drawn: <strong>Apr 11, 2023<br><span>(25 days ago)</span></strong>
			</div>
		
	</div>
	<div id="mainChart" class="googleChart"></div>
</div>

<div class="fx -bt -md">
	<div class="h2">Joker Frequencies</div>
	<div style="padding: 10px;">
		<form id="jokerSwitch">
			<input type="radio" value="table" name="jokerSwitch" id="jokerSwitchTable" onchange="js()" checked>
			<label for="jokerSwitchTable">View as table</label>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" value="chart" name="jokerSwitch" id="jokerSwitchChart" onchange="js()">
			<label for="jokerSwitchChart">View as chart</label>&nbsp;&nbsp;&nbsp;&nbsp;
		</form>
	</div>
</div>
<div class="mBottom">
	<div class="fx" id="jokerTable">	
		
			<div class="freq-fx">
				<div class="result ball joker">1</div>
				<strong>Drawn 84 times</strong>
				Last Drawn: <strong>Apr 28, 2023<br><span>(8 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball joker">2</div>
				<strong>Drawn 90 times</strong>
				Last Drawn: <strong>Apr 25, 2023<br><span>(11 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball joker">3</div>
				<strong>Drawn 86 times</strong>
				Last Drawn: <strong>May 5, 2023<br><span>(1 day ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball joker">4</div>
				<strong>Drawn 75 times</strong>
				Last Drawn: <strong>Apr 11, 2023<br><span>(25 days ago)</span></strong>
			</div>
		
			<div class="freq-fx">
				<div class="result ball joker">5</div>
				<strong>Drawn 72 times</strong>
				Last Drawn: <strong>May 2, 2023<br><span>(4 days ago)</span></strong>
			</div>
		
	</div>
	<div id="jokerChart" class="googleChart"></div>
</div>

<div class="mBottom" id="pairs">

	<div class="h2">Most Common Pairs and Consecutive Pairs</div>
	<div class="h3">Most Common Pairs</div>
	<div class="fx">
		
			<div class="freq-fx">
				<div class="ball pair">12</div>
				<div class="ball">21</div>
				<strong>Drawn together 12 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">14</div>
				<div class="ball">47</div>
				<strong>Drawn together 12 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">1</div>
				<div class="ball">4</div>
				<strong>Drawn together 11 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">2</div>
				<div class="ball">15</div>
				<strong>Drawn together 11 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">4</div>
				<div class="ball">24</div>
				<strong>Drawn together 11 times</strong>
			</div>
		
	</div>

	
		<div class="h3 bonus-title">Most Consecutive Pairs</div>
		<div class="fx">
			
				<div class="freq-fx">
					<div class="ball pair">34</div>
					<div class="ball">35</div>
					<strong>Drawn together 9 times</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">44</div>
					<div class="ball">45</div>
					<strong>Drawn together 9 times</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">17</div>
					<div class="ball">18</div>
					<strong>Drawn together 8 times</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">18</div>
					<div class="ball">19</div>
					<strong>Drawn together 8 times</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">32</div>
					<div class="ball">33</div>
					<strong>Drawn together 8 times</strong>
				</div>
			
		</div>
	
	
</div>

<div class="mBottom">

	<div class="h2">Most Common Triplets and Consecutive Triplets</div>
	<div class="h3">Most Common Triplets</div>
	<div class="fx">
		
			<div class="freq-fx">
				<div class="ball pair">1</div>
				<div class="ball pair">35</div>
				<div class="ball">50</div>
				<strong>Drawn together 4 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">2</div>
				<div class="ball pair">4</div>
				<div class="ball">15</div>
				<strong>Drawn together 4 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">3</div>
				<div class="ball pair">9</div>
				<div class="ball">50</div>
				<strong>Drawn together 4 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">3</div>
				<div class="ball pair">13</div>
				<div class="ball">50</div>
				<strong>Drawn together 4 times</strong>
			</div>
		
			<div class="freq-fx">
				<div class="ball pair">3</div>
				<div class="ball pair">48</div>
				<div class="ball">50</div>
				<strong>Drawn together 4 times</strong>
			</div>
		
	</div>

	
		<div class="h3 bonus-title">Most Consecutive Triplets</div>
		<div class="fx">
			
				<div class="freq-fx">
					<div class="ball pair">31</div>
					<div class="ball pair">32</div>
					<div class="ball">33</div>
					<strong>Drawn together twice</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">32</div>
					<div class="ball pair">33</div>
					<div class="ball">34</div>
					<strong>Drawn together twice</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">5</div>
					<div class="ball pair">6</div>
					<div class="ball">7</div>
					<strong>Drawn together once</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">6</div>
					<div class="ball pair">7</div>
					<div class="ball">8</div>
					<strong>Drawn together once</strong>
				</div>
			
				<div class="freq-fx">
					<div class="ball pair">12</div>
					<div class="ball pair">13</div>
					<div class="ball">14</div>
					<strong>Drawn together once</strong>
				</div>
			
		</div>
	
	
</div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	
	google.load('visualization', '1', {packages: ['corechart']});
	google.setOnLoadCallback(displayGraphs);
	addResizeEvent(function(){displayGraphs()});
	
	function displayGraphs() {
		mainChart();
		jokerChart();
	};
	
	function mainChart() {
		var data = google.visualization.arrayToDataTable([
			['Ball', 'Frequency', { role: 'style' },{role:'tooltip','p':{'html':true}}],
			
				['1', 51, "#0a8901",'<div class="centred padded10"><div class="result ball small">1</div><br>Drawn 51 times</span></div>'],
				['2', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">2</div><br>Drawn 47 times</span></div>'],
				['3', 43, "#0a8901",'<div class="centred padded10"><div class="result ball small">3</div><br>Drawn 43 times</span></div>'],
				['4', 58, "#0a8901",'<div class="centred padded10"><div class="result ball small">4</div><br>Drawn 58 times</span></div>'],
				['5', 42, "#0a8901",'<div class="centred padded10"><div class="result ball small">5</div><br>Drawn 42 times</span></div>'],
				['6', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">6</div><br>Drawn 44 times</span></div>'],
				['7', 49, "#0a8901",'<div class="centred padded10"><div class="result ball small">7</div><br>Drawn 49 times</span></div>'],
				['8', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">8</div><br>Drawn 47 times</span></div>'],
				['9', 48, "#0a8901",'<div class="centred padded10"><div class="result ball small">9</div><br>Drawn 48 times</span></div>'],
				['10', 53, "#0a8901",'<div class="centred padded10"><div class="result ball small">10</div><br>Drawn 53 times</span></div>'],
				['11', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">11</div><br>Drawn 47 times</span></div>'],
				['12', 65, "#0fbb03",'<div class="centred padded10"><div class="result ball small">12</div><br>Drawn 65 times</span></div>'],
				['13', 49, "#0a8901",'<div class="centred padded10"><div class="result ball small">13</div><br>Drawn 49 times</span></div>'],
				['14', 50, "#0a8901",'<div class="centred padded10"><div class="result ball small">14</div><br>Drawn 50 times</span></div>'],
				['15', 45, "#0a8901",'<div class="centred padded10"><div class="result ball small">15</div><br>Drawn 45 times</span></div>'],
				['16', 42, "#0a8901",'<div class="centred padded10"><div class="result ball small">16</div><br>Drawn 42 times</span></div>'],
				['17', 57, "#0a8901",'<div class="centred padded10"><div class="result ball small">17</div><br>Drawn 57 times</span></div>'],
				['18', 63, "#0a8901",'<div class="centred padded10"><div class="result ball small">18</div><br>Drawn 63 times</span></div>'],
				['19', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">19</div><br>Drawn 47 times</span></div>'],
				['20', 39, "#0a8901",'<div class="centred padded10"><div class="result ball small">20</div><br>Drawn 39 times</span></div>'],
				['21', 52, "#0a8901",'<div class="centred padded10"><div class="result ball small">21</div><br>Drawn 52 times</span></div>'],
				['22', 41, "#0a8901",'<div class="centred padded10"><div class="result ball small">22</div><br>Drawn 41 times</span></div>'],
				['23', 32, "#065f00",'<div class="centred padded10"><div class="result ball small">23</div><br>Drawn 32 times</span></div>'],
				['24', 49, "#0a8901",'<div class="centred padded10"><div class="result ball small">24</div><br>Drawn 49 times</span></div>'],
				['25', 50, "#0a8901",'<div class="centred padded10"><div class="result ball small">25</div><br>Drawn 50 times</span></div>'],
				['26', 52, "#0a8901",'<div class="centred padded10"><div class="result ball small">26</div><br>Drawn 52 times</span></div>'],
				['27', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">27</div><br>Drawn 44 times</span></div>'],
				['28', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">28</div><br>Drawn 44 times</span></div>'],
				['29', 51, "#0a8901",'<div class="centred padded10"><div class="result ball small">29</div><br>Drawn 51 times</span></div>'],
				['30', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">30</div><br>Drawn 44 times</span></div>'],
				['31', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">31</div><br>Drawn 47 times</span></div>'],
				['32', 53, "#0a8901",'<div class="centred padded10"><div class="result ball small">32</div><br>Drawn 53 times</span></div>'],
				['33', 51, "#0a8901",'<div class="centred padded10"><div class="result ball small">33</div><br>Drawn 51 times</span></div>'],
				['34', 61, "#0a8901",'<div class="centred padded10"><div class="result ball small">34</div><br>Drawn 61 times</span></div>'],
				['35', 56, "#0a8901",'<div class="centred padded10"><div class="result ball small">35</div><br>Drawn 56 times</span></div>'],
				['36', 41, "#0a8901",'<div class="centred padded10"><div class="result ball small">36</div><br>Drawn 41 times</span></div>'],
				['37', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">37</div><br>Drawn 44 times</span></div>'],
				['38', 44, "#0a8901",'<div class="centred padded10"><div class="result ball small">38</div><br>Drawn 44 times</span></div>'],
				['39', 47, "#0a8901",'<div class="centred padded10"><div class="result ball small">39</div><br>Drawn 47 times</span></div>'],
				['40', 59, "#0a8901",'<div class="centred padded10"><div class="result ball small">40</div><br>Drawn 59 times</span></div>'],
				['41', 55, "#0a8901",'<div class="centred padded10"><div class="result ball small">41</div><br>Drawn 55 times</span></div>'],
				['42', 55, "#0a8901",'<div class="centred padded10"><div class="result ball small">42</div><br>Drawn 55 times</span></div>'],
				['43', 43, "#0a8901",'<div class="centred padded10"><div class="result ball small">43</div><br>Drawn 43 times</span></div>'],
				['44', 61, "#0a8901",'<div class="centred padded10"><div class="result ball small">44</div><br>Drawn 61 times</span></div>'],
				['45', 42, "#0a8901",'<div class="centred padded10"><div class="result ball small">45</div><br>Drawn 42 times</span></div>'],
				['46', 33, "#0a8901",'<div class="centred padded10"><div class="result ball small">46</div><br>Drawn 33 times</span></div>'],
				['47', 51, "#0a8901",'<div class="centred padded10"><div class="result ball small">47</div><br>Drawn 51 times</span></div>'],
				['48', 56, "#0a8901",'<div class="centred padded10"><div class="result ball small">48</div><br>Drawn 56 times</span></div>'],
				['49', 46, "#0a8901",'<div class="centred padded10"><div class="result ball small">49</div><br>Drawn 46 times</span></div>'],
				['50', 52, "#0a8901",'<div class="centred padded10"><div class="result ball small">50</div><br>Drawn 52 times</span></div>']
		]);
		var options = {
			backgroundColor: '#FFF', 
			tooltip:{textStyle:{fontSize: 11},isHtml:true},
			legend: 'none',
			vAxis: {
				title: 'Frequency',
				titleTextStyle: {color: '#171717', fontSize: 11, italic: false},
				textStyle:{fontSize: 12},
				gridlines: {color: '#CCC', count: 4}
			},
			hAxis: {
				title: 'Ball Number',
				titleTextStyle: {color: '#171717', fontSize: 11, italic: false},
				slantedTextAngle: '90', 
				textStyle:{fontSize: 10},
				gridlines:{color: '#CCC'} 
			}
		}
		var graph = new google.visualization.ColumnChart(document.getElementById('mainChart'))
		graph.draw(data, options);
	};
	
	function jokerChart() {
		var data = google.visualization.arrayToDataTable([
			['Joker', 'Frequency', { role: 'style' },{role:'tooltip','p':{'html':true}}],
			
				['1', 84, "#0a8901",'<div class="centred padded10"><div class="result ball small">1</div><br>Drawn:<br><strong><span style="color: #F00;">84</span> times</strong></div>'],
				['2', 90, "#0fbb03",'<div class="centred padded10"><div class="result ball small">2</div><br>Drawn:<br><strong><span style="color: #F00;">90</span> times</strong></div>'],
				['3', 86, "#0a8901",'<div class="centred padded10"><div class="result ball small">3</div><br>Drawn:<br><strong><span style="color: #F00;">86</span> times</strong></div>'],
				['4', 75, "#0a8901",'<div class="centred padded10"><div class="result ball small">4</div><br>Drawn:<br><strong><span style="color: #F00;">75</span> times</strong></div>'],
				['5', 72, "#065f00",'<div class="centred padded10"><div class="result ball small">5</div><br>Drawn:<br><strong><span style="color: #F00;">72</span> times</strong></div>']
		]);
		var options = {
			backgroundColor: '#FFF', 
			tooltip:{textStyle:{fontSize: 11},isHtml:true},
			legend: 'none',
			vAxis: {
				title: 'Frequency',
				titleTextStyle: {color: '#171717', fontSize: 11, italic: false},
				textStyle:{fontSize: 12},
				gridlines: {color: '#CCC', count: 5}
			},
			hAxis: {
				title: 'Joker Ball',
				titleTextStyle: {color: '#171717', fontSize: 11, italic: false},
				slantedTextAngle: '90', 
				textStyle:{fontSize: 10},
				gridlines:{color: '#CCC'} 
			}
		}
		var graph = new google.visualization.ColumnChart(document.getElementById('jokerChart'))
		graph.draw(data, options);
	};
	
	function ms() {
		var s = document.getElementById("mainSwitch").elements["mainSwitch"];
		if (s.value == "chart") {
			document.getElementById("mainTable").style.display = "none";
			document.getElementById("mainChart").style.display = "block";
			displayGraphs();
		} else {
			document.getElementById("mainTable").style.display = "flex";
			document.getElementById("mainChart").style.display = "none";
		}
	};
	
	function js() {
		var s = document.getElementById("jokerSwitch").elements["jokerSwitch"];
		if (s.value == "chart") {
			document.getElementById("jokerTable").style.display = "none";
			document.getElementById("jokerChart").style.display = "block";
			displayGraphs();
		} else {
			document.getElementById("jokerTable").style.display = "flex";
			document.getElementById("jokerChart").style.display = "none";
		}
	};
</script>

</div>



<?php
include "include/footer.php";
?>