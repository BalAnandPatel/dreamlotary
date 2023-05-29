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


<body>


	<div class="container">
		
		<div class="genBox mBottom" style="position:relative;">


<h2>More Dream Lotary Winners</h2>
<p>Dream Lotary has created more than 12,000 winners since it began. Below you can see details for a small selection of those lucky people, including their location, the draw date in which they won and the prize amount received. <!-- You can also find winners of our <a href="/raffle" title="Dream Lotary Raffle">Dream Lotary Raffle</a> on the dedicated raffle page. --></p>

<table class="alt prizeTable">
	<thead>
		<tr>
			<th>Name</th>
			<th>Lottery No</th>
			<th>Draw Date</th>
		</tr>
	</thead>
	<tbody>
		   <?php 
                       
                     $counter=0;  
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                    {

                  ?>
						<tr>
							<td><span style="text-transform: capitalize;"><?php echo $value1->userName; ?></span></td>
							<td><?php echo $value1->lotteryNum; ?></td>
							<td><?php echo date('l, M d, Y',strtotime($value1->createdOn)); ?></td>
						</tr>
					<?php } } ?>
	</tbody>
</table>

<p>What would you do if you won the Dream Lotary jackpot? Get in touch and tell us why you love to play and how you would spend the prize money. Drop us a line on our social channels or send us an email describing your favourite things about the game, and we’ll add you to our list of biggest Dream Lotary fans.</p>

<div class="fx socialBottom">
	<a href="#" title="Visit the Dream Lotary Facebook page" class="social"  rel="noopener">
		<img src="images/icons/facebook.svg" alt="Facebook"><br>
		Like us on Facebook
	</a>
	<a href="#" title="Visit the Dream Lotary Instagram page" class="social" rel="noopener">
		<img src="images/icons/instagram.svg" alt="Instagram"><br>
		Like us on Instagram
	</a>
	<a href="#" title="Visit the Dream Lotary Twitter page" class="social"  rel="noopener">
		<img src="images/icons/twitter.svg" alt="Twitter"><br>
		Follow us on Twitter
	</a>
	<a href="#" title="Email Dream Lotary" class="social"  rel="noopener">
		<img src="images/icons/mail.svg" alt="Email"><br>
		Email
	</a>
</div><br>

<p style="font-size:13px; font-style:italic;">Images used on this page are for illustration purposes only.</p>

	
</div>


</div>
<?php
include "include/footer.php";
?>