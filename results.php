<?php
include "include/header.php";

$url = $URL."ticket/read_release_result.php";
$status=3;
$userType='1';
$userId="";
$data = array("status"=>$status, "userId"=>$userId, "userType"=>$userType);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
?>
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
				<!-- <marquee class="tickerBox" truespeed scrollamount="2" scrolldelay="20" style="background-color: lightgrey; height: 30px;">
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
				</marquee> -->
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

<h1>Results</h1>

<p>The latest Dream Lotary results are displayed here straight after every draw, on Tuesdays and Fridays at 6:00 PM. View the six winning numbers and the Joker Ball to see if you have won the jackpot or one of the other prizes on offer. If you've matched enough numbers to win a prize, head to the <a href="#" title="Claiming Your Prize">How to Claim Prizes</a> page to find out what happens next.</p>

</div>

<!-- <div class="genBox mBottom resultsBox latest fx -md">

<div class="col inner">

	<div class="row fx -cn">
		<div class="date">Friday, <span class="smallerHeading">May 5, 2023</span></div>
		<div class="drawNumber">Draw <span>#407</span></div>
	</div>
	<div class="mainBox fx -ar -bt">
		<ul class="balls">
			
				<li class="ball">1</li>
			
				<li class="ball">3</li>
			
				<li class="ball">9</li>
			
				<li class="ball">34</li>
			
				<li class="ball">40</li>
			
				<li class="ball">41</li>
			
			<li class="ball joker">3</li>
		</ul>
	</div>

</div>

<div class="col resultLinks">
	<a href="check-numbers.php" title="Check your numbers">Check Your Numbers</a>
	<a href="how-to-claim-prizes.php" class="prizes" title="How to Claim Prizes">How to Claim Prizes</a>
</div>

</div>
 -->


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
			
				<a href="#" title="Choose Dream Lotary Numbers online" class="button" onclick="goLogin()">Play Now</a>
			
		</div>

	

</div>

</div>

<div class="previousResults fx">

	
	
		<!-- 	<div class="genBox mBottom resultsBox colHalf resultcard">

				<div class="row fx -bt -al">
					<div class="date">Tuesday, <span class="smallerHeading">May 2, 2023</span></div>
					<div class="drawNumber">Draw <span>#406</span></div>
				</div>
	
				<div class="padded">
					
						<div class="ball">3</div>
					
						<div class="ball">9</div>
					
						<div class="ball">13</div>
					
						<div class="ball">32</div>
					
						<div class="ball">44</div>
					
						<div class="ball">49</div>
					
					<div class="ball joker">5</div>
				</div>
	
			</div> -->
		
		   <?php 
                       
                     $counter=0;  
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                    {

                  ?>
	
			<div class="genBox mBottom resultsBox colHalf resultcard">

				<div class="row fx -bt -al">
					<div class="date"><?php echo date('l',strtotime($value1->createdOn)); ?>, <span class="smallerHeading"><?php echo date('M d, Y',strtotime($value1->createdOn)); ?></span></div>
					<div class="drawNumber">Draw <span>#<?php echo $value1->id; ?></span></div>
				</div>
	
				<div class="padded">	
						<div class="alert text-white bg-success"><?php echo $value1->lotteryNum; ?></div>
				</div>
	
			</div>
          <?php } } ?>	
		
		

</div>


<!-- 
<div class="row fx -md -ar mBottom centred">
<a href="results.php" title="Past Dream Lotary Results" class="button">View Previous Results</a> 
</div> -->


</div>
<?php
include "include/footer.php";
?>