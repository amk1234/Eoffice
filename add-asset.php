<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Asset
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
                    <form role="form">
        <!-- left column -->
                    <div class="col-md-12">
                      <!-- general form elements -->

                      <div class="box box-primary">
<!--                        <div class="box-header with-border">
                          <h3 class="box-title">User Details</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->
                        <table class="custom-table">
                            <tr>
                                <td>Asset Type</td>
                                <td>
                                    <input type="text" class="form-control" name="add_asset_type">
                                </td>
                            </tr>
                            <tr>
                                <td>Purchase Year</td>
                                <td><input type="text" class="form-control" name="asset_purchase_year"></td>
                            </tr>
                             <tr>
                                <td>Cost</td>
                                <td><input type="text" class="form-control" name="asset_cost"></td>
                            </tr>
                            <tr>
                                <td>Lifespan</td>
                                <td><input type="text" class="form-control" name="asset_lifspan"></td>
                            </tr>
                            <tr>
                                <td>Salvage Value</td>
                                <td><input type="text" class="form-control" name="asset_salvage_value"></td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                    

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Asset</button>
              </div>

                    </div>
        
                    
        
                    </form>
      </div>

    </section>
    <!-- /.content -->
  </div>




<?php include 'includes/footer.php' ?>

