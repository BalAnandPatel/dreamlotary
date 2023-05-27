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
<br><br><br>


<h1 align="center" style="font-weight: bold;">Lottery  Ticket Number</h1>


<br><br>

<style>
  .col{
    display: flex;
    /*justify-content: center;
    align-items: center;*/
    height:auto;
    font-size:15px;
    font-weight: bold;
    cursor:pointer;
  }

  .col ul{
   margin:0;
   padding:5px 0px;
  list-style:none;
  }
  
  .col li{
  display:flex;
  align-items: center;
  padding:1px 0px; 
  }

  .col li span{
   margin:0px 5px; 
  }

  .col:nth-child(even){
    background-color:black;
    color:#fff !important;
  }

  .col:hover:nth-child(odd){
    background-color:#ddd;
    color:#000 !important;
    font-size:16px;
    transition: font-size 1s;
  }

   .col:hover:nth-child(even){
    background-color:rgb(122,119,45);
    color:#fff !important;
    font-size:16px;
    transition: font-size 1s;
  }

</style>
<div class="container text-center">
  <div class="row">
      <?php 
         $counter=0;  
         foreach($result as $key => $value){
         foreach($value as $key1 => $value1)
      {
      ?>
    <div class="col col-md-12 col-lg-4 col-sm-12 border border-dark text-dark" onclick="goLogin()">
      <ul>
        <li>Lottery No :<span><?php echo $value1->lotteryNum; ?></span><li>
        <li>Ticket Amount :<span><?php echo $value1->ticketAmount; ?></span><li>
        <li>Lottery Amount :<span><?php echo $value1->lotteryAmount; ?></span><li> 
      </ul>
    </a>
    </div>
   <?php } } ?>
  

</div>

<section class="offer_section hero_next_section-margin layout_padding">
  <!--   <div class="container">
      <div class="heading_container">
        <h2>
          Lottery  Detail
        </h2>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <svg xmlns="http://www.w3.org/2000/svg" height="512pt" version="1.1" viewBox="-38 0 512 512.00142" width="512pt">
                <g id="surface1">
                  <path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                  <path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                  <path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 " style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" />
                </g>
              </svg>
            </div>
            <div class="detail-box">
            <a href="#">
              <h6>
                Joining Amount 100
              </h6>
              </a>
              <p>
                
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-box">
            <div class="img-box">
              <svg version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
                <g>
                  <g>
                    <g>
                      <rect x="0" y="128" width="42.667" height="42.667" />
                      <rect x="0" y="213.333" width="42.667" height="42.667" />
                      <path d="M0,384c0,23.467,19.2,42.667,42.667,42.667h170.667v-128H0V384z" />
                      <rect x="85.333" y="42.667" width="42.667" height="42.667" />
                      <path d="M426.667,42.667v42.667h42.667C469.333,64,448,42.667,426.667,42.667z" />
                      <rect x="170.667" y="42.667" width="42.667" height="42.667" />
                      <path d="M42.667,42.667C21.333,42.667,0,64,0,85.333h42.667V42.667z" />
                      <rect x="341.333" y="42.667" width="42.667" height="42.667" />
                      <rect x="426.667" y="298.667" width="42.667" height="42.667" />
                      <rect x="426.667" y="213.333" width="42.667" height="42.667" />
                      <rect x="426.667" y="128" width="42.667" height="42.667" />
                      <path d="M426.667,426.667c21.333,0,42.667-21.333,42.667-42.667h-42.667V426.667z" />
                      <rect x="256" y="42.667" width="42.667" height="42.667" />
                      <rect x="256" y="384" width="42.667" height="42.667" />
                      <rect x="341.333" y="384" width="42.667" height="42.667" />
                    </g>
                  </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>

            </div>
            <div class="detail-box">
            <a href="#">
              <h6>
                Wining Amount 250
              </h6>
              </a>
              <p>
                
              </p>
            </div>
          </div>
        </div>
            
          </div>
        </div> -->
        
        
          
          </div>
        </div>
      </div>
    </div>

  </section>
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
					
						<a href="/en/play/lotto-india" title="Choose Dream Lotary Numbers online" class="button" id="nextPlayButton696" rel="nofollow noopener" target="_blank">Play Now</a>
					
				</div>
		
			
	
		</div>

	</div>
		
	<div class="centred">
<!--     
	<div class="jackpotBox lottery powerball">
		<div class="title">Play Powerball</div>
		<div class="subJackpot" style="color: #333;">$87,000,000</div>
		<div class="jackpot">&#8377;711 Crore!</div>
		<div class="date" style="color: #333;">Saturday 6th May</div>
		
			<a href="/en/play/powerball" rel="nofollow" title="Play Powerball Now" target="_blank" class="button">Play Now</a>
				 
	</div>
	
	<div class="jackpotBox lottery mega-millions">
		<div class="title">Play Mega Millions</div>
		<div class="subJackpot">$83,000,000</div>
		<div class="jackpot">&#8377;678.3 Crore!</div>
		<div class="date">Tuesday 9th May</div>
		
			<a href="/en/play/mega-millions" rel="nofollow" title="Play Mega Millions Now" target="_blank" class="button">Play Now</a>
		
	</div> -->
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
		<div class="date"><?php echo $value1->createdOn; ?></div>
		<div class="date">Tuesday 9th May</div>
		 
			<a href="/en/play/euromillions" rel="nofollow" title="Play EuroMillions Now" target="_blank" class="button">Play Now</a>
		
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