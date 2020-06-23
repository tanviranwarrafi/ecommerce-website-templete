<div class="jumbotron">
  <div class="container-fluid">
    <div class="center">
      <h1 class="text-danger"><b>Computer City</b></h1>
      <pre class="text-danger"><b>Y o u r  S t o r e s  Y o u r  P l a c e</b></pre> 
    </div>
  </div>
  <div class="header_button">
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#LoginModal">Login</button>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#RegistrationModal">Registration</button>
  </div>



  <!-- The Modal -->
  <div class="modal fade" id="LoginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <!-- Modal Header -->
        <div class="modal-header">
          <center><h3><strong>Customer Login Form</strong></h3></center>
          <!-- <center><h4 class="modal-title">Customer Login Form</h4></center> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <!-- <div class="imgcontainer">
            <center><img src="images/user.png" alt="Avatar" class="avatar" width="15%" height="8%" style="margin-top: -10px"></center>
          </div> -->
          
          <form action="">
            <div class="form-inline">
              <label for="email" class="col-md-4" style="justify-content: flex-start;"><strong>Email address</strong></label>
              <input type="email" class="form-control form-control-sm col-md-8" id="email" name="" placeholder="Enter Email Address">
            </div>
            <div class="form-inline mt-sm-2">
              <label for="pwd" class="col-md-4" style="justify-content: flex-start;"><strong>Password</strong></label>
              <input type="password" class="form-control form-control-sm col-md-8" id="pwd" name="" placeholder="Enter Password">
            </div>
            
            <div class="custom-control custom-checkbox mt-sm-2" style="margin-left: 15px;">
              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
              <label class="custom-control-label" for="customCheck">Remember me</label>
            </div>
            <div class="mt-sm-1">
              <button type="submit" class="btn btn-success btn-sm col-md-5" style="float: right; margin-right: 10px">Submit</button>
            </div>
          </form>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer"> 
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>




  <!-- The Modal -->
  <div class="modal fade" id="RegistrationModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="">
            <div class="form-group">
              <center><h3><strong>Registration Form</strong></h3></center>
            </div>
            <form action="">
              <div class="form-inline mt-sm-2">
                <label for="name" class="col-3" style="justify-content: flex-start;"><strong>Name</strong></label>
                <input type="text" class="form-control col-9" id="name" name="" placeholder="Enter Your Name">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="email" class="col-md-3" style="justify-content: flex-start;"><strong>Email address</strong></label>
                <input type="email" class="form-control col-md-9" id="email" name="" placeholder="Enter Email Address">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="pwd" class="col-md-3" style="justify-content: flex-start;"><strong>Password</strong></label>
                <input type="password" class="form-control col-md-9" id="pwd" name="" placeholder="Enter Password">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="password-confirm" class="col-md-3" style="justify-content: flex-start;"><strong>Confirm Password</strong></label>
                <input type="password" class="form-control col-md-9" id="password-confirm" name="" placeholder="Enter Confirm Password">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="phone" class="col-md-3" style="justify-content: flex-start;"><strong>Contact No</strong></label>
                <input type="text" class="form-control col-md-9" id="phone" placeholder="Enter Contact No">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="city" class="col-md-3" style="justify-content: flex-start;"><strong>City</strong></label>
                <input type="text" class="form-control col-md-9" id="city" placeholder="Enter Your City">
              </div>
              <div class="form-inline mt-sm-2">
                <label for="address" class="col-md-3" style="justify-content: flex-start;"><strong>Address</strong></label>
                <input type="text" class="form-control col-md-9" id="address" placeholder="Enter Your Address">
              </div>
              
            </form>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success col-3" style="float: right;">Submit</button>
          </div>
          
        </div>
      </div>
    </div>