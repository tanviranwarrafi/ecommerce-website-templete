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
          <div class="card card-body">
            <h3>Welcome to Computer City Admin Panel Dashboard</h3>
            <br>
            <br>
            <p>
              <a href="../home.php" class="btn btn-primary btn-lg" target="_blank">Visit Main Site</a>
            </p>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="" target="_blank">Computer City</a>. © 2018 All rights reserved | Computer City.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">MD. TANVIR ANWAR RAFI<i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->


    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <?php include("scripts.php"); ?>
</body>

</html>
