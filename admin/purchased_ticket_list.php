<?php
include "include/header.php";

$url = $URL."ticket/read_ticket_byStatus.php";
$status=2;
$userType=$_SESSION["USER_TYPE"];
$userId=$_SESSION["USER_ID"];
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <?php if(isset($_SESSION['ticket_delete_success'])){ ?>

                 <div class="alert alert-success" id="success-alert" role="alert">
                  <?php echo $_SESSION['ticket_delete_success']; 
                  unset($_SESSION['ticket_delete_success']); ?>
                 </div>

                <?php } ?>

        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Notification details</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchased Ticket List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Purchased Ticket details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="table-warning">
                    <th>S.N</th>
                    <th>Ticket Amount</th>
                    <th>Lotary Amount</th>
                    <th>Lotary Number</th>
                    <th>Status</th>
                    <th>Purchased By</th>
                    <th>Select</th>
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
                    <td class="col-md-1"><?php echo ++$counter; ?> </td>
                    <td><?php echo $value1->ticketAmount; ?></td>
                    <td><?php echo $value1->lotaryAmount; ?></td>
                    <td><?php echo $value1->lotaryNum; ?></td>
                    <td class="col-md-1">
                      <?php if($value1->status=='1'){?>
                      <button type="button" name="submit" class="btn btn-light btn-sm rounded-0">Not Purchased</button>
                      <?php }else if($value1->status=='2'){?>
                      <button type="button" class="btn btn-light btn-sm rounded-0">Purchased</button>
                      <?php } ?>
                    </td>
                    <td><?php echo $value1->createdBy; ?></td>
                    <td>
                        <div class="form-group">
                        <input type="checkbox">
                        </div>
                    </td>
                  </tr>
             
                  <?php } } ?>

                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include "include/footer.php"

?>