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

<h1>Ticket Generator</h1>

<p>Use this Ticket Generator to create your entry for the next Dream Lotary draw. Whether you have some favourite numbers or would prefer to use a random set, it is easy to get started. To pick your own panel, type six numbers between 1 and 50 in the white squares below. Add a Joker Ball from 1 to 5 in the final box to complete one panel. Alternatively, select ‘Quick Pick’ and you will be given a set of random numbers.</p>

<p class="readMore">You can generate up to four entries at a time. Once you are happy, select ‘Choose These Numbers’ and your ticket will be generated. At that point you will need to sign in to your account or register for a new one, then pay for your entries. <!-- Once your purchase is complete, you will receive free entry into the <a href="/raffle" title="Dream Lotary Raffle Information">Dream Lotary Raffle</a>. The more panels you purchase, the more raffle entries you receive. --></p>
<a href="javascript:void(0)" title="Tap to Read More" class="readMore-more" onclick="readMore(this)">Read More</a>

<div class="lotto-india nextBox big centred" style="margin-top: 20px;">

<script type="text/javascript">
	var m = 6; 		//Main Balls
	var b = 1;		//Bonus Balls
	var mp = 50;	//Main ball pool
	var bp = 5;		//Bonus ball pool

	function submitWidget(form) {
		if(window.ga) ga('send','event','TicketGenerator','submit','/ticket-generator.asp');
		return submitForm(form);
	};
</script>

<script type="text/javascript" src="js/widget-jackpot.js"></script>


<form id="JackPotForm" name="JackPotForm" action="/en/play/lotto-india" rel="nofollow noopener" target="_blank" onsubmit="return submitWidget(this)">

	<p>Choose six numbers (1-50) and one Joker Ball (1-5)</p>

	<input id="BrandID" name="BrandID" value="33" type="hidden">
	<input id="ticket" name="ticket" value="" type="hidden">

	

		<div id="widget-line-1" class="widget-line">
	
			
				<input class="quickpick-input input-number" id="jn_1_1" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_1_2" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_1_3" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_1_4" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_1_5" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_1_6" name="MainNumbers" type="tel">
			
			<input class="quickpick-input input-joker" id="jn_1_7" name="BonusNumbers" type="tel">
		
			<span onclick="quickPick(1)" class="button orange">Quick Pick</span>
			<span onclick="clearLine(1);" class="trash">&times;</span>
		</div>
	
	

		<div id="widget-line-2" class="widget-line">
	
			
				<input class="quickpick-input input-number" id="jn_2_1" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_2_2" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_2_3" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_2_4" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_2_5" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_2_6" name="MainNumbers" type="tel">
			
			<input class="quickpick-input input-joker" id="jn_2_7" name="BonusNumbers" type="tel">
		
			<span onclick="quickPick(2)" class="button orange">Quick Pick</span>
			<span onclick="clearLine(2);" class="trash">&times;</span>
		</div>
	
	

		<div id="widget-line-3" class="widget-line">
	
			
				<input class="quickpick-input input-number" id="jn_3_1" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_3_2" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_3_3" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_3_4" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_3_5" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_3_6" name="MainNumbers" type="tel">
			
			<input class="quickpick-input input-joker" id="jn_3_7" name="BonusNumbers" type="tel">
		
			<span onclick="quickPick(3)" class="button orange">Quick Pick</span>
			<span onclick="clearLine(3);" class="trash">&times;</span>
		</div>
	
	

		<div id="widget-line-4" class="widget-line">
	
			
				<input class="quickpick-input input-number" id="jn_4_1" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_4_2" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_4_3" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_4_4" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_4_5" name="MainNumbers" type="tel">
			
				<input class="quickpick-input input-number" id="jn_4_6" name="MainNumbers" type="tel">
			
			<input class="quickpick-input input-joker" id="jn_4_7" name="BonusNumbers" type="tel">
		
			<span onclick="quickPick(4)" class="button orange">Quick Pick</span>
			<span onclick="clearLine(4);" class="trash">&times;</span>
		</div>
	
	
		<!-- <input type="submit" value="Choose These Numbers" class="button green"> -->
		<button type="button" class="btn btn-lg btn-success mt-2">Choose These Numbers</button>
	

</form>

</div>

<p>Please note that your entries will not be valid until they have been paid for or you have activated a <a href="#" title="Dream Lotary Prizes">Free Bet Bonus</a> from a previous draw.</p>

</div>

</div>

<?php
include "include/footer.php";
?>