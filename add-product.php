<?php
include 'includes/header.php' ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
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
                        <div class="box-header with-border">
                          <h3 class="box-title">Inventory Product</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <table class="custom-table">
                            <tr>
                                <td>Name</td>
                                <td><input type="text" class="form-control" name="add_product_name"></td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><input type="file" class="form-control" name="add_product_image"></td>
                            </tr>
                             <tr>
                                <td>SKU</td>
                                <td><input type="text" class="form-control"  name="add_product_sku"></td>
                            </tr>
                             <tr>
                                <td>Category</td>
                                <td>
                                    <select class="form-control" name="add_product_category">
                                        <option>Select Category</option>
                                        <option>Cat  1</option>
                                        <option>Cat  2</option>
                                    </select>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Category</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sale Price / Rate</td>
                                <td><input type="text" class="form-control" name="product_sale_price"></td>
                                <td><textarea class="form-control" rows="2" name="product_sale_information" placeholder="Sales Information"></textarea></td>
                            </tr>
                            <tr>
                                <td>Cost</td>
                                <td><input type="text" class="form-control" name="product_cost_price"></td>
                                <td><textarea class="form-control" rows="2" name="product_purchase_information" placeholder="Purchase Information"></textarea></td>
                            </tr>
                           
                            <tr>
                                <td>Tax</td>
                                <td>
                                    <select class="form-control" name="product_tax">
                                        <option>Select</option>
                                        <option>GST 15%</option>
                                        <option>GST 10%</option>
                                        <option>GST 50</option>
                                    </select>
                                </td>
                            </tr>
                            
                            
                            
                        </table>
                          
                      </div>
                    </div>

                  

         <div class="col-md-12">
                     

                       <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>

                    </div>
        
                    
        
                    </form>
                    
                   
      </div>

    </section>
    <!-- /.content -->
  </div>

<!--ADD CATEGORY MODAL-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Category</h4>
      </div>
      <div class="modal-body">
          
              <input type="text" class="form-control" name="new_product_category">
         
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Add Category">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 </form>
  </div>
</div>
<!--ADD CATEGORY MODAL-->


<?php include 'includes/footer.php' ?>

