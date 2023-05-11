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
 // $read_exam_url=$URL. "exam/read_only_examname.php";

$data = array("userName"=>$userName, "userRole"=>$userRole, "userType"=>$userType, "status"=>$status, "userMobile"=>$userMobile, "userEmail"=>$userEmail, "userPass"=>$userPass, "createdOn"=>$createdOn, "createdBy"=>$createdBy);

//print_r($data);
$postdata = json_encode($data);
$result=url_encode_Decode($url,$postdata);
print_r($result);

 }

 function url_encode_Decode($url,$postdata){
 $client = curl_init($url);
 curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
 $response = curl_exec($client);
 print_r($response);
 $result = json_decode($response);
 return $result;

}

?>