<?php
include '../../constant.php';
include '../../common/php-jwt/src/JWT.php';
include '../../common/php-jwt/src/ExpiredException.php';
include '../../common/php-jwt/src/SignatureInvalidException.php';
include '../../common/php-jwt/src/BeforeValidException.php';
use \Firebase\JWT\JWT;

$userPass= $_POST["userPass"]; 
$userEmail= $_POST["userEmail"];
$url = $URL."user_login/user_login_read.php";
$data = array("userEmail" =>$userEmail, "userPass" =>$userPass);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($client, CURLOPT_CONNECTTIMEOUT, 0); 
curl_setopt($client, CURLOPT_TIMEOUT, 4); //timeout in seconds
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
// curl_close($client);
//print_r($response);

$decode = (json_decode($response));

//print_r($decode);

if(!isset($decode->data->message)=="Request Failed"){
// echo "hello";
  $result = JWT::decode($decode->access_token, $SECRET_KEY, array('HS256'));
  //print_r($result);
  $uid=$result->data->id;
  $userEmail=$result->data->userEmail;
  $name=$result->data->userName;
  $userType=$result->data->userType;
  $userRole=$result->data->userRole;

  $_SESSION["USER_ID"]=$uid;
  $_SESSION["USER_Email"]=$userEmail;
  $_SESSION["USER_TYPE"]=$userType;
  $_SESSION["USER_ROLE"]=$userRole;
  $_SESSION["NAME"]=$name;
  $_SESSION["JWT"]=$result;
  $_SESSION['MEMBBER_FROM']=$result->data->createdOn;
 //print_r($_SESSION['SPONSOR_ID']);
  header('Location:../adm_dashboard.php');
 }else{
 header('Location:../index.php?msg='.$result->message); 
 }

// function giplCurl($api,$postdata){
//    $url = $api; 
//    $client = curl_init($url);
//     curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
//     curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
//     $response = curl_exec($client);
//   //  print_r($response);
//     return $result = json_decode($response);
// }

?>