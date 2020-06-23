
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <!-- Brand/logo -->
  <div class="col-sm-8">
    <div class="row">

      <a class="navbar-brand" href="">
        <img src="images/monitor.png" alt="logo" style="width:30px;">
      </a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php"><b>Products</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php"><b>About</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php"><b>Contact</b></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="col-sm-4">
    <form class="form-inline" action="">
      <input class="form-control form-control-sm ml-sm-5 mr-sm-2" type="text" placeholder="Search">
      <button type="button" class="btn btn-success btn-sm"><i class="fa fa-search mr-sm-2"></i><b>Search</b></button>
      <a class="ml-sm-5" href="" data-toggle="modal" data-target="#cartModel"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="color: #DD4F43; font-size: 40px;"></i></a>
    </form>

  </div>

</nav>

<!-- The Modal -->
<div class="modal fade" id="cartModel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

  <!-- Modal body -->
  <div class="modal-body">

    <div>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h3 class="text-center" style="padding: 15px;"><b>My Cart</b></h3>

    </div>

    <table class="table table-striped table-hover table-responsive table-bordered text-center">
      <thead>
        <tr>
          <th style="width: 20%">Product Name</th>
          <th style="width: 20%">Image</th>
          <th style="width: 20%">Price</th>
          <th style="width: 15%">Quantiy</th>
          <th style="width: 10%">Update</th>
          <th style="width: 10%">Delete</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ridmi Note 4</td>
          <td><img src="images/mobile.jpg" width="30px"></td>
          <td>100000 Taka</td>
          <td>
            <input type="number" class="form-control form-control-sm text-center" name="quantity" value="">
            <input type="hidden" name="rowId" value="">
          </td>
          <td><button type="submit" class="btn btn-success btn-sm">Update</button></td>
          <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
        </tr>
        <tr>
          <td>Ridmi Note 4</td>
          <td><img src="images/mobile.jpg" width="30px"></td>
          <td>100000 Taka</td>
          <td>
            <input type="number" class="form-control form-control-sm" name="quantity"value="">
            <input type="hidden" name="rowId" value="">
          </td>
          <td><button type="submit" class="btn btn-success btn-sm">Update</button></td>
          <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
        </tr>
      </tbody>

    </table>
    <!-- <table class="table table-striped table-hover table-responsive table-bordered text-center mb-4" style="width: 50%;margin:0 auto; margin-top:10px;">
  <tr>
    <th style="width:30%">Flat Shipping Rate</th>
    <th style="width:20%">Total Amount</th>  
  </tr>
  <tr>
    <td>100 Taka</td>
    <td>
      <span class="badge badge-pill badge-warning" style="font-size: 15px; margin-top: -10px;">
        100+Product Price
      </span>
    </td>
  </tr>
  
</table> -->
    <div class="clearfix"> </div>

    <div class="modal_body_right_cart simpleCart_shelfItem">
      <form action="" method="post">
        <input type="hidden" name="product_id" value="">
        <input type="hidden" name="product_name" value="">
        <input type="hidden" name="product_price" value="">
        
        <a type="button" href="payment.php" class="btn btn-success btn-sm col-sm-3" style="float: right;">Checkout</a>
        <a type="submit" href="home.php" class="btn btn-info btn-sm col-sm-3 mr-2" style="float: right;">Continue Shopping</a>
      </form>
    </div>

  </div>


</div>
</div>
</div>
