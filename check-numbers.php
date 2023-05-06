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
		

		<div class="genBox mBottom fx -bt">
	
	<h1>Check Your Numbers</h1>
	
	<p>Check your Dream Lotary numbers to find out if you have won a prize. There are a couple of ways you can check your six numbers and Joker Ball - either select them from a grid or type them in. Switch between the two methods by selecting the 'Input Mode' button on the right-hand side of the checker.</p>
	
	<p class="readMore">The Checker also allows you to select the time period you wish to view, and whether you want to look at the results from Tuesday draws, Fridays draws or both. Select the ‘Check Results’ button when you are ready. You will be shown which winning numbers you have matched in draws from your chosen time period, as well as the value of any prizes you have won. Select 'Add Line' to check more than one set of numbers at a time, or ‘Reset Checker’ to start again.</p>
	<a href="javascript:void(0)" title="Tap to Read More" class="readMore-more" onclick="readMore(this)">Read More</a>

</div>



<div class="centred">
	<div class="lotto-india nextBox" style="position: relative;">

		

			<div class="col">
				<div class="title">
					Next Jackpot
				</div>
				
					<div class="bigJackpotWhite">&#8377;<span class="mainJackpot">4 Crore</span>*</div>
					<div class="date">Tuesday, May 9, 2023</div>
									
			</div>
	
			<div class="col">
				
					<a href="play.php" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener" target="_blank">Play Now</a>
				
			</div>
	
		

	</div>

</div>

<form method="post" id="checker">

	<div id="checker-header">
		<div class="title" id="checker-title" data-title="Type in your numbers below, Select your numbers below">Type in your numbers below</div>
		<label id="checker-mode-label" style="display:none;">
			<div>Input Mode:</div>
			<input type="checkbox" id="checker-mode">
			<div>
				<span>Change to Select</span>
				<span>Change to Type</span>
			</div>
		</label>
	</div>
	<p style="padding: 20px 30px; margin: 0 0 -30px;">Choose six numbers from <strong>1 to 50</strong> and one Joker from <strong>1 to 5</strong></p>
	<div id="checker-content">
		
		<div id="checker-lines">
			<div class="line" data-index="0">
				<div class="numbers">
					<ul>
						<li><input type="number" min="1" max="50" name="ball" value=""></li><li><input type="number" min="1" max="50" name="ball" value=""></li><li><input type="number" min="1" max="50" name="ball" value=""></li><li><input type="number" min="1" max="50" name="ball" value=""></li><li><input type="number" min="1" max="50" name="ball" value=""></li><li><input type="number" min="1" max="50" name="ball" value=""></li>
					</ul>
					<ul>
						
						<li><input type="number" min="1" max="5" name="joker" value=""></li>
					</ul>
					<div class="clean" style="visibility: hidden;">&times;</div>
				</div>
			</div>
		</div>
	</div>
	
	<button id="checker-add" value="+ Add Line" style="visibility:hidden;">+ Add Line</button>

	<div id="checker-footer">
		<div>
			<label>
				<div>Check the last:</div>
				<select name="checkingPeriod" id="checker-period">
					<option value="7">7 days</option>
					<option value="30">30 days</option>
					<option value="90">90 days</option>
				</select>
			</label>
			<label>
				<div>Draw Days:</div>
				<select name="checkingDays" id="checker-days">
					<option value="0">All</option>
					<option value="3">Tuesday</option>
					<option value="6">Friday</option>
				</select>
			</label>
		</div>
		<div>
			<div id="checker-reset" title="Clear all numbers" style="display:none;" class="button grey reset">Reset Checker</div>
			<input type="hidden" value="" id="checker-submit-value">
			<input type="hidden" name="js" value="disable" id="checker-js-availability">
			<input type="submit" id="checker-submit" value="Check Results" class="button">
		</div>
	</div>
	
</form><br>

<div class="genBox mBottom fx -bt">
	<p>Please note: The results of this checker do not act as proof that you have won a Dream Lotary prize. You must have a valid entry for the draw in question to be able to claim any prizes. Find out more on the <a href="how-to-claim-prizes.php" title="Claim Dream Lotary prizes">Claim Your Prize</a> page.</p>
</div>


<script src="/js/multi-checker-grid.js?v=20201020112742"></script>
<script>
	var checker = new Checker({
		selector: 'checker',
		views: {
			id: 'checker-mode',
			label: 'View mode',
			values: ['inline', 'grid'],
			text: ['Inline', 'Grid']
		},
		balls: {
			ball: {
				id: 'checker-grid-ball',
				name: 'ball',
				text: 'Balls',
				pool: 50,
				select: 6,
				optional: false,
				startWith: 1
			},
			joker: {
				id: 'checker-grid-joker',
				name: 'joker',
				text: 'Joker',
				pool: 5,
				select: 1,
				optional: false,
				startWith: 1
			}
		},

		filters: {
			periods: 'checker-period',
			days: 'checker-days',
		},

		parts: {
			title: "checker-title",
			header: 'checker-header',
			content: 'checker-content',
			lines: 'checker-lines',
			remove: 'remove',
			mode: "checker-mode-label",
			grid: 'checker-grid',
			add: 'checker-add',
			reset: 'checker-reset',
			submit: 'checker-submit',
			submitValue: 'checker-submit-value',
			jsAvailability: 'checker-js-availability',
			selectedMessage: "You have already made all your selections.\nPlease deselect a number or add another line to continue.",
			jokerMessage: "Please enter a joker number from 1 to 5."
		},
		cookies: ['checkingNumbers', 'checkingPeriod', 'checkingDays']
	});
</script>

</div>
<?php
include "include/footer.php";
?>