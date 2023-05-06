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

<h1>Restricted Countries</h1>

<p>Lotto India can be played in India and all over the world. However, there are some countries where the game is not available due to local laws and restrictions. Unfortunately, this means that it is not possible to play in these locations without using a proxy server to <a href="/en/play/express-vpn" title="Download Express VPN now" target="_blank" rel="nofollow noopener">mask your location</a>. A VPN can be used to change the location your browser is using the internet from and therefore suggest you are in a different country to the one you are actually in, whilst also making your internet connection much safer to potential threats. To download the best VPN available in the world, click <a href="/en/play/express-vpn" title="Download Express VPN now" target="_blank" rel="nofollow noopener">here</a>.</p>

<h2>How to setup a VPN</h2>


<p>To download a VPN and start playing online, follow the steps below.</p>
<p>1.	Click <a href="https://www.expressvpn.com/go/features/free-trial?irclickid=3Nq0ZPXKKxyNRaZXXv0%3AkS06UkAVcJ2pqQeJwI0&shareid=&irgwc=1" title="Download Express VPN now" target="_blank" rel="nofollow noopener">here</a> to open Express VPN and then click the ‘Get ExpressVPN’ Button</p>
<p>2.	Choose which plan you would like to sign up for. It is cheaper per month to sign up for a longer amount of time, and all accounts have a 30-day money back guarantee if you are not happy with the service provided</p>


	<p>3.	Once you have signed up you will receive a welcome email with a link to setup the VPN. Click this link</p>
	<img src="images/walkthrough/open-welcome-email.png" alt="ExpressVPN Welcome email" class="VPN">
	<p>4.	Select the device you are using to download the user agent</p>
	<img src="images/walkthrough/download-expressvpn-windows.png" alt="How to Download ExpressVPN" class="VPN">
	<p>5.	Double click the download file on your computer to begin the installation </p>
	<img src="images/walkthrough/windows-download-installer.png" alt="Install the Windows download" class="VPN">
	<p>6.	You will be prompted to install your activation code which can be found in your account</p>
	<img src="images/walkthrough/enter-activation-code.png" alt="Enter your activation code" class="VPN" style="height: 400px">
	<p>Your VPN should then be installed and ready to turn on and off whenever you wish. You will see an On Button which you need to click to turn on the VPN, and from then on you will be browsing from the country shown below the switch. Make sure to choose a country that is not in the restricted countries list below.</p>
	<img src="images/walkthrough/click-to-connect.png" alt="Click to connect to ExpressVPN" class="VPN" style="height: 400px">



	<div class="box-expand">
	<div class="js-tab">Check here to see if your VPN is working and you can play online:</div>
	<div>
		<div class="expandable">
		<p style="color:#0a8901">Congratulations, our checks show you can now play online!</p>
		</div>
	</div>
</div><br>

		<p><strong><p>Once you have done all this then return to the <a href="play.php" title="Play Lotto India Online">tickets page</a> and you will be able to play online!</p></strong></p><br>

	
<div class="box-expand">
	<div class="js-tab">For the full list of restricted countries, click here</div>
	<div>
		<div class="expandable">
			<ul class="list mBottom" style="display: inline-block; padding-right: 20px;">
				<li>Afghanistan</li>
				<li>Australia</li>
				<li>Belgium</li>
				<li>Bulgaria</li>
				<li>Cuba</li>
				<li>Cyprus</li>
				<li>Czech Republic</li>
				<li>Democratic People’s Republic of Korea</li>
				<li>Denmark</li>
				<li style="max-width: 500px;">France <span style="font-size: 0.8em;">(including: Reunion, Martinique, Guadeloupe, French Southern Territories, French Guiana, French Polynesia and New Caledonia)</span></li>
				<li>Greece</li>
				<li>Greenland</li>
				<li>Hong Kong</li>
				<li>Iran</li>
				<li>Iraq</li>
				<li>Israel</li>
				<li>Italy</li>
			</ul>
			<ul class="list" style="display: inline-block; vertical-align: top;">
				<li>Lithuania</li>
				<li>Malaysia</li>
				<li>Myanmar</li>
				<li>Palestinian Territory</li>
				<li>Poland</li>
				<li>Romania</li>
				<li>Serbia</li>
				<li>Singapore</li>
				<li>Slovakia</li>
				<li>Slovenia</li>
				<li>Spain</li>
				<li>Sudan</li>
				<li>Syria</li>
				<li>Turkey</li>
				<li style="max-width: 500px;">USA <span style="font-size: 0.8em;">(including: US Virgin Islands, Puerto Rico, Guam, American Samoa, Northern Mariana Islands and US Minor Outlying Islands)</span></li>
				<li>Yemen</li>
			</ul>
		</div>
	</div>
</div><br>
	
<h2>Why Can’t I Play In These Countries?</h2>
<p>Although Lotto India’s rules state that anyone over the age of 18 can play, certain laws in the countries above restrict users from taking part in international lotteries, including Lotto India. Unfortunately, this means that it is not possible to play in these locations without using a proxy server to mask your location.</p>

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