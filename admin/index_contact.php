
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
              Manage Messages
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped" id="dataTable">
                <thead>
                  <tr>
                    <th width="15%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                    <th width="30%" style="text-align: center; border-right: 1px solid #FFF;">Name</th>
                    <th width="30%" style="text-align: center; border-right: 1px solid #FFF;">Email</th>
                    <th width="25%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="text-align: center; border-right: 1px solid #FFF;">01</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">Rafyee Tanvir</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">tanvir.anwar2@gmail.com</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">
                      <a href="#viewModal" data-toggle="modal" class="btn btn-warning">View</a>
                      <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Delete</a>

                      <!-- Delete Modal -->
                      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><center>Contact Information</center></h5>
                            </div>

                            <div class="modal-body">

                              <form action="">
                                <div class="form-inline mt-sm-2">
                                  <label for="name" class="col-sm-3" style="justify-content: flex-start;"><strong>Name:</strong></label>
                                  <h1 type="text" class="form-control mt-sm-2" style="font-size: 20;"><strong>Rafyee Tanvir</strong></h1>
                                </div>
                                <div class="form-inline">
                                  <label for="email" class="col-sm-3" style="justify-content: flex-start;"><strong>Email Addres:</strong></label>
                                  <h1 type="text" class="form-control mt-sm-2" style="font-size: 20;"><strong>tanvir.anwar2@gmail.com</strong></h1>
                                </div>
                                <div class="form-inline mt-sm-3">
                                  <label for="message" class="col-sm-3" style="justify-content: flex-start;"><strong>Message:</strong></label>
                                </div>
                                <div>
                                  <h1 type="text" class="form-control mt-sm-2" style="font-size: 20;">Admin Panel of Ecommerce website</h1>
                                </div>
                              </form>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

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
                                <span class="badge badge-pill badge-warning" style="font-size: 15px;">Rafyee Tanvir's 
                                </span>
                                message
                              </h4>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <form action=""  method="post">
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
                    <th width="15%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                    <th width="30%" style="text-align: center; border-right: 1px solid #FFF;">Name</th>
                    <th width="30%" style="text-align: center; border-right: 1px solid #FFF;">Email</th>
                    <th width="25%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
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