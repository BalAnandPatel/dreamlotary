<?php
include "include/header.php";
// try{
$url = $URL."user/read_user_profile.php";
// $user_id=$_SESSION['login_session']->agent_id;
$userType='2';
$userEmail='dhananjay@gmail.com';
$data = array( "userType" =>$userType, "userEmail"=>$userEmail);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
// curl_setopt(
//   $client,
//   CURLOPT_HTTPHEADER,
//   array(
//     'Content-Type: application/json',
//     'Authorization: Bearer ' . $token
//   )
// );
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
// if(isset($result->message))
// if ($result->message == "Access denied." && $result->error == "Expired token") {
//   unset($_SESSION['login_session']);
// // }
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Welcome your profile</h1>
          </div><!-- /.col -->
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
             <div class="card card-primary">
              <div class="card-header rounded-0">
                <h3 class="card-title">Profile</h3>
              </div>
              </div>
            
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="image/logo/user_icon.png"
                       alt="User profile picture">
                </div>
                    
                <?php 
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                      {
                    ?>

                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center"></p>

                <ul class="list-group list-group-unbordered mb-3">
                  
                  <li class="list-group-item">
                    <b>Name:</b><a class="float-right"><?php echo $value1->userName; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile No:</b><a class="float-right"><?php echo $value1->userMobile; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email:</b><a class="float-right"><?php echo $value1->userEmail; ?></a>
                  </li>

                </ul>
                 <?php
                      }
                    } 
                 ?>
                <a href="profile_update.php" class="btn btn-primary btn-block"><b>Update Account Details</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
   
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Main content -->
                    <section class="content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">User Account Details</h3>
                              </div>
                              <!-- /.card-header -->
                              <div class="card-body">
                                 <?php //if($L_ROLE->role=='Admin'||$L_ROLE->role=='Super_Admin') {?>
              <table id="example" class="table table-bordered table-striped">
                <?php// }else{?>
                  <table id="example" class="table table-bordered table-striped">
                    <?php// }?>
                                 <?php 
								               
                                  // foreach($result as $key => $value){
                                  // foreach($value as $key1 => $value1)
                                  //  {
                                 ?>              
                                  <thead>
				      			               <tr>
				      			                <th class="col-md-3">Account Holder</th>
				      			                 <td></td>
                                    </tr>
                                    <tr>
                                    <th class="col-md-3">Bank Name</th>
				      			                <td></td>
                                   </tr>
                                   <tr>
                                   <th class="col-md-3">Branch Name</th>
				      			                <td></td>
                                   </tr>
				      			                <tr>
				      			                 <th class="col-md-3">IFSC Code</th>
				      			                 <td></td>
                                    </tr>
                                     <tr>
                                     <th class="col-md-3">Account No.</th>
                                     <td></td>
                                    </tr>
                                     <tr>
                                     <th class="col-md-3">Google Pay No.</th>
                                     <td></td>
                                    </tr>
                                     <tr>
                                     <th class="col-md-2">Phone Pay No.</th>
                                     <td></td>
                                    </tr>
				      			                <tr>
				      			                 <th class="col-md-2">Status</th>
				      			                 <td></td>
                                    </tr>
				      			               
				      			               </thead>
			                              <?php 
                                     //  }
                                     // } 
                                    ?>
                                </table>
                              </div>
                              <!-- /.card-body -->
                            </div>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.container-fluid -->
                    </section>
    <!-- /.content -->
                  
                   </div>
                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div> <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "include/footer.php";
?>
