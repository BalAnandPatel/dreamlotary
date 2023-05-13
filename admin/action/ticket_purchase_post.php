<?php
include '../../constant.php';

if(isset($_POST["submit"])){

 $id=$_POST["id"];
 $status='2';

 $url=$URL. "ticket/update_ticket_purchased.php";
 $data = array("id"=>$id, "status"=>$status);

 //print_r($data);
 $postdata = json_encode($data);
 $result=url_encode_Decode($url,$postdata);
 //print_r($result);
 if($result->message=="Successfull"){
 header('Location:../ticket_list.php');
 } 
 header('Location:../ticket_list.php');
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