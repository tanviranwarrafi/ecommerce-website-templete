
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
              Edit Brand
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="Sony">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description (optional)</label>
                  <textarea name="description" rows="8" cols="80" class="form-control">Brand Description</textarea>

                </div>


                <div class="form-group">
                  <label for="oldimage">Brand Old Image</label> <br>

                  <img src="images/sony.png" width="100"> <br>

                  <label for="image">Brand New  Image (optional)</label>

                  <input type="file" class="form-control" name="image" id="image" >
                </div>


                <button type="submit" class="btn btn-success">Update Brand</button>
              </form>
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
