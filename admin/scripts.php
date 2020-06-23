<!-- plugins:js -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  } );
</script>

<!-- CK Editor -->
<!-- <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script> -->
<!--End CK Editor -->

<!-- endinject -->
<!-- Plugin js for this page-->
<script src="node_modules/chart.js/dist/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<script src="js/maps.js"></script>
  <!-- End custom js for this page-->