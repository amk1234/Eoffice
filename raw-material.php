<?php
include 'includes/header.php' ?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
<!--      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>-->
    </section>
    <hr>
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
              <h3 class="box-title">Raw Material</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>ID</th>
                  <th>Item</th>
                  <th>Qty</th>
                  <th>Available Qty</th>
                  <th>Unit of Measurement</th>
                  <th> Total</th>
                  <th>Action</th>
                 
                  
                </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" name="raw_material_id"></td>
                        <td>
                            <input type="text" class="form-control" name="raw_material_item">
                        </td>
                        <td><input type="text" class="form-control" name="raw_material_qty"></td>
                        <td><input type="text" class="form-control" name="available_qty"></td>
                        <td><input type="text" class="form-control" name="raw_material_unit"></td>
                        <td><input type="text" class="form-control" name="raw_material_total"></td>
                        <td><a href="" class="btn btn-success btn-xs">Submit To Production</a></td>
                    </tr>
	    
                
                
                </tbody>
                
                
              </table>
                    </form>
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
