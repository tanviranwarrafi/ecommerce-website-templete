
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
              <div class="row">
                <div class="col-9">
                  Manage Categories
                </div>
                <div class="col-3">
                  <a class="btn btn-info" href="create_category.php">Add New Category</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped" id="dataTable">
                <thead>
                  <tr>
                    <th width="15%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                    <th width="25%" style="text-align: center; border-right: 1px solid #FFF;">Category Name</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Category Image</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Parent Category</th>
                    <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="text-align: center; border-right: 1px solid #FFF;">01</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">Computer</td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">
                      <img src="images/computer.jpg" width="40">
                    </td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">Parent
                    </td>
                    <td style="text-align: center; border-right: 1px solid #FFF;">
                      <a href="edit_category.php" class="btn btn-success">Edit</a>

                      <a href="#deleteModal" data-toggle="modal" class="btn btn-danger">Delete</a>

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
                                Are you sure to delete category 
                                <span class="badge badge-pill badge-warning" style="font-size: 15px;">
                                Computer </span>
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
                  <th width="15%" style="text-align: center; border-right: 1px solid #FFF;">Sl. No</th>
                  <th width="25%" style="text-align: center; border-right: 1px solid #FFF;">Category Name</th>
                  <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Category Image</th>
                  <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Parent Category</th>
                  <th width="20%" style="text-align: center; border-right: 1px solid #FFF;">Action</th>
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
