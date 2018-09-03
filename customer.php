<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer
      </h1>
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
            <div class="box-header" style="padding:50px 20px;">
               <a href="" class="btn btn-success">Add New Customer</a>
               <a href="" class="btn btn-danger">Import</a>
               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer / Company</th>
                  <th>Phone</th>
                  <th>Open Balance</th>
                  <th>Actions</th>    
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Customer Name</td>
                    <td>Customer Phone</td>
                    <td>Customer Balance</td>
                    <td>
                        <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Actions</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="">Create Invoice</a></li>
                    <li><a href="">Quotation</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="">Delete</a></li>
                </ul>
                </div>
                    </td>
                 
                </tr>
	   
	  
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

