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
                   <form>
                   <table id="example1" class="table table-bordered table-striped">
                
                <tbody>
                    
                    <tr>
                        <th>Category</th>
                        <td><input type='text' class='form-control' name='add_category'></td>
                    </tr>
                    <tr>
                        <td     ><input type='submit' class='btn btn-primary' value='Add Category'></td>
                    </tr>
                
                
                </tbody>
                
              </table>
                   </form>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Category List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>SI</th>
                    <th>Category</th>
                    <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hardware</td>
                        <td>
                            <a href=''><i class='fa fa-edit'></i></a>
                            <a href=''><i class='fa fa-trash'></i></a>
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
