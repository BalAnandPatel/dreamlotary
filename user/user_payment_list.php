<?php
// error_reporting(0);
include "include/header.php";
  $url = $URL."payment/read_payment_history.php";
  $userType=$_SESSION["USER_TYPE"];
  $userId=$_SESSION["USER_ID"];
  $data = array("userType"=>$userType, "userId"=>$userId);
  //print_r($data);
  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
  //curl_setopt($client, CURLOPT_POST, 5);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  $result = json_decode($response);
  //print_r($result);
  ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Regiserd Users</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User's Details</li>
              <li class="breadcrumb-item active">User's Payment Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
  
    <!-- <div class="alert alert-success" id="success-alert" role="alert"> 
               </div>
          
            <div class="alert alert-danger" id="success-alert" role="alert">
               </div> -->
         
     
        <div class="row">
          <div class="col-12">
            <div class="card">
              
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User's Payment Detail</h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr class="table-warning">
                    <th>Sr No.</th>
                    <th>User Name</th>
                    <th>Lottery Number</th>
                    <th>Lottery Amount</th>
                    <th>Payment Slip No.</th>
                    <th>Payment Slip</th>
                    <th>Payment Mode</th>
                    <th>Remark</th>
                    <th>Status</th>
                    <th>Payment Date</th>
                  </tr>
                    
                  </thead>
                  <tbody>
                  <?php 
                     $counter='0';
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                     {
                     $id = $value1->id;
                     $slip_img = "image/uploads/".$id."/slip/Slip_".$id.".png";
                  ?>  
                  <tr>          
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $value1->userName; ?></td>
                    <td><?php echo $value1->lotteryNum; ?></td>
                    <td><?php echo $value1->lotteryAmount; ?></td>
                    <td><?php echo $value1->slipNum; ?></td>
                    <td>
                    <a href="<?php echo $slip_img; ?>" target="_blank "><button class="btn btn-secondary btn-sm" type="button"><i class="fa fa-eye mr-1"></i>View</button></a>
                    </td>
                    <td><?php echo $value1->paymentMode; ?></td>
                    <td class="col-3"><?php echo $value1->remark; ?></td>
                    <td><button type="button" class="btn btn-light rounded-0"><?php if($value1->status==1) echo "Paid"; else echo "Not Paid"; ?></button></td> 
                    <td class="col-md-2"><?php echo date('d-m-Y',strtotime($value1->createdOn)); ?></td>   
                  </tr>
                  <?php
                     }
                   }
                  ?>
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

  <!-- modal box start-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment Slip</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo $slip_img; ?>" alt="..." class="img-fluid img-thumbnail" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal box end-->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="lugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->

<?php
include "include/footer.php";
?>