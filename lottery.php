<?php
include "include/header.php";

$url = $URL."ticket/read_ticket.php";
$data = array();
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

<!-- start new line -->
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

	<h1>Play Dream Lotary</h1>

	<p>Take the chance to win a jackpot worth at least ₹4 Crore by playing Dream Lotary today. You could even win up to ₹40 Crore when special Bumper Draws are held. It's the largest online Indian lottery ever, not to mention the first of its kind: a national lottery for Indian people on every continent. Dream Lotary draws take place at 6:00 PM every Tuesday and Friday. Match just one ball to win the Free Bet Bonus, and match all the winning numbers for a jackpot at least three times larger than some Indian state lotteries. To find out more, visit the <a href="how-to-play.php" title="How to Play Dream Lotary">How to Play</a> page.</p>

	
	
	<div class="centred">
		<div class="lotto-india nextBox big" style="position: relative;">
	
			
				<div class="imgBox">
					<img src="images/logo.png" alt="lotto-india Logo">
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
			var hours696 = 5;
			var minutes696 = 36;
			var seconds696 = 15;
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
			<span class="counterPart"><span class="counterType">hours</span><span class="counterVal">5</span></span>
			<span class="counterPart"><span class="counterType">mins</span><span class="counterVal">36</span></span>
			<span class="counterPart"><span class="counterType">secs</span><span class="counterVal">15</span></span>
		</noscript></div>
						</div>
					
						<a href="#lottery.php" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener">Play Now</a>
					
				</div>
		
			
	
		</div>

	</div>
		
	<div class="centred">
  <?php 
         $counter=0;  
         foreach($result as $key => $value){
         foreach($value as $key1 => $value1)
      {
      ?>
	<div class="jackpotBox lottery euromillions">
		<div class="title">Ticket&nbsp;&nbsp;Amount&nbsp;&nbsp;<?php echo $value1->ticketAmount; ?> &#8377;</div>	
		<div class="subJackpot"><?php echo $value1->lotteryNum; ?></div>
		<div class="jackpot">&#8377;<?php echo $value1->lotteryAmount; ?></div>
		<div class="date"><?php echo date('l d M',strtotime($value1->createdOn)); ?></div>
		<!-- <div class="date">Tuesday 9th May</div> -->
		 
			<a href="#" title="Play Now" target="_blank" class="button" onclick="goLogin()">Play Now</a>
		
	</div>
  <?php } } ?>
</div><br>

	<!-- <p>Once you select 'Play Now' and complete your purchase for the next Dream Lotary draw, you will be automatically entered into the <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a>. Giving you a chance at winning the guaranteed monthly prize.</p> -->
			
	<h2>Why Play the Lottery Online?</h2>

    <p>Entering online is much quicker and more convenient than purchasing a paper ticket from a retailer, and you can do it from home or on the go. Here are some of the biggest benefits to playing online lotteries:</p>

	<div class="col-list p-margin alLeft">
        <div>
            <img src="images/icons/secure.svg" alt="Secure">
            <p>The numbers you pick are kept safe in your online account – you’ll never have to worry about losing a ticket.</p>
        </div>
        <div>
            <img src="images/icons/notification.svg" alt="Notification">
            <p>You’ll receive an automatic email every time you win a prize, so you’ll never miss a win again!</p>
        </div>
        <div>
            <img src="images/icons/online.svg" alt="Online">
            <p>You can log in to your account from your phone, computer, or tablet, and you don't need a lottery card.</p>
        </div>
        <div>
            <img src="images/icons/thumb.svg" alt="Convenience">
            <p>Get your entries quickly and easily online; no more queuing for tickets at your local mom-and-pop store.</p>
        </div>
    </div>

</div>

</div>


<?php include "include/footer.php"; ?>