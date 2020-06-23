
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
              View Order #LE100
            </div>
            <div class="card-body">
              
              <h3>Order Information</h3>
              <div class="row">
                <div class="col-md-6 border-right">
                  <p><strong>Orderer Name : </strong>Rafyee Tanvir</p>
                  <p><strong>Orderer Phone : </strong>01521438885</p>
                  <p><strong>Orderer Email : </strong>tanvir.anwar2@gmail.com</p>
                  <p><strong>Orderer Shipping Address : </strong>Nayapara, Jamalpur</p>
                </div>
                <div class="col-md-6">
                  <p><strong>Orderer Payment Method : </strong>Bkash</p>
                  <p><strong>Orderer Payment Transaction : </strong>SFJBSF261169YREFV10</p>
                </div>
                <hr>
                <h3>Ordered Items </h3>
                <table class="table table-bordered table-stripe">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Product Title</th>
                      <th>Product Image</th>
                      <th>Product Quantity</th>
                      <th>Unit Price</th>
                      <th>Sub total Price</th>
                      <th>
                        Delete
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        01
                      </td>
                      <td>
                        <a href="">Hp Probook</a>
                      </td>
                      <td>
                        <img src="images/computer.jpg" width="60px">
                      </td>
                      <td>
                        <form class="form-inline" action="" method="post">
                          <input type="number" name="product_quantity" class="form-control col-8" value="1"/>
                          <button type="submit" class="btn btn-success ml-1">Update</button>
                        </form>
                      </td>
                      <td>
                        50000
                      </td>
                      <td>
                        50000 Taka
                      </td>
                      <td>
                        <form class="form-inline" action="" method="post">
                          <input type="hidden" name="cart_id" />
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="4"></td>
                      <td>
                        Total Amount:
                      </td>
                      <td colspan="2">
                        <strong>50000 Taka</strong>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <hr>
                
                <form action="" class="form-inline" style="display: inline-block!important;" method="POST">
                  <input type="submit" value="Cancel Order" class="btn btn-danger">
                  <!-- <input type="submit" value="Complete Order" class="btn btn-success"> -->
                </form>

                <form action="{{ route('admin.order.paid', $order->id) }}" class="form-inline ml-2" style="display: inline-block!important;" method="POST">
                  <!-- <input type="submit" value="Cancel Payment" class="btn btn-danger"> -->
                  <input type="submit" value="Paid Order" class="btn btn-success">
                </form>
                
              </div>
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
