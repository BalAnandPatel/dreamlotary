<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$BASE_URL="website/index.php";
// website file path on server

// $URL="http://krishilimited.com/api/src/";
// $ADMIN_IMG_PATH="http://krishilimited.com/user/img/";
// $GALLERY_IMG_PATH="http://krishilimited.com/admin/image/gallery/";

// website file path on localhost
$URL="http://localhost/dreamlotary/api/src/";
$USER_PROFILE_IMGPATH="http://localhost/dreamlotary/admin/image/user_profile/";

$EXAM_NAME="UPPCL EXAMINATION";
$HOME="website/index.php"; 

$SECRET_KEY = "dKgLINTEL2013aN99840$@";  
$ISSUER_CLAIM = "GLINTEL TECHNOLOGY PVT LTD"; // this can be the servername
$AUDIENCE_CLAIM = "DREAM LOTARY";

$LOGIN_SUCCESS_MSG="Login Successful";
$LOGIN_FAILED_MSG="Request Failed";

$ROLE="";
if(isset($_SESSION["USER_ROLE"]))
if($_SESSION["USER_ROLE"]=="")
{
$ROLE="";    
}else if($_SESSION["USER_ROLE"]=="Admin"){
$ROLE="user_registration_list,ticket_entry,ticket_list";    
}else if($_SESSION["USER_ROLE"]=="User"){
$ROLE="user_registration_list,ticket_list,user_profile";    
}

$USER_REGISTRATION_LIST="user_registration_list";
$TICKET_ENTRY="ticket_entry";
$TICKET_LIST="ticket_list";
$USER_PROFILE="user_profile"; 


?>