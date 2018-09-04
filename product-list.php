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
               <div class="box-header" style="padding:50px 20px;">
                <div class="dropdown">
                <button class="btn btn-success"
                        data-toggle="dropdown">
                    <span id="dropdown_title2">Add Product and Services</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" >
                    <li><a href="add-product.php">Inventory Product</a></li>
                    <li><a href="add-product.php">Non Inventory Product</a></li>
                    <li><a href="add-product.php">Service</a></li>
                    <li><a href="add-product.php">Bundle Product</a></li>
                    
                </ul>
                </div>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Product & Services</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                  <th>Pic</th>
                  <th>Product Name</th>
                  <th>SKU</th>
                  <th>Sales Cost</th>
                  <th>Buying Cost</th>
                  <th>Inventory</th>
                  <th>Type</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                <tr>
	     
                    <td><img src="img/p1.jpg" width="50"></td>
                  <td>Assembel Computer</td>
                  <td>Assembel Computer-3</td>
                  <td>2021.00</td>
                  <td>0.00</td>
                  <td>0</td>
                  <td>Bundle</td>
                  <td>
                      <a href=""><i class="fa fa-edit"></i></a>
                      <a href=""><i class="fa fa-trash"></i></a>
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
