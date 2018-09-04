<?php
include 'includes/header.php' ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Property Dealer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Total Listings</b> <a class="pull-right">1,322</a>
                </li>
                
              </ul>

<!--              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#roles" data-toggle="tab">User Roles</a></li>
              <li><a href="#profile" data-toggle="tab">User Profile</a></li>
              <li><a href="#settings" data-toggle="tab">User Settings</a></li>
              <li><a href="#password" data-toggle="tab">Change Password</a></li>
              <li><a href="#agency" data-toggle="tab">Agency Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="roles">
                <!-- Post -->
               <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Individual</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                 
                  <input type="checkbox"> Owner/Investor
                </div>
                <div class="form-group">
                 
                  <input type="checkbox"> Talent
                </div>
              
                
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Company</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                 
                  <input type="checkbox" checked> Agent / Broker
                </div>
                <div class="form-group">
                 
                  <input type="checkbox"> Architect
                </div>
	      <div class="form-group">
                 
                  <input type="checkbox"> Corporate Investor
                </div>
	     <div class="form-group">
                 
                  <input type="checkbox"> Listing Administrator
                </div>
	     <div class="form-group">
                 
                  <input type="checkbox"> Parnter Reasearcher
                </div>
              
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="profile">
               
	      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">My Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                </div>
	   <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
                </div>
	     <div class="form-group">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          

        </div>
        <!--/.col (left) -->
 
      </div>
               
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                
	      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Email Settings</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Message Signature</label>
                  <textarea type="email" class="form-control"  placeholder=""></textarea>
                </div>
                
               
	     <table class="custom-table">
	         <tr>
		<td>Email Notifications</td>
		<td><input type="checkbox"> Subscribe</td>
		<td><input type="checkbox"> Unsubscribe</td>
	         </tr>
                 
                  <tr>
		<td>Newsletter</td>
		<td><input type="checkbox"> Subscribe</td>
		<td><input type="checkbox"> Unsubscribe</td>
	         </tr>
                 
                  <tr>
		<td>Automated Reports</td>
		<td><input type="checkbox"> Subscribe</td>
		<td><input type="checkbox"> Unsubscribe</td>
	         </tr>
                 
                  <tr>
		<td>Email Format</td>
		<td><input type="checkbox"> HTML</td>
		<td><input type="checkbox"> Text</td>
	         </tr>
	     </table>
              </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">General Settings</h3>
            </div>
            <div class="box-body">
              
                 <table class="custom-table">
	         <tr>
		<td>Default Currency</td>
                <td>
                    <select class="form-control">
                        <option>Choose</option>
                        <option>Pakistan (PKR)</option>
                    </select>
                </td>
		
	         </tr>
                 
                  <tr>
		<td>Default Area Unit</td>
                <td>
                    <select class="form-control">
                        <option>Choose</option>
                        <option>Area Unit</option>
                    </select>
                </td>
		
	         </tr>
                 
                  <tr>
		<td>Default Language</td>
                <td>
                    <select class="form-control">
                        <option>Choose</option>
                        <option>English</option>
                    </select>
                </td>
		
	         </tr>
                 
                  
	     </table>
                
                
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

           <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">SMS Settings</h3>
            </div>
            <div class="box-body">
              
                 <table class="custom-table">
	         <tr>
		<td>Sms Notification</td>
                <td>
                    <input type="checkbox"> On
                </td>
                <td>
                    <input type="checkbox"> Off
                </td>
		
	         </tr>
                 
                 </table>
                
                
            </div>
            <!-- /.box-body -->
          </div>
           
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          <!-- /.box -->
        
          
         
         

        </div>
        
      </div>
	     
	     
	     
              </div>
	 
	 <div class="tab-pane" id="password">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Old Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputEmail" placeholder="New Password">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputEmail" placeholder="Confirm Password">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
	 
	  <div class="tab-pane" id="agency">
               
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>



<?php include 'includes/footer.php' ?>