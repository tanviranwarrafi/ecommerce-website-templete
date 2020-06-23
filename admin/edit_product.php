
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
              Edit Product
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="Hp Probook" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="description" rows="8" cols="80" class="form-control">Hp Probook Series Laptop</textarea>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" name="price" id="exampleInputEmail1" value="50000">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" value="10">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Category</label>
                  <select class="form-control" name="category_id">
                    <option value="">Please select a category for the product</option>
                    <option value="">Parent Name</option>
                    <option value=""> ------> Child Name</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Brand</label>
                  <select class="form-control" name="brand_id">
                    <option value="">Please select a brand for the product</option>
                    <option value="">Sony</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="product_image">Product Image</label>

                  <div class="row">
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                    <div class="col-md-4">
                      <input type="file" class="form-control" name="product_image[]" id="product_image" >
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
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
