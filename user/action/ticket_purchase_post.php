<?php
include '../../constant.php';

if(isset($_POST["submit"])){
 $userId=$_SESSION["USER_ID"];
 $id=$_POST["id"];
 $status='2';
 $ticketAmount=$_POST["ticketAmount"];
 $lotteryAmount=$_POST["lotteryAmount"];
 $lotteryNum=$_POST["lotteryNum"];
 $createdOn=date("Y-m-d h:i:S");
 $createdBy=$_SESSION["NAME"];
 
 $url=$URL. "ticket/update_ticket_purchased.php";
 $url_ticketHistory=$URL. "ticket/create_ticket_purchased_history.php";

 $data = array("id"=>$id, "status"=>$status);

 //print_r($data);
 $postdata = json_encode($data);
 $result=url_encode_Decode($url,$postdata);
 //print_r($result);

// create ticket purchase history

 $history_data = array("userId"=>$userId, "ticketAmount"=>$ticketAmount, "lotteryAmount"=>$lotteryAmount, "lotteryNum"=>$lotteryNum, "status"=>$status, "createdOn"=>$createdOn, "createdBy"=>$createdBy);

 //print_r($data);
 $history_postdata = json_encode($history_data);
 $history_result=url_encode_Decode($url_ticketHistory,$history_postdata);
 //print_r($history_result);

  header('Location:../purchase_ticket.php');
   }

 function url_encode_Decode($url,$postdata){
 $client = curl_init($url);
 curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
 $response = curl_exec($client);
 //print_r($response);
 $result = json_decode($response);
 return $result;

}

?>