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
               
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Department</a>
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
	       
                    <th>Department</th>
                    <th>Description</th>
                    <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                <tr>
	     
                    <td>Q/A</td>
                    <td>Testing</td>
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





<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Department</h4>
      </div>
      <div class="modal-body">
          <form>
              
              <div class="form-group">
                  
                  <input type="text" class="form-control" placeholder="Department">
                  
              </div>
              <div class="form-group">
                  
                  <input type="text" class="form-control" placeholder="Descriptipn">
                  
              </div>
              <div class="form-group">
                  
                  <input type="submit" value="Add" class="btn btn-primary">
                  
              </div>
              
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php include 'includes/footer.php' ?>
