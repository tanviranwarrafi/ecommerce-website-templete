
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
              Add Brand
            </div>
            <div class="card-body">
              <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter Brand Name">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
                </div>


                <div class="form-group">
                  <label for="image">Brand Image (optional)</label>
                  <input type="file" class="form-control" name="image" id="image" >
                </div>


                <button type="submit" class="btn btn-primary">Add Brand</button>
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
