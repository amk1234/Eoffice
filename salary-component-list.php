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
               
                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Component</a>
                </div>
               
            </div>
              
            <div class="box-header">
              <h3 class="box-title">Salary Component List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
	       
                    <th>Name</th>
                    <th>Type</th>
                    <th>Total Payable</th>
                    <th>Cost to Company</th>
                    <th>Rules</th>
                    <th>Actions</th>
                  
                 
                  
                </tr>
                </thead>
                <tbody>
                    
                <tr>
	     
                    <td>Name</td>
                    <td>Type</td>
                    <td>Total Payable</td>
                    <td>Cost to Company</td>
                    <td>Rules</td>
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
        <h4 class="modal-title">Component Name</h4>
      </div>
      <div class="modal-body">
          <form>
              
              <table class="custom-table" style="width:100%;">
                  <tr>
                      <td>Component Name</td>
                      <td><input type="text" class="form-control"></td>
                  </tr>
                   <tr>
                      <td>Type</td>
                      <td><input type="checkbox"> Earning </td>
                      <td><input type="checkbox"> Deduction</td>
                  </tr>
                  <tr>
                      <td>Add To</td>
                      <td><input type="checkbox"> Total Payable</td>
                      <td><input type="checkbox"> Cost to Company</td>
                  </tr>
                   <tr>
                      <td>Value Type</td>
                      <td><input type="checkbox"> Amount</td>
                      <td><input type="checkbox"> Percentage</td>
                  </tr>
              </table>
              <br>
              <input type="submit" value="Add" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php include 'includes/footer.php' ?>
