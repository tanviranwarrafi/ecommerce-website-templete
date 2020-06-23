
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body>
  <div class="container-scroller">
    <?php include("navbar.php"); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include("sidebar.php"); ?>
      

      <div class="main-panel">
        <div class="content-wrapper">

          <div class="card">
            <div class="card-header">
              Manage Orders
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped" id="dataTable">

                <thead>
                  <tr>
                    <th width="5%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                    <th width="5%" style="text-align: center; border-right: 1px solid #FFF;">Orderer ID</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Name</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Phone no</th>
                    <th width="10%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Status</th>
                    <th width="40%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="text-align: center; border-right: 1px solid #FFF;">01</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">#LE100</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">Rafyee Tanvir</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">01521438885</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">
                      <p>
                        <button type="button" class="btn btn-success btn-sm">Seen</button>
                        <!-- <button type="button" class="btn btn-warning btn-sm">Unseen</button> -->
                      </p>

                      <p style="margin-top: -5px;">
                        <button type="button" class="btn btn-success btn-sm">Completed</button>
                        <!-- <button type="button" class="btn btn-warning btn-sm">Not Completed</button> -->
                      </p>

                      <p>
                        <button type="button" class="btn btn-success btn-sm">Paid</button>
                        <!-- <button type="button" class="btn btn-danger btn-sm">Not Paid</button> -->
                      </p>
                    </td>
                    
                    <td style="text-align: center; border-right: 1px solid #FFF;">

                      <a href="show_order.php" class="btn btn-info">View</a>
                      <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Delete</a>
                      <a href="" class="btn btn-danger">Confirm</a>

                      <!-- Delete Modal -->
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;">
                                <i class="fa fa-trash" aria-hidden="true" style="font-size: 30px; color: #E81123; margin-right: 10px;">
                                </i>
                                Attention Please
                                <i class="fa fa-exclamation" aria-hidden="true" style="font-size: 20px; color: #E81123;margin-left: 5px;"></i>
                                <i class="fa fa-exclamation" aria-hidden="true" style="font-size: 20px; color: #E81123;"></i>
                                <i class="fa fa-exclamation" aria-hidden="true" style="font-size: 20px; color: #E81123;"></i>
                              </h5>
                              
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <h4>
                                Are you sure to delete 
                                <span class="badge badge-pill badge-warning" style="font-size: 15px;">Rafyee Tanvirs's </span>
                                order
                              </h4>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <form action="{!! route('admin.order.delete', $order->id) !!}"  method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Permanent Delete</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </td>
                  </tr>
                </tbody>
                
                <tfoot>
                  <tr>
                    <th width="5%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                    <th width="5%" style="text-align: center; border-right: 1px solid #FFF;">Orderer ID</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Name</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Phone no</th>
                    <th width="10%" style="text-align: center; border-right: 1px solid #FFF;">Orderer Status</th>
                    <th width="40%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
                  </tr>
                </tfoot>

              </table>
            </div>
          </div>

        </div>
      </div>


    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include("scripts.php"); ?>
</body>

</html>