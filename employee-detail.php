<?php
include 'includes/header.php' ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
     
    </section>    

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile" style="padding:100px 0px;">
              

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">EMPLOYEE ID : 10001</p>

              

              <center><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal6"><b>Termination</b></a></center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
<!--          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
             /.box-header 
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
             /.box-body 
          </div>-->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#roles" data-toggle="tab">Personal Details</a></li>
              <li><a href="#profile" data-toggle="tab">Contact Details</a></li>
              <li><a href="#dependants" data-toggle="tab">Dependents</a></li>
              <li><a href="#job" data-toggle="tab">Job</a></li>
              <li><a href="#salary" data-toggle="tab">Salary</a></li>
              <li><a href="#report" data-toggle="tab">Report-to</a></li>
              <li><a href="#direct_deposit" data-toggle="tab">Direct Deposit</a></li>
              <li><a href="#employee_login" data-toggle="tab">Login</a></li>
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
            <br>
            <form role="form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Maritial Status</label>
                        <select class="form-control">
                            <option>Please Select</option>
                            <option>Single</option>
                            <option>Married</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <select class="form-control">
                            <option>Please Select</option>
                            <option>Pakistan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Blood Group</label>
                        <select class="form-control">
                            <option>Please Select</option>
                            <option>A</option>
                            <option>B</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label>Religion</label>
                        <select class="form-control">
                            <option>Please Select</option>
                            <option>Muslim</option>
                            <option>Hindu</option>
                            <option>Christian</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                     <div class="form-group">
                        <label>Gender</label>
                        <br>
                        Male <input type="checkbox" >
                        Female <input type="checkbox">
                    </div>
                    <div class="form-group">
                        
                        <input type="file" class="form-control" style="width:50%;">
                    </div>
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Attachments</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Add Attachement</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th><input type="checkbox"></th>
                  <th>File Name</th>
                  <th>Description</th>
                  <th>Date Added</th>
                  <th>Added By</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>03 Sep 2018</td>
                        <td>Web Master</td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
              </div>
                  
              <div class="tab-pane" id="profile">
               
	       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <form role="form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>Address Street 1</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Address Street 2</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                   
                   
                    <div class="form-group">
                        <label>City</label>
                        <select class="form-control" style="width:50%;">
                            <option>Please Select</option>
                            <option>Washington</option>
                            <option>Married</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Zip Postal Code</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                      <div class="form-group">
                        <label>Country</label>
                        <select class="form-control" style="width:50%;">
                            <option>Please Select</option>
                            <option>Pakistan</option>
                        </select>
                    </div>
                    <hr>
                     <div class="form-group">
                        <label>Home Telephone</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Work Email</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Work Telephone</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Other Email</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                     
                   
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Emergency Contact</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Add Emergency</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th><input type="checkbox"></th>
                  <th>Name</th>
                  <th>Relationship</th>
                  <th>Home Telephone</th>
                  <th>Mobile</th>
                  <th>Work Telephone</th>
                  <th>Actions</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>03 Sep 2018</td>
                        <td>Web Master</td>
                        <td>Web Master</td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
               
              </div>
             
              <div class="tab-pane" id="dependants">

	       <div class="row">
        <!-- left column -->
       
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Dependents</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal4">Add Dependent</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th><input type="checkbox"></th>
                  <th>Name</th>
                  <th>Relationship</th>
                  <th>Date of Birth</th>
                  <th>Actions</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>03 Sep 2018</td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>

              </div>
                
              <div class="tab-pane" id="job">
                <!-- Post -->
               <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employment Commencement</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <form role="form">
                <div style="padding:20px 30px;">
                   
                    <div class="form-group">
                        <label>Joined Date</label>
                        <input type="date" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Probation End Date</label>
                        <input type="date" class="form-control"  style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Date of Permanency</label>
                        <input type="date" class="form-control"  style="width:50%;">
                    </div>
                   
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Job History</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal5">Add New Job</a>
                      
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                 
                  <th>Effective</th>
                  <th>Department</th>
                  <th>Job Title</th>
                  <th>Job Type</th>
                   <th>Shift</th>
                   <th>Status</th>
                   <th>Actions</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>03 Sep 2018</td>
                        <td>Web Master</td>
                        <td>Web Master</td>
                        <td>Web Master</td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                            <a href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
              </div>
                
              <div class="tab-pane" id="salary">
                <!-- Post -->
               <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
                
              <h3 class="box-title">Salary</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            
            <div class="custom-box" style="padding:0px 30px;">
                <h4>Salary Type</h4>
                <div class="form-group">
                    <input type="radio" id="monthly" name="hourly" checked=""> &nbsp; Monhtly
                    <input type="radio" id="hourly" name="hourly" > &nbsp; Hourly
                </div>
            </div>
            
            
            
            <form role="form" id="monthly_form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>Pay Grade</label>
                        <select class="form-control">
                            <option>Select Pay Grade</option>
                            <option>Grade 1</option>
                            <option>Grade 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea rows="5" class="form-control" placeholder="Grade A"></textarea>
                    </div>
                </div>
                
                
               
                
                 <div class="custom-box" style="padding:0px 30px;">
                <h4>Salary - All Earnings</h4>
                <hr>
                <table  style="width:100%" class="custom-table">
                    <tr>
                        <td>Basic Payment (Amount)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>Car Allowance (Percentage)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>Medical Allowance (Percentage)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>Living Allowance (Amount)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>House Rent (Percentage)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                </table>
               
            </div>
                
                <div class="custom-box" style="padding:0px 30px;">
                <h4>Salary - All Deductions</h4>
                <hr>
                <table  style="width:100%" class="custom-table">
                    <tr>
                        <td>Gratuity (Amount)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>Pension Fund (Percentage)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                     <tr>
                        <td>Insurance (Amount)</td>
                        <td><input type="text" class="form-control" value="8000"></td>
                    </tr>
                    
                </table>
               
            </div>
                
                <div class="custom-box" style="padding:0px 30px;">
                <h4>Salary - Summary</h4>
                <hr>
                <table  style="width:100%" class="custom-table">
                    <tr>
                        <td>Total Deductions</td>
                        <td>USD 950</td>
                    </tr>
                    <tr>
                        <td>Total Payable</td>
                        <td>USD 950</td>
                    </tr>
                    <tr>
                        <td>Cost to the company</td>
                        <td>USD 92250</td>
                    </tr>
                     
                    
                </table>
               
            </div>
                
                
                
                
                
                
                
                
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
             <form role="form" id="hourly_form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>Hourly Salary</label>
                        <input type="text" class="form-control" placeholder="Hourly Salary"> 
                    </div>
                </div>
             
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        <script>
        $(document).ready(function(){
            
            $("#hourly_form").hide();
            
            
            $("#monthly").click(function(){
               $("#monthly_form").show();
               $("#hourly_form").hide();
               
            });
             $("#hourly").click(function(){
               $("#monthly_form").hide();
               $("#hourly_form").show();
               
            });
            
            
        });
        
        </script>
        
        
        
        
        
        
        
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Attachments</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success">Add Attachement</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th><input type="checkbox"></th>
                  <th>File Name</th>
                  <th>Description</th>
                  <th>Date Added</th>
                  <th>Added By</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" ></td>
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>03 Sep 2018</td>
                        <td>Web Master</td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
              </div>
                               
	      <div class="tab-pane" id="report">
               
	       <div class="row">
        <!-- left column -->
       
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Assigned Supervisors</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Supervisor</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                 
                  <th>Employee</th>
                  <th>Supervisor</th>
                  <th>Actions</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>
                   
                   
               <div class="row">
        <!-- left column -->
       
        
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Assigned Subordinate</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
            <form role="form">
                 <div class="box-body">
                       <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Add Subordinate</a>
                       <a href="" class="btn btn-danger">Delete</a>
                       <hr>
              <table  class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                 
                  <th>Employee</th>
                  <th>Subordinate</th>
                  <th>Actions</th>
                 
                  
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td>Web Dev Proposal</td>
                        <td>Proposal </td>
                        <td>
                            <a href=""><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
                
              </table>
            </div>
              <!-- /.box-body -->

             
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      </div>    
                   
                   
               
              </div>
                
              <div class="tab-pane" id="direct_deposit">
                <!-- Post -->
               <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Direct Deposit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <form role="form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>Account Name</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Account Number</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Note</label>
                        <textarea row="5" class="form-control" value="Each month first week deposit money"></textarea>
                    </div>
                   
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      
        
      </div>
              </div>
         
              <div class="tab-pane" id="employee_login">
                <!-- Post -->
               <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Employee Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <br>
            <form role="form">
                <div style="padding:20px 30px;">
                    <div class="form-group">
                        <label>Login ID</label>
                        <input type="text" class="form-control" style="width:50%;" value="1001" readonly="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" class="form-control" style="width:50%;">
                    </div>
                    <div class="form-group">
                        <label>Active/Deactivate</label>
                       
                    </div>
                    <div class="form-group">
                       
                        <label class="switch"> 
                           
                            <input type="checkbox">
                            <span class="slider round"></span>
                            
                        </label>
                    </div>
                   
                </div>
                 <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Password</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         

        </div>
        
      
        
      </div>
              </div>  
                
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

        
        <!--TERMINATION-->
         <div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terminate</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label>Termination Date</label>
                  <input type="date" class="form-control">
              </div>
               <div class="form-group">
                  <label>Termination Reason</label>
                  <input type="text" class="form-control" >
              </div>
                <div class="form-group">
                  <label>Termination Note</label>
                  <textarea rows="5" class="form-control" ></textarea>
              </div>
             
              
              <div class="form-group">
                
                  <input type="submit" class="btn btn-success" value="Add">
              </div>
           


         
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!--TERMINATION-->
        
        
        <!--ADD JOB MODAL-->
        <div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Job</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label>Effective From</label>
                  <input type="date" class="form-control">
              </div>
              <div class="form-group">
                  <label>Department</label>
                  <select class="form-control">
                      <option>Please Select</option>
                  </select>
              </div>
               <div class="form-group">
                  <label>Job Title</label>
                  <select class="form-control">
                      <option>Please Select</option>
                  </select>
              </div>
               <div class="form-group">
                  <label>Job Category</label>
                  <select class="form-control">
                      <option>Please Select</option>
                  </select>
              </div>
             <div class="form-group">
                  <label>Employment Status</label>
                  <select class="form-control">
                      <option>Please Select</option>
                  </select>
              </div>
               <div class="form-group">
                  <label>Work Shift</label>
                  <select class="form-control">
                      <option>Please Select</option>
                  </select>
              </div>
              
              <div class="form-group">
                
                  <input type="submit" class="btn btn-success" value="Add">
              </div>
           


         
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!--ADD JOB MODAL-->
        
        
       <!--ADD DEPENDANT MODAL-->
         <div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Dependent</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Relationship Type</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Date of Birth</label>
                  <input type="date" class="form-control">
              </div>
              
              <div class="form-group">
                
                  <input type="submit" class="btn btn-success" value="Add">
              </div>
           


         
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       <!--ADD DEPENDANT MODAL-->
        
        
        <!--ADD EMERGENCY MODAL-->
           <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Emergency</h4>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Relationship</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Home Telephone</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control">
              </div>
              <div class="form-group">
                  <label>Work Telephone</label>
                  <input type="text" class="form-control">
              </div>



         
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!--ADD EMERGENCY-->
        
        <!--ADD ATTACHEMENT MODAL-->
          <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Attachment</h4>
      </div>
      <div class="modal-body">
          <form>
          <div class="form-group">
              <label>Attachment</label>
              <input type="file" class="form-control">
          </div>
               <div class="form-group">
              <label>Description</label>
              <textarea rows="5" class="form-control"></textarea>
             
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <!--ADD ATTACHEMENT MODAL-->

       <!--SUPERVISOR MODAL BOX-->
       <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Supervisor</h4>
      </div>
      <div class="modal-body">
          <form>
          <div class="form-group">
              <label>Department</label>
              <select class="form-control">
                  <option>Department</option>
              </select>
          </div>
               <div class="form-group">
              <label>Employee</label>
              <select class="form-control">
                  <option>Employee</option>
              </select>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       <!--SUPERVISOR MODAL BOX-->
        
        <!--SUBORDINATE MODAL BOX-->
       <div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Subordinate</h4>
      </div>
      <div class="modal-body">
          <form>
          <div class="form-group">
              <label>Department</label>
              <select class="form-control">
                  <option>Department</option>
              </select>
          </div>
               <div class="form-group">
              <label>Employee</label>
              <select class="form-control">
                  <option>Employee</option>
              </select>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       <!--SUBORDINATE MODAL BOX-->
        
        
        
        
        
        
        
        
        
<?php include 'includes/footer.php' ?>