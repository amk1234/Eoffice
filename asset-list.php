<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h3>Asset List</h3>
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
   
    <!-- Main content -->
    <section class="content">
        
        
        
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <!-- Main row -->
     <div class="row">
         <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div class="box">
               
              
            <div class="box-header">
                <hr>
               
                <a href="" class="btn btn-default">Print</a>
                <a href="" class="btn btn-default">Export</a>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>Name</th>
                    <th>Purchase Year</th>
                    <th>Cost</th>
                    <th>Lifespan</th>
                    <th>Salvage Value</th>
                    <th>Depreciation</th>
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>imac</td>
                        <td>2012-02-02</td>
                        <td>1800</td>
                        <td>4</td>
                        <td>200.00</td>
                        <td><a href="view-depreciation.php" class="btn btn-default">View Depreciation</a></td>
                        <td>
                              <div class="dropdown">
                <button class="btn btn-default"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Actions</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
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
      <!-- /.row -->
    </section>
    <!-- /.content -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>








<?php include 'includes/footer.php' ?>
