<?php
include '../../constant.php';

if(isset($_POST["submit"])){

 $userName=ucfirst($_POST["userName"]);
 $userType='2';
 $userRole="User";
 $status='1';
 $userMobile=$_POST["userMobile"];
 $userEmail=$_POST["userEmail"];
 $userPass=$_POST["userPass"];
 $createdOn=date("Y-m-d h:i:s");
 $createdBy=ucfirst($_POST["userName"]);

 $url=$URL. "user/insert_user.php";
 $max_userid_url=$URL. "user/read_max_userid.php";
 $user_account_url=$URL. "user/insert_user_account.php";

$data = array("userName"=>$userName, "userRole"=>$userRole, "userType"=>$userType, "status"=>$status, "userMobile"=>$userMobile, "userEmail"=>$userEmail, "userPass"=>$userPass, "createdOn"=>$createdOn, "createdBy"=>$createdBy);

//print_r($data);
$postdata = json_encode($data);
$result=url_encode_Decode($url,$postdata);
//print_r($result);

if($result->message=="Successfull"){

$data_maxId = array();
//print_r($data);
$maxId_postdata = json_encode($data_maxId);
$maxId_result=url_encode_Decode($max_userid_url,$maxId_postdata);
// print_r($maxId_result);
$userId=$maxId_result->records[0]->userId;

$useraccount_data = array("userId"=>$userId, "status"=>$status, "createdOn"=>$createdOn, "createdBy"=>$createdBy);

//print_r($data);
$useraccount_postdata = json_encode($useraccount_data);
$user_account_result=url_encode_Decode($user_account_url,$useraccount_postdata);
//print_r($user_account_result);

$_SESSION['user_reg_success']="You have successfully registered.";    
header('location:../user_registration.php');
}else{
$_SESSION['user_reg_error']="User already registered.";    
header('location:../user_registration.php');  
}

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